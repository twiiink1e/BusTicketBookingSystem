@extends('layouts.dashboard')
  
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb" >
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
                <table id="buses" class="table table-bordered">
                    <tr>
                        <th style=" width:20px">ID</th>
                        <th>Name</th>
                
                        <th>Action</th>
                    </tr>
                    @foreach ($provinces as $province)
                    <tr>
                        <td>{{ $province->id }}</td>
                        <td>{{ $province->name }}</td>

                        <td>
                            <form action="{{ route('provinces.destroy',$province->id) }}" method="POST">
                
                                {{-- <a class="btn btn-info" href="{{ route('buses.show',$bus->id) }}">Show</a> --}}
                
                                {{-- <a class="btn btn-primary" href="{{ route('provinces.edit',$province->id) }}">Edit</a> --}}
                
                                @csrf
                                @method('DELETE')
                  
                                <button type="submit" class="btn btn-danger">Delete</button>
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
    @endsection


