<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matching extends Model
{
    //
    protected $primaryKey="feature_version_id";
    protected $table="feature_relate_version";
    protected $fillable=['feature_id','version_id','marge','remark'];

}
