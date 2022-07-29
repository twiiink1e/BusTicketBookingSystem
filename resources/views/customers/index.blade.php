@extends('layouts.adminapp')
  
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12" style="margin-left:300px">
                <div class="row">
                    <div class="col-lg-12 margin-tb" >
                        <div class="pull-left">
                            <h2 style="margin-top: 10px">Customer</h2>
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
                <table id="customers" class="table table-bordered">
                    <tr>
                        <th style=" width:20px">Customer ID</th>                        
                        <th>User ID</th>
                        <th>Full Name</th>
                        <th>Phone Number (+855)</th>
                        <th>Address</th>
                
                        <th>Action</th>
                    </tr>
                    @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->user_id }}</td>
                        <td>{{ $customer->fullname }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->address }}</td>
                
                        <td>
                            <form action="{{ route('trips.destroy',$customer->id) }}" method="POST">
                
                                {{-- <a class="btn btn-info" href="{{ route('buses.show',$bus->id) }}">Show</a> --}}
                
                                <a class="btn btn-primary" href="{{ route('trips.edit',$customer->id) }}">Edit</a>
                
                                @csrf
                                @method('DELETE')
                  
                                <button type="submit" class="btn btn-danger">Delete</button>
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
    @endsection


