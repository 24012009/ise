<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = 'students';
    protected $primaryKey="students_id";
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $fillable = [
        'students_id', 'languages_id', 'fname','lname', 'prefix', 'schools', 'dob','graduation','major', 'id_card', 'photo_card','current_classes',
        'headline', 'about', 'website','facebook','twitter', 'linkin', 'youtube','email_address', 'phone', 'address', 'photo','password','confirm_password', 'is_active', 'order_by','generator_code'
    ];
}
