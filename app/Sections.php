<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sections extends Model
{
    //
    use SoftDeletes;
    protected $table="section";
    protected $primaryKey="section_id";
    protected $fillable=['page_id','section_template_id','section_title','description','style',
        'class_css','background_img','custom_field1','custom_field2','custom_field3','order_by','is_active'];

    public function pageHasone(){
        return $this->hasOne("App\AdminPages","page_id","page_id");
    }
    public function templateSection(){
        return $this->hasOne("App\Section_template","section_temp_id","section_template_id");
    }
    public function singlecolumn(){
        return $this->hasOne('App\Columns','section_id','section_id')->first();
    }
    public function columns(){
        return $this->hasMany('App\Columns','section_id','section_id');
    }
    public function getProductbySlug($slug)
    {
        $slug_ar = explode(',', $slug);
        return Product::whereIn('slug', $slug_ar)->get();
    }
    public function getFirstProductbySlug($slug){
        $slug_ar = explode(',', $slug);
        return Product::whereIn('slug', $slug_ar)->first();
    }
}
