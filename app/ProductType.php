<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    //
    protected $primaryKey="type_id";
    protected $table="product_type";
    protected $fillable=['type_name','is_active'];
}
