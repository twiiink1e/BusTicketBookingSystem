@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h3 style="margin-top: 50px">Admin / Users</h3>
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

                        <table id="myTable" class="table table-hover ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Userame</th>
                                    <th>Email</th>
                                    <th>Role</th>

                                    <th>Action</th>
                                </tr>

                            </thead>

                            <tbody >
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->type }}</td>


                                        <td>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">

                                                {{-- <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a> --}}

                                                <a data-toggle="tooltip" data-placement="top" title="Edit"
                                                    class="btn btn-sm btn-default" href="{{ route('users.edit', $user->id) }}"><i
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

                        {!! $users->links() !!}


                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
