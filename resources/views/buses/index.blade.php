@extends('layouts.adminapp')
  
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2 style="margin-top: 10px">Buses</h2>
                        </div>
                        <div class="pull-right" style="margin-top: 50px">
                            <a class="btn btn-success" href="{{ route('buses.create') }}"> Create New Bus</a>
                        </div>
                    </div>
                </div><br />
                
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                
                <br />
                <table id="buses" class="table table-bordered">
                    <tr>
                        <th style=" width:20px">ID</th>
                        <th>Bus Name</th>
                        <th>Driver</th>
                        <th>Plate Number</th>
                        <th>Available Seat</th>
                
                        <th>Action</th>
                    </tr>
                    @foreach ($buses as $bus)
                    <tr>
                        <td>{{ $bus->id }}</td>
                        <td>{{ $bus->busname }}</td>
                        <td>{{ $bus->driver }}</td>
                        <td>{{ $bus->plate }}</td>
                        <td>{{ $bus->seat }}</td>

                
                
                        <td>
                            <form action="{{ route('buses.destroy',$bus->id) }}" method="POST">
                
                                {{-- <a class="btn btn-info" href="{{ route('buses.show',$bus->id) }}">Show</a> --}}
                
                                <a class="btn btn-primary" href="{{ route('buses.edit',$bus->id) }}">Edit</a>
                
                                @csrf
                                @method('DELETE')
                  
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                
                    {!! $buses->links() !!}

                   
                </div>
            </div>
        </div>
    </div>
    @endsection


