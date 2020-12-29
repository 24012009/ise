<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    //
    protected $primaryKey="feature_id";
    protected $table="feature";
    protected $fillable=["product_id","feature_title","is_order","images","details","is_active"];

    public function getmatching($feature_id,$id){
        $rs=Matching::where("feature_id",$feature_id)->where("version_id",$id)->first();
        return $rs;
    }
    public function joinfv($feature_id,$id){
        return $this->hasOne("App\Matching","feature_id","feature_id")->where("version_id",$id)->first();
    }
}
