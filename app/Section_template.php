<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section_template extends Model
{
    //
    protected $table="section_template";
    protected $primaryKey="section_temp_id";
    protected $fillable=['template_name','thumbnail','css_class','col_no','frontent_partial','backend_view','backend_partial','is_active'];

}
