<?php

namespace App\Http\Controllers\administrator;

use App\Feature;
use App\Http\Controllers\Controller;
use App\Matching;
use App\Version;
use App\Product;
use Illuminate\Http\Request;
class MatchingFeatureVersionController extends Controller
{
    //
    public function index($Pid){
        $product=Product::find($Pid);
        $AppSetting = array(
            "title" => "Matching List: {$product->product_title}",
            "slug" => "product-list"
        );
        $versionList=Version::where("product_id",$Pid)->where("is_active",1)->get();
        $featureList=Feature::where("product_id",$Pid)->where("is_active",1)->get();
        return view("administrator.featureversion.create",compact("versionList","featureList","Pid"),$AppSetting);
    }
    public function store(Request $request, $Pid){
        $v=Version::where("product_id",$Pid)->get();
        $input=$request->all();
        $data=array();
        foreach($v as $i=>$row){
            foreach($input['feature'] as $key=>$val) {
                $data[] = array(
                    "feature_id"=>$input['feature'][$key],
                    "version_id" =>$input["hideversion{$row->versions}"][$key],
                    "remark"=>$input["version{$row->versions}"][$key]
                );
            }
        }
        dd($data);
        $vListid=$v->pluck('id')->toArray();
        $rs=Matching::whereIn("version_id",$vListid)->get();
        $rs->each->delete();
        Matching::insert($data);
//        return redirect("/administrator/products/matching/{$Pid}")->with('success', 'Feature created successfully');
    }
}
