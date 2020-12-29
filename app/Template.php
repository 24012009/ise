<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    //
    protected $table = 'template';
    protected $fillable = [
        'temp_id', 'template_name', 'is_active','order_by'
    ];

    public function pages(){
        return $this->hasOne('App\AdminPages','temp_id','temp_id');
    }
}
