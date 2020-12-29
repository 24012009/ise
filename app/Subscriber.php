<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    //
    protected $table = 'subscription';
    protected $primaryKey="subscription_id";
    protected $fillable = ['subscription_id', 'product_id', 'students_id','price', 'promotion_code', 'is_approval', 'is_active'];

    public function getproduct(){
        return $this->hasOne("App\Product","product_id","product_id")->first();
    }
}
