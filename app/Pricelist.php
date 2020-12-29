<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
class Pricelist extends Model
{
    //
    use SoftDeletes;
    public $timestamps = true;
    protected $primaryKey="id";
    protected $table="prices";
    protected $fillable=["product_id","pro_level_id","pro_type_id","base_amount","cpn_amount","user","custom_field","custom_field1","custom_field2"];

    public function levels(){
        return $this->hasOne("App\ProductLevel","pro_level_id","pro_level_id")->first();
    }
    public function types($plist_id){
        $rs=DB::table("prices")
            ->join("product_type","product_type.type_id","prices.pro_type_id")
            ->where("id",$plist_id)->first();
        return $rs;
    }

    public function protype(){
        return $this->hasOne("App\ProductType","type_id","pro_type_id")->first();
    }
}
