<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu_block extends Model
{
    //
    protected $table = 'menu_block';
    protected $primaryKey="block_id";
    protected $fillable=['block'];
}
