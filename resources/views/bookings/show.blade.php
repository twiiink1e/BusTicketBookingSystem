@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="pull-left">
                        <h3 style="margin-top: 50px"> Show Booking</h3> <br />
                    </div>
                </div>

                <div class="card radius-15 w-100">
                    <div class="card-body" style="font-size: 18px">

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Booking ID:</strong>
                                    {{ $booking->id }}
                                </div>
                                <hr>
                            </div>
                            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <strong>Trip ID:</strong>
                                        {{ $booking->trip_id }}
                                    </div>
                                </div>
                                <hr>
                            </div> --}}
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <strong>Trip:</strong>
                                        {{ $booking->trip->province_origin->name }}  --->  {{ $booking->trip->province_destination->name }} 
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <strong>Schedule:</strong>
                                        {{ $booking->trip->dep_date }} | {{  $booking->trip->dep_time }} -> {{ $booking->trip->arrival_time }} 
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <strong>Customer:</strong>
                                        {{ $booking->customer->fullname }}
                                    </div>
                                </div>
                                <hr>
                            </div>
 
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <strong>Bus:</strong>
                                        {{ $booking->trip->bus->busname }}
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <strong>Number of Seat:</strong>
                                        {{ $booking->seat }}
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <strong>Price (USD):</strong>
                                        {{ $booking->trip->price }}
                                    </div>
                                </div>
                                <hr>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <strong>Status:</strong>
                                        {{ $booking->status }}
                                    </div>
                                </div>
                                <hr>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <strong>Booked Date:</strong>
                                        {{ $booking->created_at }}
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('bookings.index') }}">
                                    Back</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
