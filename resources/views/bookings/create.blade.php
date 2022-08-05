@extends('layouts.dashboard')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2 style="margin-top: 50px">Add New Booking</h2><br />
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card">

                <form class="card-body" action="{{ route('bookings.store') }}" method="POST">
                    @csrf

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Schedule:</strong><br />
                                {{-- <input type="text" name="departure" class="form-control" placeholder="Departure"> --}}
                                <select class="form-select form-select-lg mb-3" name="trip_id"
                                    aria-label=".form-select-lg example" style="width: 400px">
                                    <option selected>Choose Schedule</option>
                                    @foreach ($trips as $trip)
                                        <option value="{{ $trip->id }}">{{ $trip->id }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Customer: </strong><br />
                                <select class="form-select form-select-lg mb-3" name="customer_id"
                                    aria-label=".form-select-lg example" style="width: 300px">
                                    @foreach ($customers as $customer)
                                        <option value="{{ $customer->id }}">{{ $customer->fullname }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Status: </strong><br />
                                <select class="form-select form-select-lg mb-3" name="status"
                                    aria-label=".form-select-lg example" style="width: 400px">
                                    <option value="BOOKED">Booked</option>
                                    <option value="PAID">Paid</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-8 col-sm-8 col-md-8 text-right" style="margin-top: 15px">
                            <a class="btn btn-secondary" href="{{ route('bookings.index') }}" style="width: 200px"> Back</a>
                            <button type="submit" class="btn btn-primary" style="width: 200px">Submit</button>
                        </div>
                    </div>

            </div>
            </form>
        </div>
    @endsection
