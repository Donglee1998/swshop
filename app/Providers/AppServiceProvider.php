<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\type_product;
use Cart;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('master',function ($view){
           $ao = type_product::where('description','ao')->get();
           $view->with('ao',$ao);
           $quan = type_product::where('description','quan')->get();
           $view->with('quan',$quan);
           $giaydep = type_product::where('description','Giay&Dep')->get();
           $view->with('giaydep',$giaydep);
           $phukien = type_product::where('description','Phu_Kien')->get();
           $view->with('phukien',$phukien);
        });
        view()->composer('cart',function ($view){
            $ao = type_product::where('description','ao')->get();
            $view->with('ao',$ao);
            $quan = type_product::where('description','quan')->get();
            $view->with('quan',$quan);
            $giaydep = type_product::where('description','Giay&Dep')->get();
            $view->with('giaydep',$giaydep);
            $phukien = type_product::where('description','Phu_Kien')->get();
            $view->with('phukien',$phukien);

        });
        view()->composer('product-detail',function ($view){
            $ao = type_product::where('description','ao')->get();
            $view->with('ao',$ao);
            $quan = type_product::where('description','quan')->get();
            $view->with('quan',$quan);
            $giaydep = type_product::where('description','Giay&Dep')->get();
            $view->with('giaydep',$giaydep);
            $phukien = type_product::where('description','Phu_Kien')->get();
            $view->with('phukien',$phukien);
        });
        /**
        view()->composer('master', function($view){
            if (Session('cart'))
            {
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart' => Session::get('cart'),
                    'product_cart' => $cart->items,
                    'totalprice' => $cart->totalPrice,
                    'totalqty' => $cart->totalQty]);
            }
        });
         * **/
        /**
        view()->composer('cart', function($view){
            if (Session('cart'))
            {
                $oldcart = Session::get('cart');
                $cart = new Cart($oldcart);
                $view->with(['cart' => Session::get('cart'),
                    'product_cart' => $cart->items,
                    'totalprice' => $cart->totalPrice,
                    'totalqty' => $cart->totalQty]);
            }
        });

        view()->composer('thanhtoan', function($view){
            if (Session('cart'))
            {
                $oldcart = Session::get('cart');
                $cart = new Cart($oldcart);
                $view->with(['cart' => Session::get('cart'),
                    'product_cart' => $cart->items,
                    'totalprice' => $cart->totalPrice,
                    'totalqty' => $cart->totalQty]);
            }
        });**/
    }
}
