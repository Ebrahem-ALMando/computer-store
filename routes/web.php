<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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



Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect']);
Route::post('/add_category',[AdminController::class,'add_category']);
Route::post('/add_products',[AdminController::class,'add_products']);
Route::post('/add_users',[AdminController::class,'add_users']);
Route::post('/edit_product/{id}',[AdminController::class,'edit_product']);
Route::post('/edit_category/{id}',[AdminController::class,'edit_category']);
Route::post('/edit_users/{id}',[AdminController::class,'edit_users']);
Route::get('/products_view',[AdminController::class,'products_view']);
Route::get('/category_view',[AdminController::class,'category_view']);
Route::get('/user_view',[AdminController::class,'user_view']);
Route::get('/delete_product/{id}',[AdminController::class,'delete_product']);
Route::get('/delete_category/{id}',[AdminController::class,'delete_category']);
Route::get('/delete_user/{id}',[AdminController::class,'delete_user']);
Route::get('/update_product/{id}',[AdminController::class,'update_product']);
Route::get('/update_category/{id}',[AdminController::class,'update_category']);
Route::get('/update_user/{id}',[AdminController::class,'update_user']);
Route::get('/add_product',[AdminController::class,'add_product_view']);
Route::get('/add_category',[AdminController::class,'add_category_view']);
Route::get('/add_user',[AdminController::class,'add_user_view']);
Route::get('/product_view/{id}',[HomeController::class,'product_view']);
Route::get('/one-product_view/{id}',[HomeController::class,'one_product_view']);


//Route::get('/category/{id}',function (\App\Models\Category $category){
////    $s=$category->product;
////    dd($s);
//    return view('user.product_view_user',[
//        'categorys'=>$s
//
//    ]) ;
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
