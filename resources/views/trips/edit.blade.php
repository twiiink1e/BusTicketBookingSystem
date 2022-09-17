@extends('layouts.dashboard')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="row">

                    <div class="pull-left">
                        <h2 style="margin-top: 50px">Edit Trip Schedule</h2><br />
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
                </div>
                @endif

                <form action="{{ route('trips.update', $trip->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Origin:</strong><br />
                                <select class="form-select form-select-lg mb-3" name="origin_province_id"
                                    aria-label=".form-select-lg example">

                                    <option value="{{ $trip->province_origin->id }}" selected>
                                        {{ $trip->province_origin->name }}</option>

                                    @foreach ($provinces as $province)
                                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Destination:</strong><br />
                                <select class="form-select form-select-lg mb-3" name="destination_province_id"
                                    aria-label=".form-select-lg example">
                                    <option value="{{ $trip->province_destination->id }}" selected>
                                        {{ $trip->province_destination->name }}</option>

                                    @foreach ($provinces as $province)
                                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Departure Date:</strong>
                                <input type="date" name="dep_date" class="form-control" value="{{ $trip->dep_date }}"
                                    id="datePickerId">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Departure Time:</strong>
                                <input type="time" name="dep_time" id="" class="form-control" value="{{ $trip->dep_time }}">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6" style="margin-top: 15px">
                            <div class="form-group">
                                <strong>Arrival Time:</strong>
                                <input type="time" name="arrival_time" id="" class="form-control"
                                    value="{{ $trip->arrival_time }}">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6" style="margin-top: 15px">
                            <div class="form-group">
                                <strong>Bus: </strong><br />
                                <select class="form-select form-select-lg mb-3" name="bus_id"
                                    aria-label=".form-select-lg example">
                                    <option value="{{ $trip->bus->id }}" selected>{{ $trip->bus->busname }}</option>
                                    @foreach ($buses as $bus)
                                        <option value="{{ $bus->id }}">{{ $bus->busname }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Price:</strong>
                                <input type="float" name="price" class="form-control" placeholder="Price (USD)"
                                    value="{{ $trip->price }}">
                            </div>
                        </div>

                        <div class="col-xs-8 col-sm-8 col-md-8 text-right" style="margin-top: 15px">
                            <a class="btn btn-secondary" href="{{ route('trips.index') }}" style="width: 200px">
                                Back</a>
                            <button type="submit" class="btn btn-primary" style="width: 200px">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
