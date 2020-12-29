<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //
    protected $table = 'notification';
    protected $primaryKey="notification_id";
    protected $fillable = ['notification_id','subject', 'images', 'messages','date', 'is_active'];
}
