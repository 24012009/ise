<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubPages extends Model
{
    //
    protected $table="sub_pages";
    protected $primaryKey="sub_page_id";
    protected $fillable=["page_id","title_subpage","links","order_by","is_active"];

    public function pages(){
        return $this->hasOne("App\AdminPages","page_id","page_id")->first();
    }
}
