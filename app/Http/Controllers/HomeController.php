<?php
  
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Trip;
use App\Models\User;
use App\Models\Bus;
use App\Models\Contact;
use App\Models\Province;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

 
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

        $latestbookings = Booking::latest()->paginate(5);

        $current_date = Carbon::now();

        $todaytrips = Trip::select()
        ->whereDate('dep_date', '=', $current_date)
        ->get();
        
        return view('maindashboard', compact('user','trip','province','bus','contact','booking', 'latestbookings', 'todaytrips'));
    }

    public function changePassword()
    {
        return view('userEdit.change-password');
    }

    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }
  
}