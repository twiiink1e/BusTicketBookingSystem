<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>B-Bus</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/newlogo.png') }}" type="image/png" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!--plugins-->
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    {{-- <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" /> --}}
    <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" /> --}}

    {{-- <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet"> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet"> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link href="{{ asset('/css/home.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/ticket.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/profile.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/contact.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/schedule.css') }}" rel="stylesheet">


</head>

<body>
    <div class="navi">
        <div class="navi-header">
            <a href="/">
                <img src="./img/newlogo.png" alt="" style="width:60px">
            </a>
        </div>

        {{-- <a href="/login">
            <i class='bx bx-user-circle' style='color:#ffffff'  ></i>
        </a> --}}

        <div class="navi-links">
            <a href="/" target=" ">HOME</a>
            <a href="/schedule" target=" ">SCHEDULE</a>
            <a href="/contact" target=" ">CONTACT US</a>
        </div>

        <div class="navi-links-2">

            <ul class="navbar-nav ms-auto">

                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <a href="/login">
                            <i class='bx bx-log-in' style='color:#ffffff'></i>
                        </a>
                        <li class="nav-link">
                            <a style="color: white; margin-right: 15px;margin-top:-3px;" class="nav-link"
                                href="{{ route('login') }}">LOG IN &emsp;&ensp; REGISTER</a>
                        </li>
                    @endif

                    {{-- @if (Route::has('register'))
                        <li class="nav-link">
                            <a style="color: white; margin-right: 100px" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif --}}
                @else
                    <a href="/useredit">
                        <i class='bx bx-user-circle' style='color:#ffffff;'></i>
                    </a>

                    <li class="nav-item dropdown">
                        <a style="color: white" id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href=" /useredit"><i class='bx bx-edit'></i> Edit Profile</a>
                            <a class="dropdown-item" href=" /change-password"><i class='bx bx-lock-open-alt'></i> Change
                                Password</a>
                            <a class="dropdown-item" href="/mytickets"><i class='bx bx-purchase-tag-alt'></i> My Ticket</a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                <i class='bx bx-log-out'></i> {{ __(' Log Out') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>
                    </li>
                @endguest
            </ul>
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
                    <p><a href="#"><i class='bx bxl-facebook-circle'
                                style='color:#ffffff; font-size:35px'></i></a>
                        <a href="#"><i class='bx bxl-instagram' style='color:#fff; font-size:35px'></i></a>
                        <a href="#"><i class='bx bxl-telegram' style='color:#fff; font-size:35px'></i></a>
                    </p>
                </div>

                <div class="col-lg-4 col-xs-12 location">
                    <h4 class="mt-lg-0 mt-sm-4">Location</h4>
                    <p class="mb-0"><i class='bx bx-map'></i>#123, St 123, Toul Tompong, Phnom Penh</p>
                    <br />
                    <p class="mb-0"><i class='bx bxs-phone-call'></i>(+855) 12-123-456</p>
                    <br />
                    <p><i class='bx bx-envelope'></i>bbus@gmail.com</p>
                </div>

                <div class="col-lg-3 col-xs-12 links">
                    <h4 class="mt-lg-0 mt-sm-3">Links</h4>
                    <ul class="m-0 p-0">
                        <li><a href="/">Home</a></li>
                        <li><a href="/schedule">Schedule</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                        <li><a href="/privacy">Privacy & Policy</a></li>
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

    <script>
        $(document).ready(function() {
            // show the alert
            $(".alert").fadeTo(1500, 500).slideUp(500, function() {
                $(".alert").alert('close');
            });
        });
    </script>


</body>
