@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2 style="margin-top: 50px">Booking</h2>
                        </div>
                        <div class="pull-right" style="margin-top: 30px">
                            <a class="btn btn-success" href="{{ route('bookings.create') }}"> Create New Booking</a>
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
                                <th>Customer</th>
                                <th>Trip ID</th>
                                <th>Status</th>

                                <th>Action</th>
                            </tr>
                            @foreach ($bookings as $booking)
                                <tr>
                                    <td>{{ $booking->id }}</td>
                                    <td>{{ $booking->customer->fullname }}</td>
                                    <td>{{ $booking->trip_id }}</td>
                                    @if ($booking->status == 'PAID')
                                    <td><a href="{{ route('updateStatus', $booking->id)}}"
                                        class="badge rounded-pill bg-success" style="font-size:1.1em">{{ $booking->status }}</a>
                                        </td>
                                    @else 
                                        <td><a href="{{ route('updateStatus', $booking->id)}}"
                                                class="badge rounded-pill bg-warning" style="font-size:1.1em">{{ $booking->status }}</a>
                                        </td>
                                    @endif

                                        <td>
                                            <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST">

                                                <a data-toggle="tooltip" data-placement="top" title="View"
                                                    class="btn btn-info" href="{{ route('bookings.show', $booking->id) }}"><i
                                                        class='bx bx-zoom-in' style='color:#ffffff'></i></a>

                                                <a data-toggle="tooltip" data-placement="top" title="Edit"
                                                    class="btn btn-primary"
                                                    href="{{ route('bookings.edit', $booking->id) }}"><i class='bx bxs-edit'
                                                        style='color:#ffffff'></i></a>


                                                @csrf
                                                @method('DELETE')

                                                <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-danger btn-flat show-alert-delete-box " data-toggle="tooltip" title='Delete'><i class='bx bx-trash' style='color:#ffffff' ></i></button>

                                            </form>
                                        </td>
                                </tr>
                            @endforeach
                        </table>

                        {!! $bookings->links() !!}


                    </div>
                </div>

                <div>
                    <h1>Total: {{ $book }}</h1>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
