<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\Models\Front\Schedule;
use App\Models\Province;
use Illuminate\Http\Request;

use App\Models\Trip;
use Laravel\Ui\Presets\React;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd('12345');
        $trips = Trip::get();
        $provinces = Province::get();

        return view('userTrip.index',compact('trips', 'provinces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $inputDate = $request->input('inputDate');
        $origin = $request->input('origin');
        $destination = $request->input('destination');
        $seat = $request->input('seat');

        $trips = Trip::select()
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