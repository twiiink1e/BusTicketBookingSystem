@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h3 style="margin-top: 50px">Admin / Messages</h3>
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

                        <div class="row">
                            <div class="col-sm">
                                {{-- <input class="form-control" id="myInput" type="text" placeholder="Search.."><br /> --}}
                                <h4 style="text-decoration: underline;">Data Table</h4>
                            </div>
                            <div class="col-sm">

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
                                    <th>Email</th>
                                    <th>Subject</th>

                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody id="myTable">
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->subject }}</td>
                                        


                                        <td>
                                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">

                                                <a data-toggle="tooltip" data-placement="top" title="View"
                                                    class="btn btn-sm btn-default"
                                                    href="{{ route('contacts.show', $contact->id) }}"><i
                                                        class='bx bx-zoom-in' style='color:#666666'></i></a>

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

                        {!! $contacts->links() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
