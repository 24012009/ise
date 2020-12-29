<?php

namespace App\Http\Controllers;

use App\AdminPages;
use App\Product;
use App\Promotion;
use App\properties;
use App\Module;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($slug = "")
    {
        $properties = properties::find(1);
        if (!empty($slug)) {
            $seo = AdminPages::where("slug", $slug)->first();
        } else {
            $seo = AdminPages::where("slug", "/")->first();
            $base_url = url()->full();
            $menu = Module::getMenu(0, $base_url, 0);
            $slider = AdminPages::getHomePage()->slide()->get();
            $sections = AdminPages::getHomePage()->sections()->get();
            $promotion = Promotion::where("is_active", 1)
                ->where(function ($q) {
                    $date = date("Y-m-d");
                    $q->where("start_date", "<", $date);
                    $q->where("expiration_date", ">=", $date);
                })->get();
        }
        return view('welcome', compact('seo', 'properties', 'menu', 'slider', 'sections', 'promotion'));
    }

    public function content($slug = null)
    {
        $properties = properties::find(1);
        if (!empty($slug)) {
            $seo = AdminPages::where("slug", $slug)->first();
            $base_url = url()->full();
            $menu = Module::getMenu(0, $base_url, 0);
            $slider = AdminPages::getPage($slug)->slide()->get();
            $promotion = Promotion::where("is_active", 1)
                ->where(function ($q) {
                    $date = date("Y-m-d");
                    $q->where("start_date", "<", $date);
                    $q->where("expiration_date", ">=", $date);
                })->get();
            $sections = AdminPages::getSinglePage($slug)->sections()->get();
        } else {
            //redirect to home page
            redirect("/");
        }
        return view('welcome', compact('seo', 'properties', 'menu', 'slider', 'sections', 'promotion'));
    }

    public function course($slug, $id)
    {
        $singleProduct = Product::find($id);
//        dd($singleProduct);
        return view('product-line', compact("singleProduct"));
    }
    public function search(Request $request){
        $properties = properties::find(1);
        $seo = AdminPages::where("slug", "/")->first();
        $base_url = url()->full();
        $menu = Module::getMenu(0, $base_url, 0);
        $slider = AdminPages::getHomePage()->slide()->get();
        $sections = AdminPages::getHomePage()->sections()->get();
        $promotion = Promotion::where("is_active", 1)
            ->where(function ($q) {
                $date = date("Y-m-d");
                $q->where("start_date", "<", $date);
                $q->where("expiration_date", ">=", $date);
            })->get();
        $input =$request->all();
        $listData=DB::table("vw_search")
            ->where(function($q) use($input){
                $q->where("title_col",'like',"%{$input['q']}%");
                $q->orWhere("title_col",'like',"%{$input['q']}%");
            })
            ->get();
//        dd($listData);
        return view("result",compact('seo', 'properties', 'menu', 'slider', 'sections', 'promotion',"listData"));
    }
}
