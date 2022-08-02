<?php
  
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\RoadController;
use App\Http\Controllers\ContactController;


  
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


Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();
  
/*------------------------------------------
All Normal Users Routes List
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
All Admin Routes List
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

    Route::resource('admin/users', UserController::class);
    Route::resource('admin/buses', BusController::class);
    Route::resource('admin/trips', TripController::class);
    Route::resource('admin/customers', CustomerController::class);
    Route::resource('admin/provinces', ProvinceController::class);
    Route::resource('admin/roads', RoadController::class);
    Route::resource('admin/contacts', ContactController::class);


});

