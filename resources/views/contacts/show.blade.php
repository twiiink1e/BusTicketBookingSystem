@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="pull-left">
                        <h2 style="margin-top: 50px"> Show Meesage</h2>
                    </div>
                </div><br />

                <div class="card radius-15 w-100 p-3">
                    <div class="card-body" style="font-size: 18px">

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    {{ $contact->name }}
                                </div>
                                <hr>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="form-group" >
                                    <strong>Email:</strong>
                                    {{ $contact->email }}
                                </div>
                                <hr>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="form-group" >
                                    <strong>Subject:</strong>
                                    {{ $contact->subject }}
                                </div>
                                <hr>

                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="form-group" >
                                    <strong>Message:</strong>
                                    {{ $contact->message }}
                                </div>
                                <hr>

                            </div>
                            <br>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('contacts.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
