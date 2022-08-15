@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="pull-left">
                        <h2 style="margin-top: 50px"> Show Trip Schedule</h2>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body" style="font-size: 18px">

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" style="padding-bottom: 10px">
                                    <strong>Trip ID:</strong>
                                    {{ $trip->id }}
                                </div>
                            </div>
                            <hr>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" style="padding-bottom: 10px">
                                    <div class="form-group">
                                        <strong>Origin:</strong>
                                        {{ $trip->province_origin->name }}
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" style="padding-bottom: 10px">
                                    <div class="form-group">
                                        <strong>Destination:</strong>
                                        {{ $trip->province_destination->name }}
                                    </div>
                                </div>
                            </div>
                            <hr>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" style="padding-bottom: 10px">
                                    <div class="form-group">
                                        <strong>Departure Date:</strong>
                                        {{ $trip->dep_date }}
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" style="padding-bottom: 10px">
                                    <div class="form-group">
                                        <strong>Departure Time:</strong>
                                        {{ $trip->dep_time }}
                                    </div>
                                </div>
                            </div>
                            <hr>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" style="padding-bottom: 10px">
                                    <div class="form-group">
                                        <strong>Arrival Time</strong>
                                        {{ $trip->arrival_time }}
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" style="padding-bottom: 10px">
                                    <div class="form-group">
                                        <strong>Bus:</strong>
                                        {{ $trip->bus->busname }}
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" style="padding-bottom: 10px">
                                    <div class="form-group">
                                        <strong>Available Seat</strong>
                                        {{ $trip->bus->seat }}
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" style="padding-bottom: 10px">
                                    <div class="form-group">
                                        <strong>Price (USD):</strong>
                                        {{ $trip->price }}
                                    </div>
                                </div>
                            </div>
                            <div class="pull-right">
                                <a style="margin-top: 30px" class="btn btn-primary" href="{{ route('trips.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
