<?php

use App\product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => '/'],function (){

    Route::get('trangchu','PageController@getIndex')->name('trangchu');

    Route::get('add-to-cart/{id}','PageController@getAddtoCart')->name("themgiohang");

    Route::get('del-cart/{id}','PageController@getDelItemCart')->name("xoagiohang");

    Route::get('dat-hang','PageController@getCart')->name('dathang');

    Route::get('thanhtoan','PageController@getCheckOut')->name('thanhtoan');

    Route::post('thanhtoan','PageController@postCheckOut')->name('thanhtoan');

    Route::get('search','PageController@getSearch')->name('timkiem');

    Route::post('search','PageController@getSearch')->name('timkiem');

    Route::get('product-detail/{id}',['as'=>'chitietsanpham','uses'=>'PageController@getProductDetail']);

    Route::get('contact','PageController@getContact')->name('contact');

    Route::get('product/{type}',['as'=>'loaisanpham','uses'=>'PageController@getType']);

    Route::get('products/{type}',['as'=>'Products','uses'=>'PageController@getShirt']);

    Route::get('blog','PageController@getBlog')->name('blog');

});


Route::group(['prefix' => 'admin'],function (){

    Route::get('/','Admincontroller@getAdmin')->name('AdminHome')->middleware('CheckLogin');

    Route::get('login','Admincontroller@getLogin')->name('Login')->middleware('CheckLogout');

    Route::post('login','Admincontroller@postLogin')->name('Login');

    Route::get('logout','Admincontroller@getLogout')->name('Logout');

    Route::get('add_images','Admincontroller@getAddimage')->name('AddImage');

    Route::post('add_images','Admincontroller@postAddimage')->name('AddImage');

    Route::group(['prefix' => 'product'],function (){

        Route::get('/','Admincontroller@products')->name('Product');

        Route::get('adds','Admincontroller@getAdd')->name('Add');

        Route::post('adds','Admincontroller@postAdd')->name('Add');

        Route::get('edits/{id}','Admincontroller@getEdit')->name('Edit');

        Route::post('edits/{id}','Admincontroller@postEdit')->name('Edit');

        Route::get('deletes/{id}','Admincontroller@getDelete')->name('Delete');
    });

    Route::group(['prefix'=>'invoice'], function (){

        Route::get('uncensored_invoice','Admincontroller@getUncensoredInvoice')->name('Uncensored');

        Route::get('censored_invoice','Admincontroller@getCensoredInvoice')->name('Censored');

        Route::get('detail_invoice/{id}','Admincontroller@getDetailInvoice')->name('Detail');

        Route::get('approval/{id}','Admincontroller@getApprovalInvoice')->name('Approval');

        Route::get('delete_invoice/{id}','Admincontroller@getDeleteInvoice')->name('DeleteInvoice');


    });

});


