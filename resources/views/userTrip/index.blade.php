@extends('layouts.userapp')

@section('content')
    <div class="loader">
        <div class="loader-content">
            <img src="{{ asset('assets/images/loading.gif') }}" alt="Loader" class="loader-loader" />
        </div>
    </div>

    <form action="{{ route('userTrip.search') }}" method="GET">
        @csrf
        <div class="banner">
            <div class="bg" style="height: 0vh;">
                <div class="searchBox" style="transform: translateY(100%); width: 77%;">
                    <div class="inputBx">
                        <p>From</p>
                        <select class="select" name="origin">
                            <option selected value="">Choose Origin</option>
                            @foreach ($provinces as $province)
                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="inputBx">
                        <p>To</p>
                        <select class="select" name="destination">
                            <option selected value="">Choose destination</option>
                            @foreach ($provinces as $province)
                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="dateInps"></div>
                    <div class="inputBx">
                        <p>Travel Date</p>
                        <input type="date" name="inputDate" placeholder="Choose date">
                    </div>
                    <div class="dateInps"></div>
                    <div class="inputBx">
                        <p>Seat</p>
                        <input type="number" id="" name="seat" min="1" max="99"
                            placeholder="N. of Seat">
                    </div>
                    <div class="inputBx">
                        <p class="white">&nbsp;</p>
                        {{-- <input type="submit" name="search" /> --}}
                        <button type="submit" class="submitBtn">Search</button>

                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="blank"></div>
    <div class="blank2"></div>
    {{-- <div style="margin-top: 200px; padding-bottom: 200px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div style="border-radius: 10px">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-danger">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="card">
                            <div class="table-responsive m-b-30">
                                <table class="table table-borderless table-striped table-earning" style="font-size: 18px;">
                                    <thead>
                                        <tr>
                                            <th>Origin</th>
                                            <th>Destination</th>
                                            <th>Dep Date</th>
                                            <th>Departure</th>
                                            <th>Arrival</th>
                                            <th>A.Seat</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($trips as $trip)
                                            <tr>
                                                <td>{{ $trip->province_origin->name }}</td>
                                                <td>{{ $trip->province_destination->name }}</td>
                                                <td>{{ $trip->dep_date }}</td>
                                                <td>{{ $trip->dep_time }}</td>
                                                <td>{{ $trip->arrival_time }}</td>
                                                <td>{{ $trip->available }}</td>
                                                <td>{{ $trip->price }} $</td>

                                                <td><a href="{{ route('userTrip.create', ['id' => $trip->id]) }}">
                                                        <button type="button" class="btn btn-outline-success"
                                                            id="btn">Select</button>
                                                    </a>
                                                </td>

                                            @empty

                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>No Result Found</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="blank3" style="margin-top: 200px"></div>

    @forelse ($trips as $trip)

    <div class="koliyaney">
        <span style="padding-left: 10px;">B-Bus</span>
        <span style="float: right; padding-right: 10px">Departure Date: {{ $trip->dep_date }}</span>
        <div class="yaney">
            <div class="yaney_top">
                <span>{{ $trip->province_origin->name }} -> {{ $trip->province_destination->name }}</span>
                <span style= "float: right">Available Seat: {{ $trip->available }}</span>
                <hr>
                <div class="row">
                    <div class="col-10">
                        <div class="row">
                            <div class="col-6 col-md-4 text-center">
                                <div class="place">
                                    <p>{{ $trip->province_origin->name }}</p>
                                </div>
                                <div class="time">
                                    <p>{{ $trip->dep_time }}</p> 
                                </div>
                            </div>
                            <div class="col-6 col-md-3 text-center" style="margin-top: 20px">------------<i class='fas fa-shuttle-van' style="font-size: 25px; margin-top:10px"></i> -----------></div>
                            <div class="col-6 col-md-4 text-center">
                                <div class="place">
                                    <p>{{ $trip->province_destination->name }}</p>
                                </div>
                                <div class="time">
                                    <p>{{ $trip->arrival_time }}</p> 
                                </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-2">
                        <div class="price">
                            {{ $trip->price }}$
                        </div>
                        <a href="{{ route('userTrip.create', ['id' => $trip->id]) }}">
                            <button type="button" class="selectBtn"
                                id="btn">Select</button>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @empty
    
    <div class="container" style="padding: 100px">
        <div class="row justify-content-lg-center">
          <div class="col-lg-auto">
            <img src="{{ asset('assets/images/noresult.png') }}" alt="">
          </div>
        </div>
    </div>
    @endforelse



    <script>
        window.onload = function() {
            setTimeout(function() {
                var loader = document.getElementsByClassName("loader")[0];
                loader.className = "loader fadeout";
                setTimeout(function() {
                    loader.style.display = "none"
                }, 1000)
            }, 500)
        }
    </script>

    <script>
        $(document).ready(function() {
            // show the alert
            $(".alert").fadeTo(2500, 500).slideUp(500, function() {
                $(".alert").alert('close');
            });
        });
    </script>
@endsection
