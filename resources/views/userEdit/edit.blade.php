@extends('layouts.userapp')

@section('content')
<div class="container" style="margin-top: 50px; padding-bottom:100px; ">
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <h1>{{ Auth::user()->name }}</h1>
                    {{-- <h1>{{ Auth::user()->customer->fullname }}</h1> --}}
                    <div class="avatar-upload">
                        {{-- <div class="avatar-edit">
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                        </div> --}}
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url('assets/images/avatars/avatar1.png');">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">

                <div class="card">
                    <h1 style="text-align: left; margin-left: 15px"><i class="bx bxs-user me-1 font-22"></i>Customer Information</h1>

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif

                    <form action="{{ route('userProfile.update', Auth::user()->customer->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                    
                        <div class="card-body" style="margin-top: -20px">
                            <hr />
    
                            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Username:</strong>
                                    <input type="text" name="name" class="form-control" placeholder="Name"
                                        value="{{ Auth::user()->name }}" disabled>
                                </div>
                            </div><br />
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="text" name="email" class="form-control" placeholder="Email"
                                        value="{{ Auth::user()->email }}" disabled>
                                </div>
                            </div><br /> --}}

                            <input type="number" class="form-control" name="user_id" id="" value="{{ Auth::user()->id }}" hidden>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Full name:</strong>
                                    <input type="text" name="fullname" class="form-control" placeholder="Name"
                                        value="{{ Auth::user()->customer->fullname }}" >
                                </div>
                            </div><br />
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Phone Number:</strong>
                                    <input type="text" name="phone" class="form-control" placeholder="Phone"
                                        value="{{ Auth::user()->customer->phone }}" >
                                </div>
                            </div><br />
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Address:</strong>
                                    <input type="text" name="address" class="form-control" placeholder="Email"
                                        value="{{ Auth::user()->customer->address }}" >
                                </div>
                            </div>
                        </div>
    
                        <div class="card-footer">
                            <button class="btn btn-success" style="width: 150px">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
