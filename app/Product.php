<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    //
    protected $primaryKey="product_id";
    protected $table="products";
    protected $fillable=["category_id","type_id","product_title","sub_title","annual","short_description","description",
        "images","logo","custom_field","custom_field1","slug","is_active","order_by"];

    public function category(){
        return $this->hasOne("App\Categories","category_id","category_id");
    }
    public function product_type(){
        return $this->hasOne("App\ProductType","type_id","type_id");
    }
    public function getProductType($tID){
        $arID = explode(',', $tID);
       $rs=ProductType::whereIn("type_id",$arID)->get();
       return $rs;
    }
    public function relatedLevel(){
        return $this->hasMany("App\ProductRelateLevel","product_id","product_id")->get();
    }
    public function getLevel($pID){
        $rs=ProductRelateLevel::join("products","products.product_id","=","product_relate_level.product_id")
            ->join("product_level","product_level.pro_level_id","=","product_relate_level.pro_level_id")
            ->where("product_relate_level.product_id",$pID)
            ->get();
        return $rs;
    }
    public function getPriceList()
    {
        return $this->hasMany("App\Pricelist","product_id","product_id")->get();
    }
    public function getByDefaultPriceList($tID,$pID,$level_id)
    {
        $arID = explode(',', $tID);
        $rs=Pricelist::where("product_id",$pID)
           ->where("pro_type_id",$arID[0])
           ->where("pro_level_id",$level_id)
           ->get();
        return $rs;
    }
    public function getAmount()
    {
        return $this->hasMany("App\Pricelist","product_id","product_id");
    }
    public static function getProduct($slug, $slug_)
    {
        return Product::where('slug', $slug)->orWhere('slug', $slug_)->first();
    }
    public function getPromotion(){
        $dateNow=date("Y-m-d");
        return $this->hasMany("App\Promotion","slug","product_id")
            ->where("expiration_date",">=",$dateNow)
            ->where("is_active",1)
            ->get();
    }
    public function enPromotion($tID,$pro_id,$levelID){
        $dateNow=date("Y-m-d");
        $rs=Promotion::where("custom_field",$tID)
            ->where("start_date","<=",$dateNow)
            ->where("expiration_date",">=",$dateNow)
            ->where("slug",$pro_id)
            ->where("is_active",1)
            ->get();

        return $rs;
    }
    public function compareFeature(){
        return $this->hasMany("App\product_relate_specs","product_id","product_id")->get();
    }

    public function version(){
        return $this->hasMany("App\Version","product_id","product_id")->orderBy("is_order","asc")->get();
    }

    public function features(){
        return $this->hasMany("App\Feature","product_id","product_id")->orderBy("is_order","asc")->get();
    }
    public function getbasicQBEN($pID,$types,$levelID){
        $rs=Pricelist::where("product_id",$pID)
           ->where("pro_type_id",$types)
           ->where("pro_level_id",$levelID)
           ->first();
        return $rs;
    }
}
