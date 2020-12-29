<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class link_target extends Model
{
    //
    protected $primaryKey='target_id';
    protected $table="link_target";
    protected $fillable=['target','description'];
}
