<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Front\Welcome;
use Illuminate\Http\Request;

use App\Models\Province;
use App\Models\Trip;


class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinces = Province::get();

        return view('welcome',compact('provinces'));
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
     * @param  \App\Models\Front\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function show(Welcome $welcome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Front\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function edit(Welcome $welcome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Front\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Welcome $welcome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Front\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Welcome $welcome)
    {
        //
    }

    public function search(Request $request)
    {
        // dd($request->all());
        $inputDate = $request->input('inputDate');
        $origin = $request->input('origin');
        $destination = $request->input('destination');

        $trips = Trip::select()
        ->whereHas('road', function($query) use  ($origin){
            if ($origin){
                $query->where('origin_province_id', $origin);
            }
        })
        ->whereHas('road', function($query) use  ($destination){
            if ($destination){
                $query->where('destination_province_id', $destination);
            }
        })
        ->where(function($query) use ($inputDate){
            if ($inputDate){
             $query->where('dep_date', $inputDate);
            }
         })  

        ->get();

        $provinces = Province::get();
    
        return view('userTrip.index', compact('trips', 'provinces'));
        
    }
}
