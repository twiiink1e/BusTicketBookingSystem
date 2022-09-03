@extends('layouts.userapp')

@section('content')

<div class="loader">
    <div class="loader-content">
        <img src="{{ asset('assets/images/loading.gif') }}" alt="Loader"
            class="loader-loader" />
    </div>
</div>

<form action="{{ route('userTicket.search') }}" method="GET">
    @csrf
<div class="banner">
    <div class="bg" style="height: 0vh;
    margin-bottom: 200px">
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
                <input type="date" name="inputDate">
            </div>

            <div class="inputBx">
                <p class="white">&nbsp;</p>
                {{-- <input type="submit" name="search" /> --}}
                <button type="submit" class="submitBtn" style="width: 180px">Search Ticket</button>

            </div>
        </div>
    </div>
</div>
</form>

<div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
      </div>
    </div>
</div>

    @forelse ($bookings as $booking)
        <div class="container"
            style="overflow: hidden; padding: 40px;   display: flex;
            justify-content: center;
            align-items: center;">
            <div class="item">
                <div class="item-right">
                    <img src="./img/logo.png" alt="">
                    <span class="up-border"></span>
                    <span class="down-border"></span>
                </div> <!-- end item-right -->

                <div class="item-left">
                    <p class="event">Ticket ID: &emsp; 000{{ $booking->id }}</p>
                    <h2 class="title">{{ $booking->trip->province_origin->name }} <i class='bx bx-right-arrow-alt' style="font-size: 17px;"></i>
                        {{ $booking->trip->province_destination->name }}</h2>

                    <div class="sce">
                        <div class="icon">
                            <i class='bx bxs-calendar'></i>
                        </div>
                        <p>{{ $booking->trip->dep_date }} </p>
                    </div>
                    <div class="fix"></div>
                    <div class="loc">
                        <div class="icon">
                            <i class='bx bxs-time'></i>
                        </div>
                        <p>Departure Time: {{ $booking->trip->dep_time }} <br /> Arrival Time:
                            {{ $booking->trip->arrival_time }} </p>
                    </div>
                    <div class="fix"></div>
                    <div class="loc">
                        <div class="icon">
                          <i class='bx bx-chair'></i>
                        </div>
                        <p>Number of Seat: {{ $booking->seat }}
                    </div>
                    <div class="fix"></div>
                    <div class="loc">
                        <div class="icon">
                          <i class='bx bxs-dollar-circle' ></i>
                        </div>
                        <p>Price: {{ $booking->trip->price }} USD x {{ $booking->seat }}
                    </div>
                    <div class="fix"></div>
                    <button class="booked">{{ $booking->status }}</button>
                </div> <!-- end item-right -->
            </div> <!-- end item -->
        </div>

    @empty

        <div class="container"
            style="overflow: hidden; padding: 150px;   display: flex;
justify-content: center;
align-items: center;">
                <img src="https://static.thenounproject.com/png/3098734-200.png" alt="">
                <h2>YOU HAVE NO TICKET.</h2>
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

@endsection
