@extends('layouts.dashboard')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-9">

            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2 style="margin-top: 50px">Add New Trip</h2><br />
                    </div>
                    {{-- <div class="pull-right">
                            <a style="margin-top: 50px" class="btn btn-primary" href="{{ route('buses.index') }}"> Back</a>
                        </div> --}}
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

                <form class="card-body" action="{{ route('trips.store') }}" method="POST">
                    @csrf

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Route:</strong><br />
                                {{-- <input type="text" name="departure" class="form-control" placeholder="Departure"> --}}
                                <select class="form-select form-select-lg mb-3" name="road_id"
                                    aria-label=".form-select-lg example">
                                    <option selected>Choose origin</option>
                                    @foreach ($roads as $road)
                                    <option value="{{ $road->id }}">{{ $road->id }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Destination:</strong><br />
                                <input type="text" name="departure" class="form-control" placeholder="Departure">
                                <select class="form-select form-select-lg mb-3" name="destination"
                                    aria-label=".form-select-lg example">
                                    <option selected>Choose destination</option>
                                    @foreach ($roads as $road)
                                    <option value="{{ $road->id }}">{{ $road->destination_province_id }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Departure Date:</strong>
                                <input type="date" name="dep_date" class="form-control">
                            </div>
                        </div>



                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Departure Time:</strong>
                                <input type="time" name="dep_time" id="picker" class="form-control">

                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Arrival Time:</strong>
                                <input type="time" name="arrival_time" id="picker" class="form-control">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Bus: </strong><br />
                                <select class="form-select form-select-lg mb-3" name="bus_id"
                                    aria-label=".form-select-lg example" style="width: 300px">
                                    @foreach ($buses as $bus)
                                        <option value="{{ $bus->id }}">{{ $bus->busname }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Price:</strong>
                                <input type="float" name="price" class="form-control" placeholder="Price (USD)">
                            </div>
                        </div>

                        <div class="col-xs-8 col-sm-8 col-md-8 text-right" style="margin-top: 15px">
                            <button type="submit" class="btn btn-primary" style="width: 300px">Submit</button>
                        </div>
                    </div>

            </div>
            </form>
        </div>
    @endsection
