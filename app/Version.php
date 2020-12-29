<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    //
    protected $primaryKey="id";
    protected $table="version";
    protected $fillable=['product_id','versions','custom_field','class_css','is_order','is_active'];
}
