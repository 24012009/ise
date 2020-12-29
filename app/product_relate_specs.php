<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_relate_specs extends Model
{
    //
    public $timestamps = false;
    protected $table="product_relate_specs";
    protected $primaryKey="id";
    protected $fillable=["compare_id","product_id","description"];

    public function products(){
        return $this->hasMany("App\Product","product_id","product_id");
    }

    public function singleCompare(){
        return $this->hasOne("App\Comparation","compare_id","compare_id")->first();
    }
}
