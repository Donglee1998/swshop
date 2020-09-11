<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_product extends Model
{
    protected $table = "type_product";

    public function product(){
        return $this->hasMany("App\\type_product","id_product","id");
    }
}
