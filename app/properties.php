<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class properties extends Model
{
    //
    protected $primaryKey="id";
    protected $table="properties";
    protected $fillable=['site_name','site_url','address','phone','email',
        'email_send','fb_url','instagram_url','twitter_url','youtube_url','agoda_url','booking_url','trip_url','exp_url',
        'meta_description','meta_keyword','logo','none_img','custom_field','is_active'];

}
