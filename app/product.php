<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "product";

    public function bill_detail(){
        return $this->hasMany("App\bill_detail","id_product","id");
    }

    public function type_product(){
        return $this->belongsTo("App\\type_product","id_type","id");
    }

    public function product_images(){
        return $this->hasMany("App\product_images","product_id","id");
    }
}
