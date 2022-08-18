@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2 style="margin-top: 50px">Messages</h2>
                        </div>
                        {{-- <div class="pull-right" style="margin-top: 30px">
                            <a class="btn btn-success" href="{{ route('buses.create') }}"> Create New Bus</a>
                        </div> --}}
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
                                <th>Email</th>
                                <th>Subject</th>

                                <th>Action</th>
                            </tr>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->id }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->subject }}</td>
                                    {{-- <td>{{ $contact->message }}</td> --}}


                                    <td>
                                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">

                                            <a data-toggle="tooltip" data-placement="top" title="View" class="btn btn-info" href="{{ route('contacts.show',$contact->id) }}"><i class='bx bx-zoom-in' style='color:#ffffff'  ></i></a>

                                            {{-- <a data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary" href="{{ route('contacts.edit', $contact->id) }}"><i class='bx bxs-edit' style='color:#ffffff'></i></a> --}}

                                            @csrf
                                            @method('DELETE')

                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-danger btn-flat show-alert-delete-box " data-toggle="tooltip" title='Delete'><i class='bx bx-trash' style='color:#ffffff' ></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                        {!! $contacts->links() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
