<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buses = Bus::paginate(10);
        return view('buses.index',compact('buses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buses.create');
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
            'busname' => 'required|unique:buses,busname',
            'driver' => 'required',
            'seat' => 'required',
            'plate' => 'required|unique:buses,plate',
        ]);
    
        Bus::create($request->all());
     
        return redirect()->route('buses.index')
                        ->with('success','Bus created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function show(Bus $bus)
    {
        return view('buses.show',compact('bus'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function edit(Bus $bus)
    {
        return view('buses.edit',compact('bus'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bus $bus)
    {
        $request->validate([
            'busname' => 'required|unique:buses,busname',
            'driver' => 'required',
            'seat' => 'required',
            'plate' => 'required|unique:buses,plate',
        ]);
    
        $bus->update($request->all());
    
        return redirect()->route('buses.index')
                        ->with('success','Bus updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bus $bus)
    {
        $bus->delete();
    
        return redirect()->route('buses.index')
                        ->with('success','Bus deleted successfully');
    }
}
