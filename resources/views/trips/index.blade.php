@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2 style="margin-top: 50px">Trip Schedule</h2>
                        </div>
                        <div class="pull-right" style="margin-top: 30px">
                            <a class="btn btn-success" href="{{ route('trips.create') }}"> Create New Schedule</a>
                        </div>
                        <div class="float-end" style="margin-top: -25px"> Date: <span id="time"> </span></div>
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

                        <table id="" class="table table-bordered table-hover ">
                            <tr>
                                <th>ID</th>
                                <th>Origin</th>
                                <th>Destination</th>
                                <th>Departure Date</th>
                                <th>Departure Time</th>
                                <th>Arrival Time</th>
                                <th>Bus Name</th>
                                <th>Available Seat</th>
                                <th>Price (USD)</th>

                                <th>Action</th>
                            </tr>
                            @foreach ($trips as $trip)
                                <tr>
                                    <td>{{ $trip->id }}</td>
                                    <td>{{ $trip->province_origin->name }}</td>
                                    <td>{{ $trip->province_destination->name}}</td>
                                    <td>{{ $trip->dep_date }}</td>
                                    <td>{{ $trip->dep_time }}</td>
                                    <td>{{ $trip->arrival_time }}</td>
                                    <td>{{ $trip->bus->busname }}</td>
                                    <td>{{ $trip->bus->seat }}</td>
                                    <td>{{ $trip->price }}</td>

                                    <td>
                                        <form action="{{ route('trips.destroy', $trip->id) }}" method="POST">

                                            <a data-toggle="tooltip" data-placement="top" title="View"
                                            class="btn btn-info" href="{{ route('trips.show', $trip ->id) }}"><i
                                                class='bx bx-zoom-in' style='color:#ffffff'></i></a>

                                            <a data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary" href="{{ route('trips.edit', $trip->id) }}"><i class='bx bxs-edit' style='color:#ffffff'></i></a>


                                            @csrf
                                            @method('DELETE')

                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-danger btn-flat show-alert-delete-box " data-toggle="tooltip" title='Delete'><i class='bx bx-trash' style='color:#ffffff' ></i></button>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                        {!! $trips->links() !!}

                    </div>
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
