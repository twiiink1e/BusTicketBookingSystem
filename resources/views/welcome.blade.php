@extends('layouts.userapp')

@section('content')
    {{-- <div>
    <img src="./img/newcover2.jpg" alt="cover" style="width:100%; margin-top:-185px">
</div> --}}

    <div class="banner">
        <div class="bg">
            <img src="https://images.unsplash.com/photo-1583136160711-d68dbe61cf9c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                class="cover" />
            <div class="content">
                <h2>Book Your Ticket With Us</h2>
                {{-- <a href="" class="btn">Book Now</a> --}}
            </div>
            <div class="searchBox">
                <div class="inputBx">
                    <p>From</p>
                    <select class="select">
                        <option selected>Choose Origin</option>
                        <option value="#">Phnom Penh</option>
                        <option value="#">Siem Reap</option>
                        <option value="#">Kampot</option>
                        <option value="#">Kep</option>
                    </select>
                </div>
                <div class="inputBx">
                    <i class='bx bxs-arrow-from-left' style="font-size: 2em; margin-top:35px" ></i>
                </div>
                <div class="inputBx">
                    <p>To</p>
                    <select class="select">
                        <option selected>Choose destination</option>
                        <option value="#">Kampot</option>
                        <option value="#">Siem Reap</option>
                        <option value="#">Kampot</option>
                        <option value="#">Kep</option>
                    </select>
                </div>
                <div class="dateInps"></div>
                <div class="inputBx">
                    <p>Travel Date</p>
                    <input type="date" />
                </div>
                <div class="inputBx">
                    <p class="white">&nbsp;</p>
                    <input type="submit" value="Search" />
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top: 200px">
        {{-- <h1>Welcome to homepage</h1> --}}
    </div>
@endsection
