@extends('layouts.dashboard')

@section('content')

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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2 style="margin-top: 50px">Edit User</h2>
                        </div>
                    </div>
                </div>
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        
                        <div class="card">
                            <div class="card-body">

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Userame:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Name"
                                            value="{{ $user->name }}">
                                    </div>
                                </div>
        
                                <div class="col-xs-8 col-sm-8 col-md-8 text-right" style="margin-top: 15px">
                                    <button type="submit" class="btn btn-primary" style="width: 300px">Submit</button>
                                </div>
        


                            </div>
                        </div>

                        {{-- <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                        </div> --}}

                </form>
            </div>
        </div>
    </div>
@endsection
