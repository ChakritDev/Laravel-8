<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

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


// การส่งเข้า Controller
// Route::get('/','App\http\Controllers\HomeController@home');
// Route::get('service','App\http\Controllers\HomeController@service');
// Route::get('contact','App\http\Controllers\HomeController@contact');

// แบบเก่า
// Route::get('/','HomeController@home');
// Route::get('service','HomeController@service');
// Route::get('contact','HomeController@contact');

// แบบใหม่  use App\Http\Controllers\HomeController;
Route::get('/',[HomeController::class,'home']);
Route::get('about',[HomeController::class,'about']);
Route::get('service',[HomeController::class,'service']);
Route::get('contact',[HomeController::class,'contact']);
Route::get('login',[HomeController::class,'login']);



