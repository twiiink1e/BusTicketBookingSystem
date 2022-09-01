@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="pull-left">
                        <h3 style="margin-top: 50px"> Show Trip Schedule</h3><br />
                    </div>
                </div>

                <div class="card radius-15 w-100 ">

                    <div class="card-body" style="font-size: 18px; padding: 30px">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <strong>Trip ID:</strong>
                                    {{ $trip->id }}
                                </div>

                                <br>

                                <div class="form-group">
                                    <strong>Departure Date:</strong>
                                    {{ $trip->dep_date }}
                                </div>

                                <br>

                                <div class="form-group">
                                    <strong>Bus:</strong>
                                    {{ $trip->bus->busname }}
                                </div>
                               
                                <br>

                                <div class="form-group">
                                    <strong>Price (USD):</strong>
                                    {{ $trip->price }}
                                </div>
                            </div>

                            <div class="col">

                                <div class="form-group">
                                    <strong>Trip:</strong>
                                    {{ $trip->province_origin->name }} --->
                                    {{ $trip->province_destination->name }}
                                </div>
                                <br>

                                <div class="form-group">
                                    <strong>Time:</strong>
                                    {{ $trip->dep_time }}  --->  {{ $trip->arrival_time }}
                                </div>

                                <br />

                                <div class="form-group">
                                    <strong>Available Seat:</strong>
                                    {{ $trip->bus->seat }}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <a style="margin-top: 30px" class="btn btn-primary" href="{{ route('trips.index') }}"> Back</a>

                </div>
            </div>
        </div>
    </div>
@endsection
