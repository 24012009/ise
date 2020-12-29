<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slidepages extends Model
{
    //
    protected $primaryKey="slide_id";
    protected $table="page_slide";
    protected $fillable=['page_id','slider_name','thumbnail','images','slide_title','details','position','custom_field','is_active','is_order'];

    public function _pages(){
        return $this->hasOne("App\AdminPages","page_id","page_id");
    }
}
