<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comparation extends Model
{
    //
    protected $primaryKey="compare_id";
    protected $table="specs_compare";
    protected $fillable=['title_specs_compare','sub_specs_compare','specs_content','image_compare','custom_field','custom_field1','is_active','is_order'];

    public function specs(){
        return $this->hasMany("App\product_relate_specs","compare_id","compare_id")->get();
    }
}
