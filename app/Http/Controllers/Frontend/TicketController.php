<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Front\Ticket;
use App\Models\Booking;
use App\Models\Province;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::user()->id;

        $bookings=Booking::select()
        ->whereHas('customer', function($query) use ($id){
            if ($id){
                $query->where('user_id', $id);
            }
        })

        ->get();

        // dd($tickets);

        $provinces=Province::get();

        return view('userTicket.index', compact('bookings', 'provinces'));
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
     * @param  \App\Models\Front\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Front\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Front\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Front\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }

    public function search(Request $request)
    {
        // dd($request->all());

        $inputDate = $request->input('inputDate');
        $origin = $request->input('origin');
        $destination = $request->input('destination');

        $id=Auth::user()->id;

        $bookings=Booking::select()
        ->whereHas('customer', function($query) use ($id){
            if ($id){
                $query->where('user_id', $id);
            }
        })

        ->whereHas('trip',function($query) use ($inputDate){
           if ($inputDate){
            $query->where('dep_date', $inputDate);
           }
        })  
        ->whereHas('trip',function($query) use ($origin){
            if ($origin){
                $query->where('origin_province_id', $origin);
            }
        })
        ->whereHas('trip',function($query) use ($destination){
            if ($destination){
                $query->where('destination_province_id', $destination);
            }
        })

        ->get();

        $provinces = Province::get();
    
        return view('userTicket.index', compact('bookings', 'provinces'));
        
    }
}
