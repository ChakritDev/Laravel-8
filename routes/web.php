<?php

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

Route::get('/', function () {
    return view('welcome');
});

// http://localhost/user/5
Route::get('user/{id?}', function ($id="") {
    return 'user:'.$id;
});

Route::get('category/{name}',function($name){
    return $name;
})->where('name','[A-Za-z]+');

Route::get('group/{id}',function($id){
    return $id;
})->where('id','[0-9]+');

Route::get('product/{id}/{name}',function($id,$name){
    return 'Product ID :'.$id.'<br>Product Name :'.$name;
})->where(['id'=>'[0-9]+','name'=>'[a-z]+']);

// ย่อลิ้งค์ 
Route::get('guest/showroom/data/{name?}',function($name){
    return 'Hello '.$name;
})->name('profile');


