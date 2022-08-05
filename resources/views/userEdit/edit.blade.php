@extends('layouts.userapp')

@section('content')
<div class="container" style="margin-top: 50px; padding-bottom:300px ">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2 style="margin-top: 30px">Edit User</h2>
                    </div>
                </div>
            </div>  
            <form>
                <div class="row">                      
                    <div class="card">
                        <div class="card-body">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Userame:</strong>
                                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ Auth::user()->name }}" disabled>
                        
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{ Auth::user()->email }}" disabled>
                                        {{-- value="{{ $user->email }}"> --}}
                                </div>
                            </div>
    
                            <div class="col-xs-8 col-sm-8 col-md-8 text-right" style="margin-top: 15px">
                                <button type="submit" class="btn btn-primary" style="width: 300px">Submit</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

@endsection
