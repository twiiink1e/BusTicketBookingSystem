@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2 style="margin-top: 50px">Routes</h2>
                        </div>
                        <div class="pull-right" style="margin-top: 30px">
                            <a class="btn btn-success" href="{{ route('roads.create') }}"> Create New Route</a>
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

                        <table id="buses" class="table table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Origin</th>
                                <th>Destination</th>

                                <th>Action</th>
                            </tr>
                            @foreach ($roads as $road)
                                <tr>
                                    <td>{{ $road->id }}</td>
                                    <td>{{ $road->province->name }}</td>
                                    <td>{{ $road->province->name }}</td>


                                    <td>
                                        <form action="{{ route('roads.destroy', $road->id) }}" method="POST">

                                            {{-- <a class="btn btn-info" href="{{ route('buses.show',$bus->id) }}">Show</a> --}}

                                            <a data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary" href="{{ route('roads.edit', $road->id) }}"><i class='bx bxs-edit' style='color:#ffffff'></i></a>


                                            @csrf
                                            @method('DELETE')

                                            <button data-toggle="tooltip" data-placement="top" title="Delete" type="submit" class="btn btn-danger"><i class='bx bx-trash' style='color:#ffffff' ></i></button>

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
@endsection
