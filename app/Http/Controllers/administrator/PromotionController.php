<?php

namespace App\Http\Controllers\administrator;

use App\AdminPages;
use App\Product;
use App\ProductLevel;
use App\ProductRelateLevel;
use App\ProductType;
use App\Promotion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $Promotion = Promotion::where("expiration_date",">=",date("Y-m-d"))->orderBy('order_by', 'DESC')->paginate(10);
        $AppSetting = array(
            "title" => "Promotion List",
            "slug" => "promotion-list"
        );

        return view("administrator.promotion.index", compact("Promotion"), $AppSetting)->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $AppSetting = array(
            "title" => "Promotion New",
            "slug" => "promotion-create"
        );
        $products=Product::where("is_active",1)->pluck("product_title","product_id");
        $levels=ProductLevel::get();
        $types=ProductType::where("is_active",1)->pluck("type_name","type_id");
        return view("administrator.promotion.create",compact("products","levels","types"), $AppSetting);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $random = Str::random(16);
        $users=Auth::user();
        $rs=New Promotion();
        $rs->promotion_type=$request->promotion_type;
        $rs->promotion_name=$request->promotion_name;
        $rs->promotion_title=$request->promotion_title;
        $rs->condition=$request->condition;
        $rs->slug=$request->sl_product;
        $rs->start_date=date("Y-m-d",strtotime($request->start_date));
        $rs->expiration_date=date("Y-m-d",strtotime($request->expiration_date));
        $rs->min_discount=$request->min_dist;
        $rs->max_discount=$request->max_dist;
        $rs->sliver=$request->Sliver;
        $rs->gold=$request->Gold;
        $rs->platinum=$request->Platinum;
        $rs->created_by=$users->id;
        $rs->custom_field=$request->sl_type;
        $rs->custom_field1=$request->slug;
        $rs->order_by=$request->order_by;
        $rs->updated_by=$users->id;
        $rs->code=$random;
        $rs->is_active=$request->is_active;
        $rs->banner=$request->file_upload;
        $rs->thumbnail=$request->file_thumbnail;
        $rs->save();
        return redirect('/administrator/promotion')->with('success', 'Promotion created successfully');
    }
    public static function quickRandom($length = 5)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }
    public function tpromotion(Request $request){
        $proID=$request->proID;
        $pro=ProductRelateLevel::select("pro_level_id")->where("product_id",$proID)->get()->toArray();
        if(count($pro)>0){
            $data=true;
        }else{
            $data=false;
        }
        return response()->json(['is_status'=>$data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //
        $AppSetting = array(
            "title" => "Promotion Edit",
            "slug" => "promotion-edit"
        );
        $products=Product::where("is_active",1)->pluck("product_title","product_id");
        $types=ProductType::where("is_active",1)->pluck("type_name","type_id");
        $levels=ProductLevel::get();
        $promotion=Promotion::find($id);
        $pages=AdminPages::where("temp_id",9)->pluck("page_name","page_id");
        return view("administrator.promotion.edit",compact("id","types","products","levels","promotion",'pages'), $AppSetting);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //
        $random = Str::random(16);
        $users=Auth::user();
        $rs=Promotion::find($id);
        $rs->promotion_type=$request->promotion_type;
        $rs->promotion_name=$request->promotion_name;
        $rs->promotion_title=$request->promotion_title;
        $rs->condition=$request->condition;
        $rs->slug=$request->sl_product;
        $rs->start_date=date("Y-m-d",strtotime($request->start_date));
        $rs->expiration_date=date("Y-m-d",strtotime($request->expiration_date));
        $rs->min_discount=$request->min_dist;
        $rs->max_discount=$request->max_dist;
        $rs->sliver=$request->Sliver;
        $rs->gold=$request->Gold;
        $rs->platinum=$request->Platinum;
        $rs->custom_field=$request->sl_type;
        $rs->custom_field1=$request->slug;
        $rs->order_by=$request->order_by;
        $rs->updated_by=$users->id;
        $rs->is_active=$request->is_active;
        $rs->banner=$request->file_upload;
        $rs->thumbnail=$request->file_thumbnail;
        $rs->save();
        return redirect('/administrator/promotion')->with('success', 'Promotion created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
