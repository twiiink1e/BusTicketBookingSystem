@extends('layouts.dashboard')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">

                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2 style="margin-top: 50px">Add New Province</h2><br />
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

                <form action="{{ route('provinces.store') }}" method="POST">
                    @csrf

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Province Name:</strong>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
 
                        <div class="col-xs-8 col-sm-8 col-md-8 text-right" style="margin-top: 15px">
                            <button type="submit" class="btn btn-primary" style="width: 300px">Submit</button>
                        </div>

                    </div>
            </div>
        </div>


        </form>
    @endsection
