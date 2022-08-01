@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="pull-left">
                        <h2 style="margin-top: 50px"> Show Meesage</h2>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body" style="font-size: 18px">

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" style="padding-bottom: 20px">
                                    <strong>Name:</strong>
                                    {{ $contact->name }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" style="padding-bottom: 20px">
                                    <div class="form-group" >
                                    <strong>Emails:</strong>
                                    {{ $contact->email }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" style="padding-bottom: 20px">
                                    <div class="form-group" >
                                    <strong>Subject:</strong>
                                    {{ $contact->subject }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" style="padding-bottom: 20px">
                                    <div class="form-group" >
                                    <strong>Message:</strong>
                                    {{ $contact->message }}
                                </div>
                            </div>
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
