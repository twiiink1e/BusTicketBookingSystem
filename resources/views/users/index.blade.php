@extends('layouts.dashboard')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2 style="margin-top: 50px">User</h2>
                        </div>
                        {{-- <div class="pull-right" style="margin-top: 50px">
                            <a class="btn btn-success" href="{{ route('schedules.create') }}"> Create New User</a>
                        </div> --}}
                    </div>
                </div><br />
                
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                
                <br />
                <table id="users" class="table table-striped">
                    <tr>
                        <th style=" width:20px">ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                
                        <th>Action</th>
                    </tr>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->type }}</td>
                
                
                        <td>
                            <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                
                                {{-- <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a> --}}
                
                                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                
                                @csrf
                                @method('DELETE')
                  
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                
                {!! $users->links() !!}
                </div>
            </div>
        </div>
    </div>
    @endsection


