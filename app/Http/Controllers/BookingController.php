<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Trip;
use App\Models\Customer;

use Illuminate\Http\Request;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['total']=Booking::select()
        ->where('bookings.status','PAID')
        ->where('bookings.trip_id', '2')
        // ->get();
        ->sum('seat');
        // dd($data['total']);
        
        // $busseat['remain']=Bus::select()
        // ->where('')
        $bookings = Booking::paginate(10);
        return view('bookings.index',compact('bookings'), $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trips=Trip::get();
        $customers=Customer::get();
 
        return view('bookings.create',compact('trips', 'customers'));
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
            'trip_id' => 'required',
            'customer_id' => 'required',
            'seat'=>'required',
        ]);

        Booking::create($request->all());

        return redirect()->route('bookings.index')
        ->with('success', 'Booking created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        $trips=Trip::get();
        $customers=Customer::get();
        return view('bookings.edit',compact('booking', 'trips', 'customers' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'trip_id' => 'required',
            'customer_id' => 'required',
            'seat'=>'required',

        ]);

        $booking->update($request->all());

        return redirect()->route('bookings.index')
        ->with('success','Booking updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')
        ->with('success', 'Booking deleted successfully.');
    }


    public function updateStatus($id)
    {
        $booking = Booking::find($id);

        if($booking->status == 'BOOKED'){

            $booking->update(['status' => 'PAID']);
            return redirect()->route('bookings.index');
        }
        else
        {
            $booking->update(['status' => 'BOOKED']);
            return redirect()->route('bookings.index');
        }
        return redirect()->route('bookings.index');
    }
}
