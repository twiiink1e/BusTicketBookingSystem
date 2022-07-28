<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/css/home.css" rel="stylesheet">


    <!-- Styles -->
    <style>

    </style>
</head>

<body class="antialiased">

        <div class="nav">
            <input type="checkbox" id="nav-check">
            <div class="nav-header">
                {{-- <div class="nav-title">
                    
                </div> --}}
                <a href="/">
                    <img src="./img/newlogo.png" alt="" style="width:60px">
                </a>
            </div>

            <div class="nav-links">
                <a href="#" target=" ">HOME</a>
                <a href="#" target=" ">TRIP</a>
                <a href="#" target=" ">CONTACT US</a>
            </div>

            <div class="nav-links-2">
                <a href="/login" target=" ">Log in</a>
                <a href="#" target=" ">Register</a>
            </div>
        </div>

        <h1 style="">Welcome to homepage</h1>

</body>

</html>
