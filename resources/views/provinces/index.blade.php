@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h3 style="margin-top: 50px">Admin / Provinces</h3>
                        </div>
                        <div class="float-end" style="margin-top: -40px">
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

                        <table id="" class="table table-hover ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>

                                    <th>Action</th>
                                </tr>

                            </thead>

                            <tbody id="myTable">
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
                                                <button type="submit"
                                                    class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm"
                                                    data-toggle="tooltip" title='Delete'><i class='bx bx-trash'
                                                        style='color:#ffffff'></i></button>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                        {!! $provinces->links() !!}

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
