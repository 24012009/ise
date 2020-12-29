<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    //
    protected $table = 'promotions';
    protected $primaryKey="id";
    protected $slug="slug";
    protected $fillable = ['promotion_type',
        'promotion_name', 'promotion_title', 'condition','start_date','expiration_date',
        'min_discount', 'max_discount','sliver','gold','platinum','slug', 'code', 'banner', 'thumbnail','custom_field',
        'custom_field1','custom_field2', 'created_by','updated_by', 'order_by', 'is_active'
    ];
    public function product(){
        return $this->hasOne("App\Product","product_id","slug")->first();
    }
    public function getslug($slug){
        $arrslug=explode(",",$slug);
        $rs=Product::whereIn("slug",$arrslug)->get();
        return $rs;
    }
}
