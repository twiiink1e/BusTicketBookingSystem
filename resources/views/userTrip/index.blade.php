@extends('layouts.userapp')

@section('content')
    <form action="{{ route('trip.search') }}" method="GET">
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
                    {{-- <div class="inputBx">
                        <i class='bx bxs-arrow-from-left' style="font-size: 2em; margin-top:35px;"></i>
                    </div> --}}
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
                    <div class="dateInps"></div>
                    <div class="inputBx">
                        <p>N. of Passenger</p>
                        <input type="number" id="" name="seat" min="1" max="99">
                    </div>
                    <div class="inputBx">
                        <p class="white">&nbsp;</p>
                        <input type="submit" name="search" />
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div style="margin-top: 200px; padding-bottom: 200px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="card">
                            <div class="table-responsive table--no-card m-b-30">
                                <table class="table table-borderless table-striped table-earning" style="font-size: 18px;">
                                    <thead>
                                        <tr>
                                            <th style="padding-left:30px ">Departure</th>
                                            <th>Arrival</th>
                                            <th>Bus</th>
                                            <th>A.Seat</th>
                                            <th>Price (USD)</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($trips as $trip)
                                            <tr>
                                                <td style="padding-left:30px ">{{ $trip->dep_time }}</td>
                                                <td>{{ $trip->arrival_time }}</td>
                                                <td>{{ $trip->bus->busname }}</td>
                                                <td>{{ $trip->bus->seat }}</td>
                                                <td>{{ $trip->price }}</td>

                                                <td><button type="button" class="btn btn-outline-success">Select</button>
                                                </td>

                                                @empty

                                                <td></td>
                                                <td></td>
                                                <td class="text-center">No result found</td>
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
    </div>
@endsection
