<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    //
    protected $table="quotation";
    protected $primaryKey="quotation_id";
    protected $fillable=["quotation_no","eff_date","prefix","fname","lname","email","phone","address","memo","remarks","quotation_status"];
}
