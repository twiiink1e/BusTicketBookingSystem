@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h3 style="margin-top: 50px">Admin / Booking</h3>
                        </div>
                        <div class="float-end" style="margin-top: -30px;">
                            <a class="btn btn-success" href="{{ route('bookings.export') }}" style=" margin-right: 5px"> Export Excel</a>

                            <a class="btn btn-info" href="{{ route('bookings.create') }}"> Create New Booking</a>
                        </div><br>
                        <div class="" style="margin-top: -15px"> Date: <span id="time"> </span></div>
                    </div>
                </div><br />
                

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <br />

                <div class="card radius-15 w-100">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm">
                                {{-- <input class="form-control" id="myInput" type="text" placeholder="Search.."><br /> --}}
                                <h4 style="text-decoration: underline;">Data Table</h4>
                            </div>
                            <div class="col-sm">
                                {{-- <select class="form-select" aria-label="Default select example" id="myInput">
                                    <option selected>Open this select menu</option>
                                    <option value="Booked">Booked</option>
                                    <option value="Paid">Paid</option>
                                  </select> --}}
                            </div>
                            <div class="col-sm">
                                {{-- <input class="form-control" id="myInput" type="text" placeholder="Search.."><br /> --}}
                            </div>
                            <div class="col-sm">
                                <input class="form-control" id="myInput" type="text" placeholder="Search.."><br />
                            </div>
                        </div>


                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer</th>
                                    <th>Trip</th>
                                    <th>Amount of seats</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>

                            </thead>           

                            <tbody id="myTable">
                                @foreach ($bookings as $booking)
                                    <tr>
                                        <td>{{ $booking->id }}</td>
                                        <td>{{ $booking->customer->fullname }}</td>
                                        <td>({{ $booking->trip_id }}) {{ $booking->trip->province_origin->name }} --> {{ $booking->trip->province_destination->name }} <br />
                                        {{ $booking->trip->dep_date }} | {{ $booking->trip->dep_time }}</td>
                                        <td>{{ $booking->seat }}</td>
                                        @if ($booking->status == 'PAID')
                                            <td><a href="{{ route('updateStatus', $booking->id) }}"
                                                    class="badge rounded-pill bg-success"
                                                    style="font-size:1.1em">{{ $booking->status }}</a>
                                            </td>
                                        @else
                                            <td><a href="{{ route('updateStatus', $booking->id) }}"
                                                    class="badge rounded-pill bg-warning"
                                                    style="font-size:1.1em">{{ $booking->status }}</a>
                                            </td>
                                        @endif

                                        <td>
                                            <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST">

                                                <a data-toggle="tooltip" data-placement="top" title="View"
                                                    class="btn btn-secondary"
                                                    href="{{ route('bookings.show', $booking->id) }}"><i
                                                        class='bx bx-zoom-in' style='color:#ffffff'></i></a>

                                                <a data-toggle="tooltip" data-placement="top" title="Edit"
                                                    class="btn btn-info"
                                                    href="{{ route('bookings.edit', $booking->id) }}"><i
                                                        class='bx bxs-edit' style='color:#ffffff'></i></a>


                                                @csrf
                                                @method('DELETE')

                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit"
                                                    class="btn btn-danger btn-flat show-alert-delete-box "
                                                    data-toggle="tooltip" title='Delete'><i class='bx bx-trash'
                                                        style='color:#ffffff'></i></button>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>

                        {!! $bookings->links() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var datetime = new Date();
        console.log(datetime);
        document.getElementById("time").textContent = datetime;

        function refreshTime() {
            const timeDisplay = document.getElementById("time");
            const dateString = new Date().toLocaleString();
            const formattedString = dateString.replace(", ", " - ");
            timeDisplay.textContent = formattedString;
        }
        setInterval(refreshTime, 1000);
    </script>

@endsection
