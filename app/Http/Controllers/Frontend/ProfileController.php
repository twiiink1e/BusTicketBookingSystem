<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Front\Profile;
use App\Models\Trip;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isNull;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userEdit.create');
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
            'fullname' => 'required',
            'phone' => 'required',
            'address'=> 'required',
            'user_id' => 'required',
        ]);

        Customer::create($request->all());

        return redirect()->route('userTrip.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Front\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Front\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        // return view('userEdit.edit');

        if (empty(Auth::user()->customer->id)) {
            return view('userEdit.create');

        } else {
            return view('userEdit.edit');
        }
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Front\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            // 'fullname' => 'required',
            // 'phone' => 'required',
            // 'address'=> 'required',
            'user_id' => 'required',
        ]);

        Customer::create($request->all());

        return redirect()->route('userEdit.edit')
        ->with('success','Customer created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Front\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
