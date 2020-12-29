<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminPages extends Model
{
    //
    protected $table = 'pages';
    protected $primaryKey="page_id";
    protected $fillable = [
        'temp_id', 'page_name', 'sub_title', 'slug', 'base_url', 'og_image', 'og_title', 'og_description', 'meta_keyword', 'custom_field', 'order_by', 'is_active'
    ];

    public function template()
    {
        return $this->hasOne('App\Template', 'temp_id', 'temp_id');
    }

    public function sections(){
        return $this->hasMany("App\Sections","page_id","page_id")->where('is_active', 1)->orderBy('order_by', 'ASC');
    }
    public function sub(){
        return $this->hasMany("App\SubPages","page_id","page_id")->get();
    }
    public function slide(){
        return $this->hasMany("App\Slidepages","page_id","page_id")->orderBy('is_order', 'ASC')->where('is_active', 1);
    }
    public function SubMenu()
    {
        return $this->hasMany("App\SubPages","page_id","page_id")->orderBy('order_by', 'ASC');
    }
    public static function getPage($slug)
    {
        return AdminPages::where('slug', $slug)
            ->where('is_active', 1)
            ->first();
    }
    public static function getSinglePage($slug)
    {
        return AdminPages::where('slug', $slug)
            ->where('is_active', 1)
            ->first();
    }
    public static function getHomePage()
    {
        return AdminPages::where('temp_id', 8)->where('is_active', 1)->first();
    }

}
