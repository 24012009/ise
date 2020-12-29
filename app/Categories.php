<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $primaryKey="category_id";
    protected $table="category";
    protected $fillable=['category_name','icon_category','is_active','order_by'];
}
