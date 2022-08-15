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
use App\Http\Controllers\BookingController;

use App\Http\Controllers\Frontend\ScheduleController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\Frontend\TicketController;

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

Route::resource('/', WelcomeController::class);



// Route::get('/contact', function () {
//     return view('contact');
// });

Route::resource('/contact', ContactUsController::class);
Route::get('trip/search', [ScheduleController::class, 'search'])->name('trip.search');

Route::get('/trip',[ScheduleController::class, 'index']);


Auth::routes();
  
/*------------------------------------------
All Normal Users Routes List
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/edit', function () {
        return view('userEdit.edit');
    });

    Route::get('/create',[ScheduleController::class, 'create'])->name('trip.create');
    
    Route::get('/tickets',[TicketController::class, 'index']);


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
    Route::resource('admin/bookings', BookingController::class);

    Route::get('admin/bookings/updatestatus/{id}', [BookingController::class,'updateStatus'])->name('updateStatus');

});

