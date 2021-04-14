<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_images extends Model
{
    protected $table = 'product_images';

    public function product(){
        return $this->belongsTo("App\product","product_id","id");
    }
}