Route::get('database',function (){
    Schema::create('customer',function ($tb){
        $tb->increments('id');
        $tb->string('name',100);
        $tb->string('gender',10);
        $tb->string('email',100);
        $tb->string('address',50);
        $tb->string('phone_number',20);
        $tb->string('note',200);
    });

    Schema::create('type_product',function ($tb){
        $tb->increments('id');
        $tb->string('name',100);
        $tb->text('description');
        $tb->string('image',255);
    });

    Schema::create('product',function ($tb){
        $tb->increments('id');
        $tb->string('name',100);
        $tb->integer('id_type')->unsigned();
        $tb->text('description');
        $tb->float('unit_price');
        $tb->float('promotion_price');
        $tb->string('image',255);
        $tb->string('unit',255);
        $tb->integer('new');
        $tb->foreign('id_type')->references('id')->on('type_product');
    });

    Schema::create('bill',function ($tb){
        $tb->increments('id');
        $tb->integer('id_customer')->unsigned();
        $tb->date('date_order');
        $tb->float('total');
        $tb->string('payment',200);
        $tb->string('note',200);
        $tb->foreign('id_customer')->references('id')->on('customer');
    });

    Schema::create('bill_detail',function ($tb){
        $tb->increments('id');
        $tb->integer('id_bill')->unsigned();
        $tb->integer('id_product')->unsigned();
        $tb->integer('quantity');
        $tb->double('unit_price');
        $tb->foreign('id_bill')->references('id')->on('bill');
        $tb->foreign('id_product')->references('id')->on('product');
    });
    Schema::create('news',function ($tb){
        $tb->increments('id');
        $tb->string('title',100);
        $tb->text('content');
        $tb->string('image',100);
    });


    Schema::create('slide',function ($tb){
        $tb->increments('id');
        $tb->string('link',100);
        $tb->string('image',100);
    });
    Schema::create('users',function ($tb){
        $tb->increments('id');
        $tb->string('full_name');
        $tb->string('email');
        $tb->string('password');
        $tb->string('phone',20);
        $tb->string('address');
        $tb->string('remember_token');
    });
});
Route::get('insert',function (){
    DB::table('type_product')->insert([['name'=>'Áo Thun','description'=>'Ao','image'=>'type_ao_thun.jpg'],
        ['name'=>'Áo Sơmi','description'=>'Ao','image'=>'type_ao_somi.jpg'],
        ['name'=>'Áo Polo','description'=>'Ao','image'=>'type_ao_polo.jpg'],
        ['name'=>'Áo Nỉ','description'=>'Ao','image'=>'type_ao_ni.jpg'],
        ['name'=>'Áo Khoác','description'=>'Ao','image'=>'type_ao_khoac.jpg'],
        ['name'=>'Quần Jean','description'=>'Quan','image'=>'type_quan_jean.jpg'],
        ['name'=>'Áo Short','description'=>'Quan','image'=>'type_quan_short.jpg'],
        ['name'=>'Áo Kaki','description'=>'Quan','image'=>'type_quan_kaki.jpg'],
        ['name'=>'Áo Âu','description'=>'Quan','image'=>'type_quan_au.jpg'],
        ['name'=>'Áo jogger','description'=>'Quan','image'=>'type_quan_jogger.jpg'],
        ['name'=>'Giày','description'=>'Giay&Dep','image'=>'type_giay.jpg'],
        ['name'=>'Dép','description'=>'Giay&Dep','image'=>'type_dep.jpg'],
        ['name'=>'Nón','description'=>'Phu_Kien','image'=>'type_non.jpg'],
        ['name'=>'Dép','description'=>'Phu_Kien','image'=>'type_balo.jpg']
        ]);
    DB::table('product')->insert([['name'=>'LONG SLEEVED T-SHIRT ZR','id_type'=>'1','description'=>'Áo LONG SLEEVED T-SHIRT ZR rất đẹp','unit_price'=>'210000','promotion_price'=>'200000','image'=>'ao1.jpg','unit'=>'zara','new'=>'1'],
        ['name'=>'T-SHIRT HAPPY BUTTON','id_type'=>'1','description'=>'Áo T-SHIRT HAPPY BUTTON rất đẹp','unit_price'=>'229000','promotion_price'=>'0','image'=>'ao2.jpg','unit'=>'zara','new'=>'1'],
        ['name'=>'T-SHIRT UNI','id_type'=>'1','description'=>'Áo T-SHIRT UNI rất đẹp','unit_price'=>'220000','promotion_price'=>'0','image'=>'ao3.jpg','unit'=>'Swshop','new'=>'1'],
        ['name'=>'SHIRT HAPPY BUTTON','id_type'=>'2','description'=>'Áo SHIRT HAPPY BUTTON rất đẹp','unit_price'=>'300000','promotion_price'=>'250000','image'=>'ao4.jpg','unit'=>'Swshop','new'=>'0'],
        ['name'=>'SHIRT FLANNEL SUPPER BRO','id_type'=> '2','description'=>'Áo SHIRT FLANNEL SUPPER BRO rất đẹp','unit_price'=>'350000','promotion_price'=>'0','image'=>'ao5.jpg','unit'=>'zara','new'=>'1'],
        ['name'=>'POLO LC','id_type'=>'3','description'=>'Áo POLO LC rất đẹp','unit_price'=>'320000','promotion_price'=>'0','image'=>'ao6.jpg','unit'=>'swshop','new'=>'0'],
        ['name'=>'POLO ZR','id_type'=>'3','description'=>'Áo POLO ZR rất đẹp','unit_price'=>'320000','promotion_price'=>'0','image'=>'ao7.jpg','unit'=>'zara','new'=>'1'],
        ['name'=>'SWEATERSHIRT M.L.B','id_type'=>'4','description'=>'Áo SWEATERSHIRT M.L.B rất đẹp','unit_price'=>'280000','promotion_price'=>'140000','image'=>'ao8.jpg','unit'=>'MLB','new'=>'0'],
        ['name'=>'SWEATER TOP10 MICKEY','id_type'=>'4','description'=>'Áo SWEATER TOP10 MICKEY rất đẹp','unit_price'=>'320000','promotion_price'=>'160000','image'=>'ao9.jpg','unit'=>'swshop','new'=>'0'],
        ['name'=>'JACKET BOMBER ZR','id_type'=>'5','description'=>'Áo JACKET BOMBER ZR rất đẹp','unit_price'=>'420000','promotion_price'=>'0','image'=>'ao10.jpg','unit'=>'zara','new'=>'1'],
        ['name'=>'JACKET NK','id_type'=>'5','description'=>'Áo JACKET NK rất đẹp','unit_price'=>'390000','promotion_price'=>'0','image'=>'ao11.jpg','unit'=>'nike','new'=>'1']]);
});
