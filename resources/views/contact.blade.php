@extends('layouts.userapp')

@section('content')
<div class="loader" style="margin-top:0px">
    <div class="loader-content">
        <img src="{{ asset('assets/images/loading.gif') }}" alt="Loader" class="loader-loader" />
    </div>
</div>
    <div>
        <section class="contact_us">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="contact_inner">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="contact_form_inner">
                                        <div class="contact_field">

                                            <h3>Contact Us</h3>
                                            <p>Feel Free to contact us any time. We will get back to you as soon as we
                                                can.</p>

                                                @if ($message = Session::get('success'))
                                                <div class="alert alert-success">
                                                    <p>{{ $message }}</p>
                                                </div>
                                                @endif

                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <strong>Whoops!</strong> There were some problems with your
                                                    input.<br><br>
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            <form class="" action="{{ route('contactus.store') }}" method="POST">
                                                @csrf
                                                <input type="text" name="name" class="form-control form-group"
                                                    placeholder="Name" />
                                                <input type="email" name="email" class="form-control form-group"
                                                    placeholder="Email" />
                                                <input type="text" name="subject" class="form-control form-group"
                                                    placeholder="Subject" />
                                                <textarea class="form-control form-group" name="message" placeholder="Message"></textarea>
                                                <button type="submit" id="btn"
                                                    class="contact_form_submit">Send</button>

                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_info_sec">
                                <h4>Contact Info</h4>
                                <div class="d-flex info_single align-items-center">
                                    <i class='bx bxs-phone-call'></i>
                                    <span>+855 12 123 456</span>
                                </div>
                                <div class="d-flex info_single align-items-center">
                                    <i class='bx bx-envelope'></i>
                                    <span>bbus@gmail.com</span>
                                </div>
                                <div class="d-flex info_single align-items-center">
                                    <i class='bx bx-map'></i>
                                    <span>#123, St 123, Toul Tompong, Phnom Penh, Cambodia</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <button type="button" onclick="testAjax()">Test Ajax</button> --}}
        </section>
    </div>
    
    <script>
        window.onload = function() {
            setTimeout(function() {
                var loader = document.getElementsByClassName("loader")[0];
                loader.className = "loader fadeout";
                setTimeout(function() {
                    loader.style.display = "none"
                }, 1000)
            }, 500)
        }
    </script>
@endsection
