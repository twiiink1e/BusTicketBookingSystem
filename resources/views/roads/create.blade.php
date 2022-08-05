@extends('layouts.dashboard')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2 style="margin-top: 50px">Add New Route</h2><br />
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

                <form class="card-body" action="{{ route('roads.store') }}" method="POST">
                    @csrf

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Origin:</strong><br />
                                {{-- <input type="text" name="departure" class="form-control" placeholder="Departure"> --}}
                                <select class="form-select form-select-lg mb-3" name="origin_province_id"
                                    aria-label=".form-select-lg example">
                                    @foreach ($provinces as $province)
                                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Destination:</strong><br />
                                {{-- <input type="text" name="departure" class="form-control" placeholder="Departure"> --}}
                                <select class="form-select form-select-lg mb-3" name="destination_province_id"
                                    aria-label=".form-select-lg example">
                                    @foreach ($provinces as $province)
                                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="col-xs-8 col-sm-8 col-md-8 text-right" style="margin-top: 15px">
                            <a class="btn btn-secondary" href="{{ route('roads.index') }}" style="width: 200px"> Back</a>
                            <button type="submit" class="btn btn-primary" style="width: 200px">Submit</button>
                        </div>
                    </div>

            </div>
            </form>
        </div>
    </div>
@endsection
