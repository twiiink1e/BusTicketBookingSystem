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
                                    <div class="widgets-icons mx-auto bg-primary rounded-circle text-white"><i
                                            class='bx bx-group'></i>
                                    </div>
                                    <h4 class="mb-0 font-weight-bold mt-3">{{ $customer }}</h4>
                                    <p class="mb-0">Total Customers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card radius-15 mb-0 shadow-none border">
                                <div class="card-body text-center">
                                    <div class="widgets-icons mx-auto rounded-circle bg-info text-white"><i
                                            class='bx bx-calendar-check'></i>
                                    </div>
                                    <h4 class="mb-0 font-weight-bold mt-3">{{ $booking }}</h4>
                                    <p class="mb-0">Total Bookings</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card radius-15 mb-0 shadow-none border">
                                <div class="card-body text-center">
                                    <div class="widgets-icons mx-auto bg-wall text-white rounded-circle"><i
                                            class='bx bx-bus' style='color:#ffffff'></i>
                                    </div>
                                    <h4 class="mb-0 font-weight-bold mt-3">{{ $bus }}</h4>
                                    <p class="mb-0">Total Buses</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card radius-15 mb-0 shadow-none border">
                                <div class="card-body text-center">
                                    <div class="widgets-icons mx-auto bg-success rounded-circle text-white"><i
                                            class='bx bx-message-dots' style='color:#ffffff'></i>
                                    </div>
                                    <h4 class="mb-0 font-weight-bold mt-3">{{ $contact }}</h4>
                                    <p class="mb-0">Total Messages</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card radius-15 mb-0 shadow-none border">
                                <div class="card-body text-center">
                                    <div class="widgets-icons mx-auto rounded-circle bg-danger text-white"><i
                                            class='bx bx-calendar' style='color:#ffffff'></i>
                                    </div>
                                    <h4 class="mb-0 font-weight-bold mt-3">{{ $trip }}</h4>
                                    <p class="mb-0">Total Schedules</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card radius-15 mb-0 shadow-none border">
                                <div class="card-body text-center">
                                    <div class="widgets-icons mx-auto bg-warning text-white rounded-circle"><i
                                            class='bx bx-directions' style='color:#ffffff'></i>
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

        <div class="row">
            <div class="col-12 col-lg-12 col-xl-8">
                <div class="card radius-15">
                    <div class="card-body">
                        <div class="card-title">
                            <h5 class="mb-0">Today Schedule</h5>
                        </div>
                        <hr/>
                        <table id="" class="table table-bordered table-hover ">
                            <tr>
                                <th>ID</th>
                                <th>Origin</th>
                                <th>Destination</th>
                                {{-- <th>Departure Date</th> --}}
                                <th>Departure Time</th>
                                <th>Arrival Time</th>
                                <th>Available Seat</th>

                            </tr>
                            @foreach ($todaytrips as $todaytrip)
                                <tr>
                                    <td>{{ $todaytrip->id }}</td>
                                    <td>{{ $todaytrip->province_origin->name }}</td>
                                    <td>{{ $todaytrip->province_destination->name}}</td>
                                    {{-- <td>{{ $todaytrip->dep_date }}</td> --}}
                                    <td>{{ $todaytrip->dep_time }}</td>
                                    <td>{{ $todaytrip->arrival_time }}</td>                          
                                    <td>{{ $todaytrip->available }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-12 col-xl-4">
                <div class="card radius-15">
                        <div class="card-body">
                            <div class="card-title">
                                <h5 class="mb-0">Latest Bookings</h5>
                            </div>
                            <hr/>
                        <table id="" class="table table-bordered table-hover ">
                            <tr>
                                <th>ID</th>
                                <th>Customer</th>
                                <th>Trip ID</th>
                                <th>Status</th>

                            </tr>
                            @foreach ($latestbookings as $latestbooking)
                                <tr>
                                    <td>{{ $latestbooking->id }}</td>
                                    <td>{{ $latestbooking->customer->fullname }}</td>
                                    <td>{{ $latestbooking->trip_id }}</td>
                                    @if ($latestbooking->status == 'PAID')
                                        <td><a class="badge rounded-pill bg-success" href="/admin/bookings" 
                                                style="font-size:14px">{{ $latestbooking->status }}</a>
                                        </td>
                                    @else
                                        <td><a class="badge rounded-pill bg-warning" href="/admin/bookings"
                                                style="font-size:14px">{{ $latestbooking->status }}</a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
