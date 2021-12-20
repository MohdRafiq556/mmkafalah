<?php

use Illuminate\Support\Facades\Route;
use App\Models\Customer;
use App\Models\Hibah;
use App\Models\Receiver;

use App\Http\Controllers\HibahController;
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



Route::get('/', [App\Http\Controllers\CustomerController::class, 'index'])->name('index');



//routes/web.php
Route::get('/', [\App\Http\Controllers\LandingpageController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//------------------------------user information-------------------------------------//
Route::get('page/user/profile', [App\Http\Controllers\HomeController::class, 'userProfile'])->name('page/user/profile');
Route::put('page/user/profile', [App\Http\Controllers\HomeController::class, 'updateAvatar'])->name('updateAvatar');


//routes/web.php
//route for customer module
//Route::get('/customers', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer:index');
//Route::get('/customers/create', [App\Http\Controllers\CustomerController::class, 'create'])->name('customer:create');
//Route::post('/customers/create', [App\Http\Controllers\CustomerController::class, 'store'])->name('customer:store');

//-----------------------------Search-----------------------------------------------//


//group routing
//--------------------------------customers-----------------------------------------//
Route::get('customers/share_view/{customer}', [App\Http\Controllers\CustomerController::class, 'customer_view'])->name('customer-view');//kalau guna ni je, ade error bila search, error"Route [customer:customer-view] not defined. "


Route::group([
    'middleware'=>'auth', //lock this route group to only authenticated users
    'prefix'=>'customers',
    'as'=>'customer:',
    'except' => 'customer_view'
],function(){
    Route::get('/', [App\Http\Controllers\CustomerController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\CustomerController::class, 'create'])->name('create');
    Route::post('/create', [App\Http\Controllers\CustomerController::class, 'store'])->name('store');
    Route::get('/{customer}', [App\Http\Controllers\CustomerController::class, 'show'])->name('show');
    Route::get('/{customer}/edit', [App\Http\Controllers\CustomerController::class, 'edit'])->name('edit');
    Route::post('/{customer}', [App\Http\Controllers\CustomerController::class, 'update'])->name('update');
    Route::post('/{customer}/delete', [App\Http\Controllers\CustomerController::class, 'delete'])->name('delete');
    Route::get('customers/share_view/{customer}', [App\Http\Controllers\CustomerController::class, 'customer_view'])->name('customer-view'); //aku tambah ni
});

//-----------------------------hibah-------------------------------------------//
Route::get('/hibah/{id}', [HibahController::class, 'index'])->name('hibah-index');

Route::get('/hibah/{id}/create', [HibahController::class, 'create'])->name('hibah-create');


//-----------------------------receivers-----------------------------------//
Route::group([
    'middleware'=>'auth', //lock this route group to only authenticated users
    'prefix'=>'receivers',
    'as'=>'receiver:',
],function(){
    Route::get('/{id}', [App\Http\Controllers\ReceiverController::class, 'index'])->name('index');
    Route::get('/create/{id}', [App\Http\Controllers\ReceiverController::class, 'create'])->name('create');
    Route::post('/create/{id}', [App\Http\Controllers\ReceiverController::class, 'store'])->name('store');
    Route::get('/{receiver}', [App\Http\Controllers\ReceiverController::class, 'show'])->name('show');
    Route::get('/{receiver}/edit', [App\Http\Controllers\ReceiverController::class, 'edit'])->name('edit');
    Route::post('/{receiver}', [App\Http\Controllers\ReceiverController::class, 'update'])->name('update');
    Route::post('/{receiver}/delete', [App\Http\Controllers\ReceiverController::class, 'delete'])->name('delete');

});
