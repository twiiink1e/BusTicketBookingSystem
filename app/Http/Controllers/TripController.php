<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Province;
use App\Models\Trip;
use Illuminate\Http\Request;

// Export to excel namespace
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips = Trip::latest()->paginate(10);
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

        if(strcmp($request->origin_province_id, $request->destination_province_id) == 0){
            return back()->with("error", "Origin can't be the same with Destination.");
         }

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

    public function excel(){
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'id');
        $sheet->setCellValue('B1', 'origin');
        $sheet->setCellValue('C1', 'destination');
        $sheet->setCellValue('D1', 'dep_date');
        $sheet->setCellValue('E1', 'dep_time');
        $sheet->setCellValue('F1', 'arrival_time');
        $sheet->setCellValue('G1', 'bus');
        $sheet->setCellValue('H1', 'price');

        $trips = Trip::get();

        $rows = 2;
    
        foreach ($trips as $tripDetails) {

            $sheet->setCellValue('A' . $rows, $tripDetails['id']);
            $sheet->setCellValue('B' . $rows, $tripDetails['province_origin']->name);
            $sheet->setCellValue('C' . $rows, $tripDetails['province_destination']->name);
            $sheet->setCellValue('D' . $rows, $tripDetails['dep_date']);
            $sheet->setCellValue('E' . $rows, $tripDetails['dep_time']);
            $sheet->setCellValue('F' . $rows, $tripDetails['arrival_time']);
            $sheet->setCellValue('G' . $rows, $tripDetails['bus']->busname);
            $sheet->setCellValue('H' . $rows, $tripDetails['price']);

            $rows++;

        }

        $writer = new Xlsx($spreadsheet);
        $writer->save('report/TripReport.xlsx');

        return redirect()->route('trips.index')
        ->with('success', 'Excel exported successfully.');
    }
}
