<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Carbon;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Front\Schedule;
use App\Models\Province;

use Illuminate\Http\Request;

use App\Models\Trip;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $current_date = Carbon::now();

        $trips = Trip::select()

        ->whereDate('dep_date', '>=', $current_date)

        ->whereHas('bus', function($query){  
                $query->where('seat','>', 0);
        })
        ->get();
        $provinces = Province::get();

        return view('userTrip.index',compact('trips', 'provinces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        // dd($request->seat);

        if (empty(Auth::user()->customer->id)) {
            return view('userEdit.create');

        } else {
            
            $trip = Trip::find($request->id);

            return view('userTrip.create', compact('trip', 'request'));
        }

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->seat);

        $request->validate([
            'trip_id' => 'required',
            'customer_id' => 'required',
            'seat' => 'required|numeric|gt:0',
        ]); 

        Booking::create($request->all());

        return redirect()->route('userTicket.index')
        ->with('success','Ticket booked successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Front\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Front\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Front\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Front\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        //
    }

    public function search(Request $request)
    {
        // dd($request->all());
        $current_date = Carbon::now();

        $inputDate = $request->input('inputDate');
        $origin = $request->input('origin');
        $destination = $request->input('destination');
        $seat = $request->input('seat');

        $trips = Trip::select()
        ->whereDate('dep_date', '>=', $current_date)
        
        ->where(function($query) use ($inputDate){
           if ($inputDate){
            $query->where('dep_date', $inputDate);
           }
        })  
        ->where(function($query) use ($origin){
            if ($origin){
                $query->where('origin_province_id', $origin);
            }
        })
        ->where(function($query) use ($destination){
            if ($destination){
                $query->where('destination_province_id', $destination);
            }
        })
        ->whereHas('bus', function($query) use ($seat){
            if ($seat){
                $query->where('seat','>=', $seat);
            }
        })

        ->get();

        $provinces = Province::get();
    
        return view('userTrip.index', compact('trips', 'provinces'));
        
    }
}
