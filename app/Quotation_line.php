<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation_line extends Model
{
    //
    protected $table="quotation_line";
    protected $primaryKey="quotation_line_id";
    protected $fillable=['quotation_id','product_name','product_annual','product_user_no','qty','unit_price','grand_total'];
}
