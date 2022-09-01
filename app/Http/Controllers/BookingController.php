<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Trip;
use App\Models\Customer;
use App\Models\Bus;

// Export to excel namespace
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use Illuminate\Support\Carbon;


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
  
        $data['book']=Booking::select()
        // ->where('bookings.status','PAID')
        ->where('bookings.trip_id', '14')
        // ->get();
        // ->groupBy('bookings.trip_id')
        ->sum('seat');

        // dd($data['book']);

        // Bus::find(1)->decrement('seat', $data['book']);

        $bookings = Booking::latest()->paginate(10);
        
        return view('bookings.index',compact('bookings'), $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $current_date = Carbon::now();

        $trips=Trip::select()
        ->whereDate('dep_date', '>=', $current_date)
        ->get();
        
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
            'seat'=>'required|numeric|gt:0',
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
            'seat'=>'required|numeric|gt:0',

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

    public function excel(){
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'id');
        $sheet->setCellValue('B1', 'trip_id');
        $sheet->setCellValue('C1', 'customer_id');
        $sheet->setCellValue('D1', 'seat');
        $sheet->setCellValue('E1', 'status');

        $bookings = Booking::get();

        $rows = 2;
    
        foreach ($bookings as $bookingDetails) {

            $sheet->setCellValue('A' . $rows, $bookingDetails['id']);
            $sheet->setCellValue('B' . $rows, $bookingDetails['trip_id']);
            $sheet->setCellValue('C' . $rows, $bookingDetails['customer_id']);
            $sheet->setCellValue('D' . $rows, $bookingDetails['seat']);
            $sheet->setCellValue('E' . $rows, $bookingDetails['status']);

            $rows++;

        }

        $writer = new Xlsx($spreadsheet);
        $writer->save('report/BookingReport.xlsx');

        return redirect()->route('bookings.index')
        ->with('success', 'Excel exported successfully.');
    }
}
