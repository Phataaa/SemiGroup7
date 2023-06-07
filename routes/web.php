<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerUser;
use App\Http\Controllers\ControllerAuth;
use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\ControllerCategory;
use App\Http\Controllers\ControllerProduct;
use App\Http\Controllers\ControllerHome;
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

// Route::get('/layout', function() {
//     return view('user.layout');
// });
// Route::get('/home', function() {
//     return view('user.admin.home');
// })->name('home');
// Route::get('/management-user', function() {
//     return view('user.admin.management_user');
// });
// Route::get('/management-category', function() {
//     return view('user.admin.management_category');
// });
// Route::get('/management-product', function() {
//     return view('user.admin.management_product');
// });
// Route::get('/create-product', function() {
//     return view('product.create');
// });




Route::get('/Register', [ControllerUser::class, 'create'])->name('create.register');
Route::post('/Register', [ControllerUser::class, 'store'])->name('register.store');

Route::get('Login', [ControllerAuth::class, 'showLogin'])->name('showLogin');
Route::post('Login', [ControllerAuth::class, 'login'])->name('auth.login');


Route::group(['prefix'=>'Admin'], function() {
    Route::get('Management_user', [ControllerAdmin::class, 'management_user'])->name('management_user');
    Route::get('Management_Category', [ControllerAdmin::class, 'management_category'])->name('management_category');
});


Route::group(['prefix'=>'Category'], function() {
    Route::get('/Category', [ControllerCategory::class, 'create'])->name('create.category');
    Route::post('/Category', [ControllerCategory::class, 'store'])->name('store.category');
});


Route::group(['prefix'=>'Product'], function(){
    Route::get('create', [ControllerProduct::class, 'create'])->name('create.product');
    Route::post('store', [ControllerProduct::class, 'store'])->name('store.product');
});

Route::group(['prefix'=>'Home'], function() {
    Route::get('', [ControllerHome::class, 'index'])->name('index.home');
});
// Route::get('Home', [ControllerHome::class, 'index'])->name('index.home');
