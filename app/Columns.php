<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Columns extends Model
{
    //
    protected $primaryKey="col_id";
    protected $table="columns";
    protected $fillable=['section_id','col_name','title_col','container','thumbnail','labels_link','link','labels','class','custom_field',
        'custom_field1','custom_field2','is_order','is_active'];

    public function sections(){
        return $this->hasOne("App\Sections","section_id","section_id");
    }

    public function singleProduct(){
        return $this->hasOne("App\Product","product_id","labels")->first();
    }
    public function getProduct($slug){
        $slugArray=explode(',',$slug);
        $rs=Product::whereIn("slug",$slugArray)->orderBy("order_by",'asc')->get();
        return $rs;
    }
    public function getPages($slug){
        $slugArray=explode(',',$slug);
        $rs=AdminPages::whereIn("slug",$slugArray)->orderBy("order_by",'asc')->get();
        return $rs;
    }
    public function getCourseStudy($slug){
        $slugArray=explode(',',$slug);
        $rs=Product::whereIn("slug",$slugArray)->get();
        return $rs;
    }
}
