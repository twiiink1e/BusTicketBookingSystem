@extends('layouts.adminapp')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">

                <div class="row">

                    <div class="pull-left">
                        <h2 style="margin-top: 50px">Edit Trip</h2><br />
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
                                <select class="form-select form-select-lg mb-3" name="origin"
                                    aria-label=".form-select-lg example">
                                    <option selected>{{ $trip->origin }}</option>
                                    <option value="Phnom Penh">Phnom Penh</option>
                                    <option value="Siem Reap">Siem Reap</option>
                                    <option value="Kep">Kep</option>
                                    <option value="Koh Kong">Koh Kong</option>
                                    <option value="Kampot">Kampot</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Destination:</strong><br />
                                {{-- <input type="text" name="departure" class="form-control" placeholder="Departure"> --}}
                                <select class="form-select form-select-lg mb-3" name="destination"
                                    aria-label=".form-select-lg example">
                                    <option selected>{{ $trip->destination }}</option>
                                    <option value="Phnom Penh">Phnom Penh</option>
                                    <option value="Siem Reap">Siem Reap</option>
                                    <option value="Kep">Kep</option>
                                    <option value="Koh Kong">Koh Kong</option>
                                    <option value="Kampot">Kampot</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Departure Date:</strong>
                                <input type="date" name="dep_date" class="form-control" value="{{ $trip->dep_date }}">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Departure Time:</strong>
                                <input type="time" name="dep_time" id="picker" class="form-control" value="{{ $trip->dep_time }}">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Arrival Time:</strong>
                                <input type="time" name="arrival_time" id="picker" class="form-control" value="{{ $trip->arrival_time }}">
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
                                <input type="float" name="price" class="form-control" placeholder="Price (USD)" value="{{ $trip->price }}">
                            </div>
                        </div>

                        <div class="col-xs-8 col-sm-8 col-md-8 text-right">
                            <button type="submit" class="btn btn-primary" style="width: 300px">Submit</button>
                        </div>

                    </div>
            </div>
        </div>


        </form>
    </div>
    </div>
    </div>
@endsection
