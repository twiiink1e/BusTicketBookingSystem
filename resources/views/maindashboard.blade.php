@extends('layouts.dashboard')
@section('content')
    <div class="page-content">
        <div class="row">
            {{-- <div class="col-4 col-lg-2">
                <div class="card radius-15 overflow-hidden">
                    <div class="card-body">
                    </div>
                </div>
            </div> --}}

            <div class="card radius-15 w-100">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card radius-15 mb-0 shadow-none border">
                                <div class="card-body text-center">
                                    <div class="widgets-icons mx-auto bg-primary rounded-circle text-white"><i class='bx bx-group'></i>
                                    </div>
                                    <h4 class="mb-0 font-weight-bold mt-3">{{ $user }}</h4>
                                    <p class="mb-0">Total Users</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card radius-15 mb-0 shadow-none border">
                                <div class="card-body text-center">
                                    <div class="widgets-icons mx-auto rounded-circle bg-info text-white"><i class='bx bx-calendar-check'></i>
                                    </div>
                                    <h4 class="mb-0 font-weight-bold mt-3">{{ $booking }}</h4>
                                    <p class="mb-0">Total Booking</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card radius-15 mb-0 shadow-none border">
                                <div class="card-body text-center">
                                    <div class="widgets-icons mx-auto bg-wall text-white rounded-circle"><i class='bx bx-bus' style='color:#ffffff' ></i>
                                    </div>
                                    <h4 class="mb-0 font-weight-bold mt-3">{{ $bus }}</h4>
                                    <p class="mb-0">Total Buses</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card radius-15 mb-0 shadow-none border">
                                <div class="card-body text-center">
                                    <div class="widgets-icons mx-auto bg-success rounded-circle text-white"><i class='bx bx-message-dots' style='color:#ffffff' ></i>
                                    </div>
                                    <h4 class="mb-0 font-weight-bold mt-3">{{ $contact }}</h4>
                                    <p class="mb-0">Messages</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card radius-15 mb-0 shadow-none border">
                                <div class="card-body text-center">
                                    <div class="widgets-icons mx-auto rounded-circle bg-danger text-white"><i class='bx bx-calendar' style='color:#ffffff' ></i>
                                    </div>
                                    <h4 class="mb-0 font-weight-bold mt-3">{{ $trip }}</h4>
                                    <p class="mb-0">Total Schedules</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card radius-15 mb-0 shadow-none border">
                                <div class="card-body text-center">
                                    <div class="widgets-icons mx-auto bg-warning text-white rounded-circle"><i class='bx bx-directions' style='color:#ffffff' ></i>
                                    </div>
                                    <h4 class="mb-0 font-weight-bold mt-3">{{ $province }}</h4>
                                    <p class="mb-0">Total Provinces</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>

@endsection
