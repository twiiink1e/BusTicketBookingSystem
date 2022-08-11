<?php
  
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Trip;
use App\Models\User;
use App\Models\Bus;
use App\Models\Contact;
use App\Models\Province;

 
use Illuminate\Http\Request;
  
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $provinces=Province::get();
        return view('welcome', compact('provinces'));
    } 
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $user = User::get()->count();
        $trip = Trip::get()->count();
        $bus = Bus::get()->count();
        $contact = Contact::get()->count();
        $province = Province::get()->count();
        $booking = Booking::get()->count();
        
        return view('maindashboard', compact('user','trip','province','bus','contact','booking'));
    }
  
}