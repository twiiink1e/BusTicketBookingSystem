@extends('layouts.dashboard')
  
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12" >
                <div class="row">
                    <div class="col-lg-12 margin-tb" >
                        <div class="pull-left">
                            <h2 style="margin-top: 50px">Trips</h2>
                        </div>
                        <div class="pull-right" style="margin-top: 30px">
                            <a class="btn btn-success" href="{{ route('trips.create') }}"> Create New Trip</a>
                        </div>
                    </div>
                </div><br />
                
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                
                <br />
                <table id="buses" class="table table-striped">
                    <tr>
                        <th style=" width:20px">ID</th>
                        <th>Origin</th>
                        <th>Destination</th>
                        <th>Departure Date</th>
                        <th>Departure Time</th>
                        <th>Arrival Time</th>
                        <th>Bus Name</th>
                        <th>Price (USD)</th>
                
                        <th>Action</th>
                    </tr>
                    @foreach ($trips as $trip)
                    <tr>
                        <td>{{ $trip->id }}</td>
                        <td>{{ $trip->origin }}</td>
                        <td>{{ $trip->destination }}</td>
                        <td>{{ $trip->dep_date }}</td>
                        <td>{{ $trip->dep_time }}</td>
                        <td>{{ $trip->arrival_time }}</td>
                        <td>{{ $trip->bus->busname}}</td>
                        <td>{{ $trip->price }}</td>
                
                        <td>
                            <form action="{{ route('trips.destroy',$trip->id) }}" method="POST">
                
                                {{-- <a class="btn btn-info" href="{{ route('buses.show',$bus->id) }}">Show</a> --}}
                
                                <a class="btn btn-primary" href="{{ route('trips.edit',$trip->id) }}">Edit</a>
                
                                @csrf
                                @method('DELETE')
                  
                                <button type="submit" class="btn btn-danger">Delete</button>
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
    @endsection


