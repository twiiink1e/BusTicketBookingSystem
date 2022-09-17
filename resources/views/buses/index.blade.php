@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h3 style="margin-top: 50px">Admin / Buses</h3>
                        </div>
                        <div class="float-end" style="margin-top: -40px">
                            <a class="btn btn-info" href="{{ route('buses.create') }}"> Create New Bus</a>
                        </div>
                    </div>
                </div><br />

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <br />
                <div class="card">
                    <div class="card-body">

                        <table id="myTable" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Bus Name</th>
                                    <th>Driver</th>
                                    <th>Plate Number</th>
                                    <th>Available Seat</th>
    
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($buses as $bus)
                                <tr>
                                    <td>{{ $bus->id }}</td>
                                    <td>{{ $bus->busname }}</td>
                                    <td>{{ $bus->driver }}</td>
                                    <td>{{ $bus->plate }}</td>
                                    <td>{{ $bus->seat }}</td>

                                    <td>
                                        <form action="{{ route('buses.destroy', $bus->id) }}" method="POST">

                                            {{-- <a class="btn btn-info" href="{{ route('buses.show',$bus->id) }}">Show</a> --}}

                                            <a data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-sm btn-default" href="{{ route('buses.edit', $bus->id) }}"><i class='bx bxs-edit' style='color:#666666'></i></a>

                                            @csrf
                                            @method('DELETE')

                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-sm btn-default show-alert-delete-box " data-toggle="tooltip" title='Delete'><i class='bx bx-trash' style='color:#666666' ></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                            
                        </table>

                        {{-- {!! $buses->links() !!} --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
