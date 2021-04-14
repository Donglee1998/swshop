<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;


    public function __construct($oldCart){
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }
    //Thêm vào 1 sản phẩm vào giỏ hàng
    public function add($item, $id){
        if ($item->promotion_price==0)
            $giohang = ['qty'=>0, 'price' => $item->unit_price, 'item' => $item];
        else
            $giohang = ['qty'=>0, 'price' => $item->promotion_price, 'item' => $item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $giohang = $this->items[$id];
            }
        }
        $giohang['qty']++;
        $giohang['price'] = ($item->promotion_price==0)? $item->unit_price * $giohang['qty']:$item->promotion_price * $giohang['qty'];
        $this->items[$id] = $giohang;
        $this->totalQty++;
        $this->totalPrice += ($item->promotion_price==0)? $item->unit_price : $item->promotion_price;
    }
    //xóa 1 sản phẩm khỏi giỏ hàng
    public function reduceByOne($id){
        $this->items[$id]['price'] =  $this->items[$id]['price'] /  $this->items[$id]['qty'];
        $this->items[$id]['qty']--;

        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['price'];

        if($this->items[$id]['qty']<=0){
            unset($this->items[$id]);
        }

    }
    //xóa nhiều sản phẩm khỏi giỏ hàng
    public function removeItem($id){
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }
}
