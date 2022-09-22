@extends('layouts.dashboard')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2 style="margin-top: 50px">Add New Bus</h2><br />
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

                <form class="card-body" action="{{ route('buses.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6" >
                            <div class="form-group">
                                <strong>Bus Name:</strong>
                                <input type="text" name="busname" class="form-control @error('busname') is-invalid @enderror" value="{{ old('busname') }}" placeholder="Bus">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Driver Name:</strong>
                                <input type="text" name="driver" class="form-control @error('driver') is-invalid @enderror" value="{{ old('driver') }}" placeholder="Driver">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6" style="margin-top: 15px">
                            <div class="form-group">
                                <strong>Plate Number:</strong>
                                <input type="text" name="plate" class="form-control @error('plate') is-invalid @enderror" value="{{ old('plate') }}" placeholder="Plate Number">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6" style="margin-top: 15px">
                            <div class="form-group">
                                <strong>Available Seat:</strong><br />
                                <input type="text" name="seat" class="form-control @error('seat') is-invalid @enderror" value="{{ old('seat') }}"
                                    placeholder="Number of available seat">

                            </div>
                        </div>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8 text-right"  style="margin-top: 15px">
                        <a class="btn btn-secondary" href="{{ route('buses.index') }}" style="width: 200px">
                            Back</a>
                        <button type="submit" class="btn btn-info" style="width: 200px">Submit</button>
                    </div>

                </form>
                </div>

            </div>
        </div>
    </div>

@endsection
