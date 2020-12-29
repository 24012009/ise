<?php

namespace App\Http\Controllers\administrator;

use App\Product;
use App\Version;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VersionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(Request $request, $Pid){
        $product=Product::find($Pid);
        $version = Version::where("product_id",$Pid)->orderBy("is_order","asc")->paginate(5);
        $AppSetting = array(
            "title" => "Version List: {$product->product_title}",
            "slug" => "product-list"
        );
        return view("administrator.version.index", compact("version","product"), $AppSetting)->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function create($Pid){
        $product=Product::find($Pid);
        $AppSetting = array(
            "title" => "Version List: {$product->product_title}",
            "slug" => "product-list"
        );
        $productList =Product::where("is_active",1)->pluck("product_title","product_id");
        return view("administrator.version.create", compact("Pid","productList","product"), $AppSetting);
    }

    public function store(Request $request, $Pid){
        $rs=New Version();
        $rs->product_id=$request->sl_product;
        $rs->versions=$request->version_name;
        $rs->is_active=$request->is_active;
        $rs->class_css=$request->class_css;
        $rs->custom_field=$request->custom_field;
        $rs->is_order=$request->is_order;
        $rs->save();
        return redirect("/administrator/products/version/{$Pid}")->with('success', 'Version created successfully');
    }

    public function edit($Pid, $id){
        $product=Product::find($Pid);
        $AppSetting = array(
            "title" => "Version List: {$product->product_title}",
            "slug" => "product-list"
        );
        $productList =Product::where("is_active",1)->pluck("product_title","product_id");
        $version=Version::find($id);
        return view("administrator.version.edit", compact('id',"Pid","productList","version","product"), $AppSetting);
    }
    public function update(Request $request,$Pid,$id){
        $rs=Version::find($id);
        $rs->product_id=$request->sl_product;
        $rs->versions=$request->version_name;
        $rs->custom_field=$request->custom_field;
        $rs->class_css=$request->class_css;
        $rs->is_active=$request->is_active;
        $rs->is_order=$request->is_order;
        $rs->save();
        return redirect("/administrator/products/version/{$Pid}")->with('success', 'Version update successfully');
    }
    public function destroy(Request $request, $pid,$id){
        $rs=Version::find($id);
        $rs->delete();
        return redirect("/administrator/products/version/{$pid}")->with('success', 'Version remove successfully');
    }
}
