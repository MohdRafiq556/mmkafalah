<?php

use Illuminate\Support\Facades\Route;
use App\Models\Customer;
use App\Models\Hibah;
use App\Models\Receiver;
use App\Models\User;

use App\Http\Controllers\HibahController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ReceiverController;
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



Route::get('/', [App\Http\Controllers\CustomerController::class, 'index'])->name('index');

//routes/web.php
Route::get('/', [\App\Http\Controllers\LandingpageController::class, 'index']);
Route::get('/aboutus', [\App\Http\Controllers\LandingpageController::class, 'aboutus'])->name('about');
Route::get('/contact', [\App\Http\Controllers\LandingpageController::class, 'contact'])->name('contact');
Route::get('/privacy-policy', [\App\Http\Controllers\LandingpageController::class, 'privacy'])->name('privacy');
Route::get('/hibah-aset', [\App\Http\Controllers\LandingpageController::class, 'hibah_aset'])->name('hibah_aset');
Route::get('/urus-pusaka', [\App\Http\Controllers\LandingpageController::class, 'urus_pusaka'])->name('urus_pusaka');
Route::get('/khairat', [\App\Http\Controllers\LandingpageController::class, 'khairat'])->name('khairat');
Route::get('/hartanah', [\App\Http\Controllers\LandingpageController::class, 'hartanah'])->name('hartanah');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//------------------------------user information-------------------------------------//
Route::get('page/user/profile', [App\Http\Controllers\HomeController::class, 'userProfile'])->name('page/user/profile');
Route::put('page/user/profile', [App\Http\Controllers\HomeController::class, 'updateAvatar'])->name('updateAvatar');
//Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('index');

//routes/web.php
//route for customer module
//Route::get('/customers', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer:index');
//Route::get('/customers/create', [App\Http\Controllers\CustomerController::class, 'create'])->name('customer:create');
//Route::post('/customers/create', [App\Http\Controllers\CustomerController::class, 'store'])->name('customer:store');

//-----------------------------Search-----------------------------------------------//


//group routing
//--------------------------------customers-----------------------------------------//
Route::get('customers/share_view/{customer}', [App\Http\Controllers\CustomerController::class, 'customer_view'])->name('customer-view');
Route::get('receivers/share_view/{hibah}', [App\Http\Controllers\CustomerController::class, 'customer_view_receivers'])->name('customer-view-receivers');
Route::get('receivers/share_view/details/{receiver}', [App\Http\Controllers\CustomerController::class, 'customer_view_receiver_detail'])->name('customer-view-receiver_details');
Route::get('customers/share_view/details/{customer}', [App\Http\Controllers\CustomerController::class, 'customer_view_hibah_detail'])->name('customer-view-hibah_details');

Route::group([
    'middleware'=>'auth', //lock this route group to only authenticated users
    'prefix'=>'customers',
    'as'=>'customer:',
    'except' => '[customer_view , customer-view-hibah_details]'
],function(){
    Route::get('/', [App\Http\Controllers\CustomerController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\CustomerController::class, 'create'])->name('create');
    Route::post('/create', [App\Http\Controllers\CustomerController::class, 'store'])->name('store');
    Route::get('/{customer}', [App\Http\Controllers\CustomerController::class, 'show'])->name('show');
    Route::get('/{customer}/edit', [App\Http\Controllers\CustomerController::class, 'edit'])->name('edit');
    Route::post('/{customer}', [App\Http\Controllers\CustomerController::class, 'update'])->name('update');
    Route::post('/{customer}/delete', [App\Http\Controllers\CustomerController::class, 'delete'])->name('delete');
    Route::get('/file/download', [App\Http\Controllers\CustomerController::class, 'download'])->name('downloadfile');
});

//-----------------------------hibah-------------------------------------------//
Route::get('/hibah/{id}', [HibahController::class, 'index'])->name('hibah-index');

Route::get('/hibah/{id}/create', [HibahController::class, 'create'])->name('hibah-create');


//-----------------------------receivers-----------------------------------//
Route::group([
    'middleware'=>'auth', //lock this route group to only authenticated users
    'prefix'=>'receivers',
    'as'=>'receiver:',
    'except' => '[customer-view-receivers , customer-view-receiver_details]'
],function(){
    Route::get('/{id}', [App\Http\Controllers\ReceiverController::class, 'index'])->name('index');
    Route::get('/create/{id}', [App\Http\Controllers\ReceiverController::class, 'create'])->name('create');
    Route::post('/create/{id}', [App\Http\Controllers\ReceiverController::class, 'store'])->name('store');
    Route::get('/{receiver}/show', [App\Http\Controllers\ReceiverController::class, 'show'])->name('show');
    Route::get('/{receiver}/edit', [App\Http\Controllers\ReceiverController::class, 'edit'])->name('edit');
    //Route::post('/{receiver}', [App\Http\Controllers\ReceiverController::class, 'update'])->name('update');
    Route::put('/{receiver}/update', [App\Http\Controllers\ReceiverController::class, 'update'])->name('update');
    Route::post('/receiver/{delete}', [App\Http\Controllers\ReceiverController::class, 'delete'])->name('delete');


});
