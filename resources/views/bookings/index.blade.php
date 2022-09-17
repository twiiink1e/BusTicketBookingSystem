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

                        <table class="table table-hover" id="myTable">
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

                            <tbody >
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
                                                    style="font-size:14px">{{ $booking->status }}</a>
                                            </td>
                                        @else
                                            <td><a href="{{ route('updateStatus', $booking->id) }}"
                                                    class="badge rounded-pill bg-warning"
                                                    style="font-size:14px">{{ $booking->status }}</a>
                                            </td>
                                        @endif

                                        <td>
                                            <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST">

                                                <a data-toggle="tooltip" data-placement="top" title="View"
                                                    class="btn btn-sm btn-default"
                                                    href="{{ route('bookings.show', $booking->id) }}"><i
                                                        class='bx bx-zoom-in' style='color:#666666'></i></a>

                                                <a data-toggle="tooltip" data-placement="top" title="Edit"
                                                    class="btn btn-sm btn-default"
                                                    href="{{ route('bookings.edit', $booking->id) }}"><i
                                                        class='bx bxs-edit' style='color:#666666'></i></a>


                                                @csrf
                                                @method('DELETE')

                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit"
                                                    class="btn btn-sm btn-default show-alert-delete-box "
                                                    data-toggle="tooltip" title='Delete'><i class='bx bx-trash'
                                                        style='color:#666666'></i></button>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>

                        {{-- {!! $bookings->links() !!} --}}

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
