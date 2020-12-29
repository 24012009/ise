<?php

namespace App\Http\Controllers\administrator;

use App\Feature;
use App\Http\Controllers\Controller;
use App\Matching;
use App\Product;
use App\Version;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $Pid)
    {
        //
        $product = Product::find($Pid);
        $feature = Feature::where("product_id", $Pid)->where(function($q) use($request){
            if(!empty($request->compare_name)){
                $q->where("feature_title","like","%{$request->compare_name}%");
            }
        })->orderBy("is_order","asc")->paginate(20);
        $AppSetting = array(
            "title" => "Feature List: {$product->product_title}",
            "slug" => "product-list"
        );

        return view("administrator.feature.index", compact("feature", "product"), $AppSetting)->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($Pid)
    {
        //
        $product = Product::find($Pid);
        $AppSetting = array(
            "title" => "Feature List: {$product->product_title}",
            "slug" => "product-list"
        );
        $productList = Product::where("is_active", 1)->pluck("product_title", "product_id");
        $is_order = Feature::where("product_id", $Pid)->get()->count() + 1;
        $versions = Version::where("product_id", $Pid)->orderBy("is_order","asc")->where("is_active", 1)->get();
        return view("administrator.feature.create", compact("Pid", "productList", "is_order", "versions"), $AppSetting);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $Pid)
    {
        //
        $rs = New Feature();
        $rs->product_id = $request->sl_product;
        $rs->feature_title = $request->feature_name;
        $rs->is_order = $request->is_order;
        $rs->images = $request->file_upload;
        $rs->details = $request->details;
        $rs->is_active = $request->is_active;
        $rs->save();
        return redirect("/administrator/products/feature/{$Pid}")->with('success', 'Feature created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Pid, $id)
    {
        //
        //
        $product = Product::find($Pid);
        $feature = Feature::find($id);
        $AppSetting = array(
            "title" => "Feature List: {$product->product_title}",
            "slug" => "product-list"
        );
        $productList = Product::where("is_active", 1)->pluck("product_title", "product_id");
        $versions = Version::where("product_id", $Pid)->orderBy("is_order","asc")->where("is_active", 1)->get();

        $mathching = Matching::where("feature_id", $id)->get();
        return view("administrator.feature.edit", compact("id", "Pid", "productList", "feature", "versions", "mathching"), $AppSetting);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Pid, $id)
    {
        //

        $rs = Feature::find($id);
        $input=$request->all();
        $rs->product_id = $input['sl_product'];
        $rs->feature_title = $input['feature_name'];
        $rs->is_order = $input['is_order'];
        $rs->images = $input['file_upload'];
        $rs->details = $input['details'];
        $rs->is_active = $input['is_active'];
        $rs->save();
        return redirect("/administrator/products/feature/{$Pid}")->with('success', 'Feature update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Pid, $id)
    {
        //
        $rs = Feature::find($id);
        $rs->delete();
        return redirect("/administrator/products/feature/{$Pid}")->with('success', 'Feature deleted successfully');
    }
}
