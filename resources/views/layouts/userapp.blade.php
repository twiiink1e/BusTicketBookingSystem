<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from codervent.com/syndash/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jul 2022 15:23:39 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>B-Bus</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/png" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!--plugins-->
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Ubuntu:wght@300&display=swap" rel="stylesheet">


    <link href="{{ asset('/css/home.css') }}" rel="stylesheet">

</head>

<body>
    <div class="navi">
        <div class="navi-header">
            <a href="/">
                <img src="./img/newlogo.png" alt="" style="width:60px">
            </a>
        </div>

        <div class="navi-links">
            <a href="/" target=" ">HOME</a>
            <a href="#" target=" ">TRIP</a>
            <a href="/contact" target=" ">CONTACT US</a>
        </div>

        <div class="navi-links-2">
            <a href="/login" target=" ">Log in</a>
            <a href="/register" target=" ">Register</a>
        </div>
    </div>

    <div class="page-wrapper">
        <!--page-content-wrapper-->
        <div class="page-content-wrapper">
            @yield('content')
        </div>
        <!--end page-content-wrapper-->
    </div>

    <div class="mt-5 pt-5 pb-5 footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xs-12 about-company">
                    <h2>B-BUS</h2>
                    <p class="pr-5 text-white-50">B-Bus is a online ticket booking website with a alot of features.</p>
                    <p class="pr-5 text-white-50">Book your ticket with us.</p>
                    <p><a href="#"><i class='bx bxl-facebook-circle' ></i></a><a href="#"><i
                                class="fa fa-linkedin-square"></i></a></p>
                </div>

                <div class="col-lg-4 col-xs-12 location">
                    <h4 class="mt-lg-0 mt-sm-4">Location</h4>
                    <p class="mb-0"><i class='bx bx-map' ></i>#123, St 123, Toul Tompong, Phnom Penh</p>
                    <br />
                    <p class="mb-0"><i class='bx bxs-phone-call' ></i>(+855) 12-123-456</p>
                    <br />
                    <p><i class='bx bx-envelope' ></i>bbus@gmail.com</p>
                </div>

                <div class="col-lg-3 col-xs-12 links">
                    <h4 class="mt-lg-0 mt-sm-3">Links</h4>
                    <ul class="m-0 p-0">
                        <li><a href="/">Home</a></li>
                        <li><a href="#">Trips</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                        <li><a href="#">Privacy & Policy</a></li>
                    </ul>
                </div>

            </div>
            <div class="row mt-5">
                <div class="col copyright">
                    <p class=""><small class="text-white-50">© 2022. All Rights Reserved.</small></p>
                </div>
            </div>
        </div>
    </div>
</body>
