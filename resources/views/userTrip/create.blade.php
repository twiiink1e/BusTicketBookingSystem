@extends('layouts.userapp')

@section('content')

    <div style="padding:100px">
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <br />
                <div class="card border-top border-0 border-4">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22"></i>
                                </div>
                                <h5 class="mb-0">Customer Information</h5>
                            </div>
                            <hr>

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

                            <form action="{{ route('userTrip.store') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <select class="form-select form-select-lg" name="customer_id"
                                            aria-label=".form-select-lg example">
                                            <option value="{{ Auth::user()->customer->id }}" selected>
                                                {{ Auth::user()->customer->fullname }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Schedule</label>
                                    <div class="col-sm-9">
                                        <select class="form-select form-select-lg" name="trip_id"
                                            aria-label=".form-select-lg example">
                                            {{-- @foreach ($trips as $trip) --}}
                                            <option value="{{ $trip->id }}" {{ $trip->id }}>
                                                {{ $trip->province_origin->name }} ->
                                                {{ $trip->province_destination->name }} | {{ $trip->dep_date }} |
                                                {{ $trip->dep_time }}</option>
                                            {{-- @endforeach --}}

                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Number of Seat</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="inputEnterYourName"
                                            placeholder="Enter the amout of seat" name="seat" required>
                                    </div>
                                </div>
                                
                                <br />
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal" style="width: 150px">Book</button>
                                    </div>
                                </div>

                            <!-- The Modal -->
                              <div class="modal fade" id="myModal">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                              
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title">Confirm Booking</h4>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                              
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="row mb-3">
                                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-12">
                                                <select class="form-select form-select-lg" name="customer_id"
                                                    aria-label=".form-select-lg example" disabled>
                                                    <option value="{{ Auth::user()->customer->id }}" selected>
                                                        {{ Auth::user()->customer->fullname }}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Schedule</label>
                                            <div class="col-sm-12">
                                                <select class="form-select form-select-lg" name="trip_id"
                                                    aria-label=".form-select-lg example" disabled>

                                                    <option value="{{ $trip->id }}" {{ $trip->id }}>
                                                        {{ $trip->province_origin->name }} ->
                                                        {{ $trip->province_destination->name }} | {{ $trip->dep_date }} |
                                                        {{ $trip->dep_time }}</option>
        
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputEnterYourName" class="col-sm-6 col-form-label">Number of Seat</label>
                                            <div class="col-sm-12">
                                                <input type="number" class="form-control" id="inputEnterYourName"
                                                    placeholder="Enter the amout of seat" name="seat" value="{{ $request->seat }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                              
                                    <!-- Modal footer -->
                              
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Confirm</button>
                              
                                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    </div>
                              
                                  </div>
                                </div>
                              </div>
                            </form>       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $("#btn").click(function() {
                alert("You successfully booked a ticket!");
            });
        });
    </script>

@endsection
