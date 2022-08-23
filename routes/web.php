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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');


Route::get('/contact', [ContactUsController::class,'create'])->name('contactus.create');
Route::post('/contact',[ContactUsController::class, 'store'])->name('contactus.store');


Route::get('/search', [ScheduleController::class, 'search'])->name('userTrip.search');
Route::get('/schedule',[ScheduleController::class, 'index'])->name('userTrip.index');


Auth::routes();
  
/*------------------------------------------
All Normal Users Routes List
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/useredit', function () {
        return view('userEdit.edit');
    });

    Route::get('/create',[ScheduleController::class, 'create'])->name('userTrip.create');
    Route::post('/create',[ScheduleController::class, 'store'])->name('userTrip.store');
    
    
    
    Route::get('/mytickets',[TicketController::class, 'index']);
    Route::get('/searchticket', [TicketController::class, 'search'])->name('userTicket.search');

    Route::get('/change-password', [HomeController::class, 'changePassword'])->name('change-password');
    Route::post('/change-password', [HomeController::class, 'updatePassword'])->name('update-password');

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

