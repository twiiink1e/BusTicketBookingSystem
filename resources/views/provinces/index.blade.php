@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2 style="margin-top: 50px">Provinces</h2>
                        </div>
                        <div class="pull-right" style="margin-top: 50px">
                            <a class="btn btn-success" href="{{ route('provinces.create') }}"> Create New Province</a>
                        </div>
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
                                <th>Name</th>

                                <th>Action</th>
                            </tr>
                            @foreach ($provinces as $province)
                                <tr>
                                    <td>{{ $province->id }}</td>
                                    <td>{{ $province->name }}</td>

                                    <td>
                                        <form action="{{ route('provinces.destroy', $province->id) }}" method="POST">

                                            {{-- <a class="btn btn-info" href="{{ route('buses.show',$bus->id) }}">Show</a> --}}

                                            {{-- <a class="btn btn-primary" href="{{ route('provinces.edit',$province->id) }}">Edit</a> --}}

                                            @csrf
                                            @method('DELETE')

                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete'><i class='bx bx-trash' style='color:#ffffff' ></i></button>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                        {!! $provinces->links() !!}

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
