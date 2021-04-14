<?php
    function price($unit,$promotion){
        if ($promotion==0){
            return $unit;
        }else
            return $promotion;
    }


    function tong($subtotal){
        $ship = 40;
        return number_format((float)$subtotal+$ship,0);
    }


