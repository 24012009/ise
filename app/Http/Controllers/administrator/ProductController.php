<?php

namespace App\Http\Controllers\administrator;

use App\Categories;
use App\Comparation;
use App\Http\Controllers\Controller;
use App\Product;
use App\product_relate_specs;
use App\ProductLevel;
use App\ProductRelateLevel;
use App\ProductType;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:product-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $product = Product::where(function($q) use($request){
            if(!empty($request->product_name)){
                $q->where("product_title","like","%{$request->product_name}%");
            }
            if(!empty($request->sl_category)){
                $q->where("category_id",$request->sl_category);
            }
        })->orderBy('order_by', 'DESC')->paginate(10);
        $AppSetting = array(
            "title" => "Product Management",
            "slug" => "product-list"
        );
        $category=Categories::where("is_active",1)->pluck("category_name","category_id");
        $product_type=ProductType::where("is_active",1)->get();
        $productLevel=ProductLevel::where("is_status",1)->get();
        return view("administrator.product.index", compact('category','product_type','productLevel',"product"), $AppSetting)->with('i', ($request->input('page', 1) - 1) * 5);
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
            "title" => "Product New",
            "slug" => "product-create"
        );
        $category=Categories::where("is_active",1)->pluck("category_name","category_id");
        $product_type=ProductType::where("is_active",1)->get();
        $productLevel=ProductLevel::where("is_status",1)->get();
        return view("administrator.product.create",compact('category','product_type','productLevel'), $AppSetting);
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
        $product=New Product();

        $join=!empty($request->product_type)?implode(",",$request->product_type):"";
        $product->category_id=$request->sl_category;
        $product->type_id=$join;
        $product->product_title=$request->product_name;
        $product->sub_title=$request->sub_title;
        $product->annual=$request->annual;
        $product->description=$request->description;
        $product->is_active=$request->is_active;
        $product->order_by=$request->order_by;
        $product->slug=$request->slug;
        $product->custom_field=$request->custom_field;
        $product->custom_field1=$request->custom_field2;
        $product->custom_field2=$request->custom_field3;
        $product->custom_field3=$request->custom_field4;
        $product->images=$request->thumbcol1;
        $product->logo=$request->thumbcol2;
        $product->save();
        $id=$product->product_id;
        if(!empty($request->product_level)){
            $data=array();
            foreach($request->product_level as $key=>$pro_level_id){
                $data[]=array("pro_level_id"=>$pro_level_id,"product_id"=>$id);
            }
            ProductRelateLevel::insert($data);
        }
        return redirect('/administrator/products')->with('success', 'products Create successfully');
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
        $AppSetting = array(
            "title" => "Product Edit",
            "slug" => "product-edit"
        );
        $category=Categories::where("is_active",1)->pluck("category_name","category_id");
        $product_type=ProductType::where("is_active",1)->get();
        $productLevel=ProductLevel::where("is_status",1)->get();
        $products=Product::find($id);

        return view("administrator.product.edit",compact('id','category','products','product_type','productLevel'), $AppSetting);
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
        $join=!empty($request->product_type)?implode(",",$request->product_type):"";
        $products=Product::find($id);

        if(!empty($request->product_level)){
            $data=array();
            foreach($request->product_level as $key=>$pro_level_id){
                $data[]=array("pro_level_id"=>$pro_level_id,"product_id"=>$id);
            }
            ProductRelateLevel::where("product_id",$id)->delete();

            ProductRelateLevel::insert($data);
        }

        $products->category_id=$request->sl_category;
        $products->type_id=$join;
        $products->product_title=$request->product_name;
        $products->sub_title=$request->sub_title;
        $products->annual=$request->annual;
        $products->is_active=$request->is_active;
        $products->order_by=$request->order_by;
        $products->slug=$request->slug;
        $products->description=$request->description;
        $products->custom_field=$request->custom_field;
        $products->custom_field1=$request->custom_field2;
        $products->custom_field2=$request->custom_field3;
        $products->custom_field3=$request->custom_field4;
        $products->images=$request->thumbcol1;
        $products->logo=$request->thumbcol2;
        $products->save();
//
        return redirect('/administrator/products')->with('success', 'products update successfully');
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

    public function comparation($id){
        $products =Product::find($id);
        $AppSetting = array(
            "title" => "Setup Compare Specs in ".$products->product_title,
            "slug" => "product-create"
        );
        $compare=Comparation::where("is_active",1)->get();
        $pro_specs=product_relate_specs::where("product_id",$id)->get();
        return view("administrator.product.setup",compact("id","products","compare","pro_specs"),$AppSetting);
    }

    public function setup(Request $request, $id){
        $rs=product_relate_specs::where("product_id",$id);
        $rs->delete();
        $input=$request->all();
        $data=array();
        foreach($input['description'] as $i=>$val){
            if(!empty($input['specs_compare'][$i])) {
                $data[] = array(
                    "product_id" => $id,
                    "compare_id" => $request->specs_compare[$i],
					"is_order"=>$request->order[$i],
                    "description" => $request->description[$i]);
            }
        }
        product_relate_specs::insert($data);
        return redirect('/administrator/products')->with('success', 'Comparison update successfully');
    }
}
