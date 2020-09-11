<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\type_product;

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
    }
}
