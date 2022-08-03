<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Road;
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
        $trips = Trip::paginate(5);
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
        $roads=Road::get();
        return view('trips.create',compact('buses', 'roads'));

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
            'road_id' => 'required',
            // 'destination' => 'required',
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
        
        $buses=Bus::get();
        return view('trips.edit',compact('trip','buses'));
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
            'origin' => 'required',
            'destination' => 'required',
            'dep_date' => 'required',
            'dep_time' => 'required',
            'arrival_time' => 'required',
            // 'bus' => 'required',
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
