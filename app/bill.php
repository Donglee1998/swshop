<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    protected $table = "bill";

    public function bill_detail(){
        return $this->hasMany("App\bill_detail","id_product","id");
    }
}
