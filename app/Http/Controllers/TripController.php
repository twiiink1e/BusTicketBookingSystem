<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Province;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips = Trip::paginate(10);
        return view('trips.index',compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buses=Bus::get();
        $provinces=Province::get();
        return view('trips.create',compact('buses', 'provinces'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'origin_province_id' => 'required',
            'destination_province_id' => 'required',
            'dep_date' => 'required',
            'dep_time' => 'required',
            'arrival_time' => 'required',
            'bus_id' => 'required',
            'price' => 'required',
        ]);

        Trip::create($request->all());

        return redirect()->route('trips.index')
        ->with('success','Trip created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trip $trip)
    {
        return view('trips.show',compact('trip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip $trip)
    {
        $provinces=Province::get();
        $buses=Bus::get();
        return view('trips.edit',compact('trip','buses', 'provinces'));
        // return view('trips.edit',compact('trip'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip $trip)
    {
        $request->validate([
            'origin_province_id' => 'required',
            'destination_province_id' => 'required',
            'dep_date' => 'required',
            'dep_time' => 'required',
            'arrival_time' => 'required',
            'bus_id' => 'required',
            'price' => 'required',
        ]);
    
        $trip->update($request->all());
    
        return redirect()->route('trips.index')
                        ->with('success','Trip updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $trip)
    {
        $trip->delete();
    
        return redirect()->route('trips.index')
                        ->with('success','Trip deleted successfully');
    }
}
