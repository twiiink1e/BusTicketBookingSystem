<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Road;
use App\Models\Trip;
use Illuminate\Http\Request;

class RoadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roads = Road::paginate(5);
        return view('roads.index', compact('roads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $road = Road::find(1);
        $provinces=Province::get();
        return view('roads.create', compact('provinces'));
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
        ]);

        Road::create($request->all());

        return redirect()->route('roads.index')
        ->with('success', 'Route created successfully'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Road  $road
     * @return \Illuminate\Http\Response
     */
    public function show(Road $road)
    {
        return view('roads.show', compact('road'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Road  $road
     * @return \Illuminate\Http\Response
     */
    public function edit(Road $road)
    {
        $provinces=Province::get();
        return view('roads.edit',compact('road','provinces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Road  $road
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Road $road)
    {
        $request->validate([
            'origin_province_id' => 'required',
            'destination_province_id' => 'required',
        ]);

        $road->update($request->all());

        return redirect()->route('roads.index')
                        ->with('success', 'Route updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Road  $road
     * @return \Illuminate\Http\Response
     */
    public function destroy(Road $road)
    {
        $road->delete();
    
        return redirect()->route('roads.index')
                        ->with('success','Route deleted successfully');
    }
}
