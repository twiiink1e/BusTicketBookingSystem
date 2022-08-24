<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from codervent.com/syndash/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jul 2022 15:23:39 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>B-Bus</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/newlogo.png') }}" type="image/png" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" /> --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>


    <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/auth.css') }}" rel="stylesheet">


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
            <a href="/login" target=" ">LOG IN</a>
            <a href="/register" target=" ">REGISTER</a>
            {{-- <a href="#">{{ Auth::user()->name }}</a> --}}
        </div>
    </div>

    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="form-container">
                    <div class="form-icon" style="margin-top: 85px">
                        <i class='bx bxs-user-circle'></i>
                        <span class="signup"><a href="/login">Already has an account <br />Sign In</a></span>
                    </div>
                    <form class="form-horizontal"method="POST" action="{{ route('register') }}">
                        @csrf
                        <h3 class="title">User Register</h3>
                        <h6>Username</h6>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-user"></i></span>
                            <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" id="name" placeholder="Username"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                        
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <h6>Email</h6>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                                type="email" placeholder="Email Address" required autocomplete="email" autofocus>
                        </div>

                        <h6>Password</h6>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-lock"></i></span>
                            <input class="form-control  @error('password') is-invalid @enderror" type="password" id="id_password"
                                placeholder="Password" name="password" required autocomplete="new-password">
                                <span class="input-icon2"><i class="far fa-eye" id="togglePassword"></i></span>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <h6>Confirm Password</h6>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-lock"></i></span>
                            <input class="form-control" type="password" id="con_password"
                                placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                                <span class="input-icon2"><i class="far fa-eye" id="togglePassword"></i></span>
                        </div>

                        <button class="btn signin" type="submit">Register</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#id_password');
        // const password = document.querySelector('#id_con_password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
