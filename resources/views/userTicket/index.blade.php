@extends('layouts.userapp')

@section('content')
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
                    <p class="event">Bus Ticket</p>
                    <h2 class="title">{{ $booking->trip->province_origin->name }} ->
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
                        <p>Number of seat: {{ $booking->seat }}
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
@endsection
