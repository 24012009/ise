<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductRelateLevel extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey="id";
    protected $table="product_relate_level";
    protected $fillable=['pro_level_id','product_id'];

    public function getLevel(){
        return $this->hasOne("App\ProductLevel","pro_level_id","pro_level_id")->first();
    }
}
