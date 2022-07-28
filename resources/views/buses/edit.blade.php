@extends('layouts.adminapp')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row">

                    <div class="pull-left">
                        <h2 style="margin-top: 50px">Edit Trip</h2><br />
                    </div>


                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
              
                <form action="{{ route('buses.update',$bus->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Bus Name:</strong>
                            <input type="text" name="busname" class="form-control" value="{{ $bus->busname }}">
                        </div>
                    </div>
        
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <strong>Available Seat:</strong><br />
                            <select class="form-select form-select-lg mb-3" name="seat" aria-label=".form-select-lg example"
                                style="width: 300px">
                                <option selected>{{ $bus->seat }}</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-xs-8 col-sm-8 col-md-8 text-right">
                    <button type="submit" class="btn btn-primary" style="width: 300px">Submit</button>
                </div>

                </form>
            </div>
        </div>
    </div>
@endsection
