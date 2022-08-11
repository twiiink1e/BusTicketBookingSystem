@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2 style="margin-top: 50px">Customer</h2>
                        </div>
                        <div class="pull-right" style="margin-top: 50px">
                            <a class="btn btn-success" href="{{ route('customers.create') }}"> Create New Customer</a>
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
                                <th>Customer ID</th>
                                {{-- <th>User ID</th> --}}
                                <th>Full Name</th>
                                <th>Phone Number</th>
                                <th>Address</th>

                                <th>Action</th>
                            </tr>
                            @foreach ($customers as $customer)
                                <tr>
                                    <td>{{ $customer->id }}</td>
                                    {{-- <td>{{ $customer->user_id }}</td> --}}
                                    <td>{{ $customer->fullname }}</td>
                                    <td>0{{ $customer->phone }}</td>
                                    <td>{{ $customer->address }}</td>

                                    <td>
                                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST">

                                            {{-- <a class="btn btn-info" href="{{ route('buses.show',$bus->id) }}">Show</a> --}}

                                            <a data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary"
                                                href="{{ route('customers.edit', $customer->id) }}"><i class='bx bxs-edit' style='color:#ffffff'></i></a>
                                            @csrf
                                            @method('DELETE')

                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-danger btn-flat show-alert-delete-box " data-toggle="tooltip" title='Delete'><i class='bx bx-trash' style='color:#ffffff' ></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                        {!! $customers->links() !!}

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
