<?php

namespace App\Http\Controllers;

use App\Notification;
use Session;
use App\AdminPages;
use App\Module;
use App\Promotion;
use App\properties;
use App\Student;
use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Redirect;
class StudentController extends Controller
{
    //
    public function __construct(){
    }
    public function index(){
        $properties=properties::find(1);
        if(!empty($slug)){
            $seo=AdminPages::where("slug",$slug)->first();
        }else{
            $seo=AdminPages::where("slug","/")->first();
            $base_url = url()->full();
            $menu = Module::getMenu(0, $base_url,0);
            $slider=AdminPages::getHomePage()->slide()->get();
            $sections = AdminPages::getHomePage()->sections()->get();
            $promotion=Promotion::where("is_active",1)
                ->where(function($q){
                    $date=date("Y-m-d");
                    $q->where("start_date","<",$date);
                    $q->where("expiration_date",">=",$date);
                })->get();
            Session::get('key');
        }
        return view('student',compact('seo','properties','menu','slider','sections','promotion'));
    }
    //check login
    public function checkLogin(Request $request){
        $validator = Validator::make($request->all(), [
            'emailAddress' => 'required|email',
            'Password' => 'required|min:3',
            'g-recaptcha-response' => 'required|captcha'
        ]);
        if ($validator->fails()) {
            Session::flash('errors', $validator->messages());
            return redirect()->back()->withInput();
        }else{
            $input=$request->all();
            $sql=Student::where(function($q) use($input){
                $q->where("email_address", $input['emailAddress'])
//                    ->where("password", $password)
                    ->where("is_active", 1);
            })->first();
            $i = !empty(Session::has('i')) ? Session::get("i") : 1;
//            dd($sql);
            if (Hash::check($request->input('Password'), $sql->password))
            {
                Session::forget('i');
                $userData = array("is_login" => 1, "StudentID" => $sql->students_id);
                Session::put($userData);
                return Redirect("student/dashboard")->with('success', "You are login success");
            }else{
                Session::put('i', $i + 1);
                return Redirect::back()->with('warning', "Login Fail, pls check password");
            }
        }
    }
    //register
    public function register(){
        $properties=properties::find(1);
        if(!empty($slug)){
            $seo=AdminPages::where("slug",$slug)->first();
        }else{
            $seo=AdminPages::where("slug","/")->first();
            $base_url = url()->full();
            $menu = Module::getMenu(0, $base_url,0);
            $slider=AdminPages::getHomePage()->slide()->get();
            $sections = AdminPages::getHomePage()->sections()->get();
            $promotion=Promotion::where("is_active",1)
                ->where(function($q){
                    $date=date("Y-m-d");
                    $q->where("start_date","<",$date);
                    $q->where("expiration_date",">=",$date);
                })->get();
        }
        return view('register',compact('seo','properties','menu','slider','sections','promotion'));
    }
    public function store(Request $request){
        $input=$request->all();
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:students,email_address',
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:6',
            'g-recaptcha-response' => 'required|captcha',
            'password' => 'min:3|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required|min:3'
        ]);
        if ($validator->fails()) {
            Session::flash('errors', $validator->messages());
            return redirect()->back()->withInput();
        }else{
            $rs=Student::all();
            $qrCode=$this->generateBarcodeNumber();
            Student::create([
                'languages_id'=>1,
                'fname'=>$input['first_name'],
                'lname'=>$input['last_name'],
                'prefix'=>$input['Prefix'],
                'email_address'=>$input['email'],
                'phone'=>$input['phone'],
                'address'=>$input['Address'],
                'password'=> Hash::make($input['password']),
                'confirm_password'=> Hash::make($input['confirm_password']),
                'is_active'=>0,
                'order_by'=>$rs->count()+1,
                'generator_code'=>$qrCode
            ]);
            //send email verified
            //
            return redirect()->back()->withInput();
        }
    }
    //gernate code number
    function generateBarcodeNumber() {
        $number = mt_rand(1000000000, 9999999999); // better than rand()
        if ($this->barcodeNumberExists($number)) {
            return generateBarcodeNumber();
        }
        return $number;
    }
    function barcodeNumberExists($number) {
        return Student::where("generator_code",$number)->exists();
    }
    //dashboard
    public function dashboard(){
        $properties=properties::find(1);
        if(!empty($slug)){
            $seo=AdminPages::where("slug",$slug)->first();
        }else{
            $seo=AdminPages::where("slug","/")->first();
            $base_url = url()->full();
            $menu = Module::getMenu(0, $base_url,0);
            $slider=AdminPages::getHomePage()->slide()->get();
            $sections = AdminPages::getHomePage()->sections()->get();
            $promotion=Promotion::where("is_active",1)
                ->where(function($q){
                    $date=date("Y-m-d");
                    $q->where("start_date","<",$date);
                    $q->where("expiration_date",">=",$date);
                })->get();
            if (session()->has('StudentID')) {
                $StudentID = Session::get('StudentID');
                $Students = Student::find($StudentID);
                $mycourse=Subscriber::where("students_id",$StudentID)->get();
                Session::put('fullName', $Students->fname . ' ' . $Students->lname);
                $menuActive="/";
                return view('students.dashboard',compact('seo','properties','menu','slider','sections','promotion','Students','mycourse','menuActive'));
            }else{
                redirect("/");
            }
        }

    }
    public function course(){
        $properties=properties::find(1);
        if(!empty($slug)){
            $seo=AdminPages::where("slug",$slug)->first();
        }else{
            $seo=AdminPages::where("slug","/")->first();
            $base_url = url()->full();
            $menu = Module::getMenu(0, $base_url,0);
            $slider=AdminPages::getHomePage()->slide()->get();
            $sections = AdminPages::getHomePage()->sections()->get();
            $promotion=Promotion::where("is_active",1)
                ->where(function($q){
                    $date=date("Y-m-d");
                    $q->where("start_date","<",$date);
                    $q->where("expiration_date",">=",$date);
                })->get();
            if (session()->has('StudentID')) {
                $StudentID = Session::get('StudentID');
                $Students = Student::find($StudentID);
                $mycourse=Subscriber::where("students_id",$StudentID)->get();
                Session::put('fullName', $Students->fname . ' ' . $Students->lname);
                $menuActive="course";
                return view('students.course',compact('seo','properties','menu','slider','sections','promotion','Students','mycourse','menuActive'));
            }else{
                redirect("/");
            }

        }

    }
    public function messages(){
        $properties=properties::find(1);
        if(!empty($slug)){
            $seo=AdminPages::where("slug",$slug)->first();
        }
        else{
            $seo=AdminPages::where("slug","/")->first();
            $base_url = url()->full();
            $menu = Module::getMenu(0, $base_url,0);
            $slider=AdminPages::getHomePage()->slide()->get();
            $sections = AdminPages::getHomePage()->sections()->get();
            $promotion=Promotion::where("is_active",1)
                ->where(function($q){
                    $date=date("Y-m-d");
                    $q->where("start_date","<",$date);
                    $q->where("expiration_date",">=",$date);
                })->get();
            if (session()->has('StudentID')==true) {
                $StudentID = Session::get('StudentID');
                $Students = Student::find($StudentID);
                $mycourse=Subscriber::where("students_id",$StudentID)->get();
                Session::put('fullName', $Students->fname . ' ' . $Students->lname);
                $notification=Notification::where("is_active",1)->orderby("date","desc")->get();
                $menuActive="messages";
                return view('students.messages',compact('seo','properties','menu','slider','sections','promotion','Students','mycourse','menuActive','notification'));
            }else{
                return redirect('/student/login');
            }

        }
    }
    public function readmessages($id){
        $notification=Notification::where("notification_id",$id)
            ->where("is_active",1)
            ->orderby("date","desc")
            ->first();
        return view('students.readmessages',compact("notification"));
    }
    public function profiles(){
        $properties=properties::find(1);
        if(!empty($slug)){
            $seo=AdminPages::where("slug",$slug)->first();
        }
        else{
            $seo=AdminPages::where("slug","/")->first();
            $base_url = url()->full();
            $menu = Module::getMenu(0, $base_url,0);
            $slider=AdminPages::getHomePage()->slide()->get();
            $sections = AdminPages::getHomePage()->sections()->get();
            $promotion=Promotion::where("is_active",1)
                ->where(function($q){
                    $date=date("Y-m-d");
                    $q->where("start_date","<",$date);
                    $q->where("expiration_date",">=",$date);
                })->get();
            if (session()->has('StudentID')==true) {
                $StudentID = Session::get('StudentID');
                $Students = Student::find($StudentID);
                Session::put('fullName', $Students->fname . ' ' . $Students->lname);
                $menuActive="profiles";
                return view('students.profiles',compact('seo','properties','menu','slider','sections','promotion','Students','menuActive'));
            }else{
                return redirect('/student/login');
            }

        }
    }

    public function update(Request $request, $id){
        $input=$request->all();
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'fname' => 'required|string|max:50',
            'lname' => 'required|string|max:50',
            'phoneno' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:6'
        ]);
        if ($validator->fails()) {
            Session::flash('errors', $validator->messages());
            return redirect()->back()->withInput();
        }else{
            $rs=Student::find($id);
            $data=[];
            if ($request->hasFile('flProfile') == true) {
                //delete old image
//                if (!empty($rs->photo)) {
//                    $image_path = $rs->photo;
//                    if (File::exists($image_path)) {
//                        File::delete($image_path);
//                    }
//                }
                //update new image
                $imagePath = $request->file('flProfile');
                $imageName = time() . '.' . $imagePath->getClientOriginalName();
                $imagePath->move(public_path('uploads/images/profile/'), $imageName);
                array_push($data, array(
                    'fname' => $input['fname'],
                    'lname' => $input['lname'],
                    'email_address' => $input['email'],
                    'phone' => $input['phoneno'],
                    'photo' => 'uploads/images/profile/' . $imageName,
                    'address' => $input['txt_address'],
                    'about' => $input['txt_about'],
                ));
            }
            else{
                array_push($data, array(
                    'fname' => $input['fname'],
                    'lname' => $input['lname'],
                    'email_address' => $input['email'],
                    'phone' => $input['phoneno'],
                    'address' => $input['txt_address'],
                    'about' => $input['txt_about'],
                ));
            }
            Student::where("students_id",$id)->update($data[0]);
            return redirect()->back()->withInput();
        }
    }
}
