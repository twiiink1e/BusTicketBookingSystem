@extends('layouts.userapp')

@section('content')

<form action="{{ route('userTrip.search') }}" method="GET">
    @csrf
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
                    <select class="select" name="origin" required>
                        <option selected value="">Choose Origin</option>
                        @foreach ($provinces as $province)
                            <option value="{{ $province->id }}">{{ $province->name }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- <div class="inputBx">
                    <i class='bx bxs-arrow-from-left' style="font-size: 1em; margin-top:35px;"></i>
                </div> --}}
                <div class="inputBx">
                    <p>To</p>
                    <select class="select" name="destination" required>
                        <option selected value="">Choose destination</option>
                        @foreach ($provinces as $province)
                            <option value="{{ $province->id }}">{{ $province->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="dateInps"></div>
                <div class="inputBx">
                    <p>Travel Date</p>
                    <input type="date" id="datePickerId" placeholder="Select Date" name="inputDate">
                </div>
                <div class="dateInps"></div>
                <div class="inputBx">
                    <p>Seat</p>
                    <input type="number" id="" placeholder="N. of Seat" name="seat" min="1" max="99">
                </div>
                
                <div class="inputBx">
                    <p class="white">&nbsp;</p>
                    {{-- <input type="submit" value="Search" /> --}}
                <button type="submit" class="submitBtn">Search</button>

                </div>
            </div>
        </div>
    </div>
</form>

    <div class="container" style="margin-top: 100px">
        <div class="blank"></div>
        <div class="row justify-content-center">
            <div class="content">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="cardhome">
                            <a class="img-card" href="#">
                                <img
                                    src="https://www.sustainable-bus.com/wp-content/uploads/2021/04/VinBus-electric-bus-is-officially-in-operation-a-turning-point.jpeg" />
                            </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="#">B-Bus at the station</a>
                                </h4>
                                <p class="">
                                    We support advance ticket booking for more than 30 bus stations in Cambodia, 
                                    connecting all provinces.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="cardhome">
                            <a class="img-card" href="#">
                                <img src="https://i.ytimg.com/vi/z5RWNJO-kOA/maxresdefault.jpg" />
                                
                            </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="#">Electric Bus</a>
                                </h4>
                                <p class="">
                                    We support advance ticket booking for more than 30 bus stations in Cambodia, 
                                    connecting all provinces.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="cardhome">
                            <a class="img-card" href="#">
                                <img
                                    src="https://vcdn1-vnexpress.vnecdn.net/2022/03/08/buyt-dien-1754-1646711655-1646-1670-2717-1646712693.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=BcxhRUmO3nI84QxwR-PJeA"/>
                            </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="#">B Bus in the city</a>
                                </h4>
                                <p class="">
                                    We support advance ticket booking for more than 30 bus stations in Cambodia, 
                                    connecting all provinces.
                                </p>
                            </div>
                            <div class="card-read-more">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" >
        <div class="row justify-content-center">
            <div class="content">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="cardhome">
                            <a class="img-card" href="#">
                                <img
                                    src="https://www.cittimagazine.co.uk/wp-content/uploads/2021/09/FirstGlasgow.jpg" />
                            </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="#">The Big Bus</a>
                                </h4>
                                <p class="">
                                    We support advance ticket booking for more than 30 bus stations in Cambodia, 
                                    connecting all provinces.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="cardhome">
                            <a class="img-card" href="#">
                                <img
                                    src="https://vietnaminsider.vn/wp-content/uploads/2021/04/VinFast-smart-electric-bus.jpeg" />
                            </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="#">B Bus in city</a>
                                </h4>
                                <p class="">
                                    We support advance ticket booking for more than 30 bus stations in Cambodia, 
                                    connecting all provinces.
                                </p>
                            </div>
                            <div class="card-read-more">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="cardhome">
                            <a class="img-card" href="#">
                                <img src="https://www.electrive.com/wp-content/uploads/2021/03/byd-adl-enviro200ev-elektrobus-electric-bus-first-bus-glasgow-schottland-scotland-2021-01-min.png" />
                            </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="#">Green Bus</a>
                                </h4>
                                <p class="">
                                    We support advance ticket booking for more than 30 bus stations in Cambodia, 
                                    connecting all provinces.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="features" style="margin-bottom: 100px">
        <div class="list-features">
            <div class="icons"><i class='bx bxs-bus-school' style='color:#344e41; font-size: 3em;'></i></div>
            <div class="text">
                <h4>Good Bus</h4>
                <p>Our company provides many modern and confortable buses for customer trip. It brings a better experience for customer.</p>
            </div>
            <div class="icons">
                <i class='bx bxs-check-shield' style='color:#344e41; font-size: 3em;'></i>
            </div>
            <div class="text">
                <h4>Safety</h4>
                <p>We make sure every customer recieve a good care from our company while they travel with B-Bus. Customer's safety is our first priority.</p>
            </div>
            <div class="icons">
                <i class='bx bxs-calendar' style='color:#344e41; font-size: 3em;'></i>
            </div>
            <div class="text">
                <h4>Suitable Schedule</h4>
                <p>B-bus tries to provide suitable schedule for customer. To make sure customers can travel with us any possilble time.</p>
            </div>
        </div>
    </section>
    
@endsection
