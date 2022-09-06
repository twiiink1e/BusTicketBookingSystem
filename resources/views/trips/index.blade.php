@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h3 style="margin-top: 50px">Admin / Trip Schedule</h3>
                        </div>
                        <div class="float-end" style="margin-top: -30px">
                            <a class="btn btn-success" href="{{ route('trips.export') }}" style=" margin-right: 5px"> Export Excel</a>

                            <a class="btn btn-info" href="{{ route('trips.create') }}"> Create New Schedule</a>
                        </div><br />
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
                                    <th>Origin</th>
                                    <th>Destination</th>
                                    <th>Depart Date</th>
                                    <th>Depart Time</th>
                                    <th>Arrival Time</th>
                                    <th>Bus Name</th>
                                    <th>A. Seat</th>
                                    <th>Price ($)</th>

                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody id="myTable">

                                @foreach ($trips as $trip)
                                    <tr>
                                        <td>{{ $trip->id }}</td>
                                        <td>{{ $trip->province_origin->name }}</td>
                                        <td>{{ $trip->province_destination->name }}</td>
                                        <td>{{ $trip->dep_date }}</td>
                                        <td>{{ $trip->dep_time }}</td>
                                        <td>{{ $trip->arrival_time }}</td>
                                        <td>{{ $trip->bus->busname }}</td>
                                        <td>{{ $trip->available }}</td>
                                        <td>{{ $trip->price }}</td>

                                        <td>
                                            <form action="{{ route('trips.destroy', $trip->id) }}" method="POST">

                                                <a data-toggle="tooltip" data-placement="top" title="View"
                                                    class="btn btn-sm btn-default"
                                                    href="{{ route('trips.show', $trip->id) }}"><i class='bx bx-zoom-in'
                                                        style='color:#666666'></i></a>

                                                <a data-toggle="tooltip" data-placement="top" title="Edit"
                                                    class="btn btn-sm btn-default" href="{{ route('trips.edit', $trip->id) }}"><i
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
