@extends('layouts.dashboard')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2 style="margin-top: 50px">Add New Customer</h2><br />
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
                    <form class="card-body" action="{{ route('customers.store') }}" method="POST">
                        @csrf
                
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Full Name:</strong>
                                    <input type="text" name="fullname" class="form-control" placeholder="">
                                </div>
                            </div>
    
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>User:</strong>
                                    <select class="form-select form-select-lg mb-3" name="user_id"
                                        aria-label=".form-select-lg example" >
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Phone Number (+855):</strong>
                                    <input type="text" name="phone" class="form-control" placeholder="">
                                </div>
                            </div>
                
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Address:</strong>
                                    <input type="text" name="address" class="form-control" placeholder="">
                                </div>
                            </div>
                
                        </div>
                
                        <div class="col-xs-8 col-sm-8 col-md-8 text-right" style="margin-top: 15px">
                            <a class="btn btn-secondary" href="{{ route('customers.index') }}" style="width: 200px"> Back</a>
                            <button type="submit" class="btn btn-info" style="width: 200px">Submit</button>
                        </div>
    
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
