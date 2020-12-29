<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductLevel extends Model
{
    //
    protected $primaryKey="pro_level_id";
    protected $table="product_level";
    protected $fillable=['product_level','is_status'];
}
