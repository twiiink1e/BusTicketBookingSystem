@extends('layouts.userapp')

@section('content')

    <div style="padding:100px">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <br />
                <div class="card border-top border-0 border-4">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22"></i>
                                </div>
                                <h5 class="mb-0">Customer Information</h5>
                            </div>
                            <hr>

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

                            <form action="{{ route('userTrip.store') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <select class="form-select form-select-lg" name="user_id"
                                        aria-label=".form-select-lg example">
                                        <option value="{{ Auth::user()->id }}" selected >{{ Auth::user()->name }}</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Full Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEnterYourName"
                                            placeholder="Enter your fullname" name="fullname">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Phone Number</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPhoneNo2"
                                            placeholder="Enter phone number" name="phone">
                                    </div>
                                </div>

                                {{-- <div class="row mb-3">
                                    <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Email Address</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="inputEmailAddress2"
                                            placeholder="Enter email address" name="email">
                                    </div>
                                </div> --}}

                                <div class="row mb-3">
                                    <label for="inputAddress4" class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="inputAddress4" rows="3" placeholder="Enter address" name="address"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputAddress4" class="col-sm-3 col-form-label"></label>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-success px-5">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
