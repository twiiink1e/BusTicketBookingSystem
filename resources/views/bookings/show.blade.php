@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="pull-left">
                        <h2 style="margin-top: 50px"> Show Booking</h2>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body" style="font-size: 18px">

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" style="padding-bottom: 20px">
                                    <strong>Booking ID:</strong>
                                    {{ $booking->id }}
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" style="padding-bottom: 20px">
                                    <div class="form-group" >
                                    <strong>Trip ID:</strong>
                                    {{ $booking->trip_id }}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" style="padding-bottom: 20px">
                                    <div class="form-group" >
                                    <strong>Origin:</strong>
                                    {{ $booking->trip->road->province_origin->name }}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" style="padding-bottom: 20px">
                                    <div class="form-group" >
                                    <strong>Destination:</strong>
                                    {{ $booking->trip->road->province_destination->name }}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" style="padding-bottom: 20px">
                                    <div class="form-group" >
                                    <strong>Customer:</strong>
                                    {{ $booking->customer->fullname }}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" style="padding-bottom: 20px">
                                    <div class="form-group" >
                                    <strong>Status:</strong>
                                    {{ $booking->status }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" style="padding-bottom: 20px">
                                    <div class="form-group" >
                                    <strong>Price:</strong>
                                    {{ $booking->trip->price }}
                                </div>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('bookings.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
