<?php

namespace App\Http\Controllers\administrator;

use App\Categories;
use App\Http\Controllers\Controller;
use App\Pricelist;
use App\Product;
use App\ProductLevel;
use App\ProductRelateLevel;
use App\ProductType;
use Illuminate\Http\Request;

class PricelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $pro_id)
    {
        //
        $input = $request->all();
        $levelList = ProductLevel::where("is_status", 1)->pluck("product_level", "pro_level_id");
        $typeList = ProductType::where("is_active", 1)->pluck("type_name", "type_id");
        $pro = Product::find($pro_id);
        $priceList = Pricelist::where("product_id", $pro_id)
            ->where("deleted_at", null)
            ->where(function ($q) use ($input) {
                if (!empty($input['userNo'])) {
                    $q->where("user", $input['userNo']);
                }
                if (!empty($input['sl_level'])) {
                    $q->where("pro_level_id", $input['sl_level']);
                }
                if (!empty($input['sl_type'])) {
                    $q->where("pro_type_id", $input['sl_type']);
                }
            })
            ->paginate(30);
        $AppSetting = array(
            "title" => "Price List {$pro->product_title}",
            "slug" => "product-list"
        );
//        dd($levelList);
        return view("administrator.pricelist.index", compact("pro_id", "priceList", "levelList", "typeList"), $AppSetting)->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($pro_id)
    {
        //
        $pro = Product::find($pro_id);
        $AppSetting = array(
            "title" => "Price {$pro->product_title}",
            "slug" => "product-list"
        );
        $prolevel = $pro->relatedLevel();
        if ($prolevel->count() > 0) {
            $productList = ProductLevel::where("is_status", 1)->pluck("product_level", "pro_level_id");
        } else {
            $productList = ['None'];
        }
        $proType = ProductType::whereIn("type_id", explode(",", $pro->type_id))->get();
        if ($proType->count() > 0) {
            $typeList = ProductType::whereIn("type_id", explode(",", $pro->type_id))->pluck("type_name", "type_id");
        } else {
            $typeList = ['None'];
        }
        return view("administrator.pricelist.create", compact("pro_id", "productList", "typeList"), $AppSetting);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
        $rs = New Pricelist();
        $rs->product_id = $id;
        $rs->pro_level_id = $request->sl_productLevel;
        $rs->pro_type_id = $request->sl_producttype;
        $rs->base_amount = $request->base_amount;
        $rs->cpn_amount = $request->cpn_amount;
        $rs->user = $request->user_no;
        $rs->custom_field = $request->custom_field;
        $rs->custom_field1 = $request->custom_field1;
        $rs->custom_field2 = $request->custom_field2;
        $rs->save();
        return redirect("/administrator/pricelist/{$id}/create")->with('success', 'Price has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($pro_id, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($pro_id, $id)
    {
        //
        $pro = Product::find($pro_id);
        $AppSetting = array(
            "title" => "Price {$pro->product_title}",
            "slug" => "product-list"
        );
        $price = Pricelist::find($id);
        $prolevel = $pro->relatedLevel();
        if ($prolevel->count() > 0) {
            $productList = ProductLevel::where("is_status", 1)->pluck("product_level", "pro_level_id");
        } else {
            $productList = ['None'];
        }
        $proType = ProductType::whereIn("type_id", explode(",", $pro->type_id))->get();
        if ($proType->count() > 0) {
            $typeList = ProductType::whereIn("type_id", explode(",", $pro->type_id))->pluck("type_name", "type_id");
        } else {
            $typeList = ['None'];
        }
        return view("administrator.pricelist.edit", compact("pro_id", "productList", "typeList", "price"), $AppSetting);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pro_id, $id)
    {
        //
        $rs = Pricelist::find($id);
        $rs->product_id = $pro_id;
        $rs->pro_level_id = $request->sl_productLevel;
        $rs->pro_type_id = $request->sl_producttype;
        $rs->base_amount = $request->base_amount;
        $rs->cpn_amount = $request->cpn_amount;
        $rs->user = $request->user_no;
        $rs->custom_field = $request->custom_field;
        $rs->custom_field1 = $request->custom_field1;
        $rs->custom_field2 = $request->custom_field2;
        $rs->save();
        return redirect("/administrator/pricelist/{$pro_id}")->with('success', 'Price has been update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $rs = Pricelist::find($id);
        $proID = $rs->product_id;
        $rs->delete();
        return redirect("/administrator/pricelist/{$proID}")->with('success', 'Price has been delete.');
    }
}
