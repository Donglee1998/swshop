<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill_detail extends Model
{
    protected $table = "bill_detail";

    public function product(){
        return $this->belongsTo("App\product","id_product","id");
    }

    public function bill(){
        return $this->belongsTo("App\bill","id_bill","id");
    }
}
