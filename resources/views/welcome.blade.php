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
                    <i class='bx bxs-arrow-from-left' style="font-size: 2em; margin-top:35px;"></i>
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

    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="content">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="cardhome">
                            <a class="img-card" href="#">
                                <img
                                    src="https://media.blogto.com/articles/20220510-flixbus-toronto.jpg?w=2048&cmd=resize_then_crop&height=1365&quality=70" />
                            </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="#">B-Bus in Londol</a>
                                </h4>
                                <p class="">
                                    Material Design is a visual programming language made by Google. Language
                                    programming...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="cardhome">
                            <a class="img-card" href="#">
                                <img
                                    src="https://cdn-cf.cms.flixbus.com/drupal-assets/2021-10/mobile-flix-hero-q4-2021.jpg" />
                            </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="#">Green Bus</a>
                                </h4>
                                <p class="">
                                    Material Design is a visual programming language made by Google. Language
                                    programming...
                                </p>
                            </div>
                            <div class="card-read-more">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="cardhome">
                            <a class="img-card"
                                href="#">
                                <img
                                    src="https://www.isic.fi/media/1395792/flixbus_bus_alennus_2022.png" />
                            </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="#">Green Bus</a>
                                </h4>
                                <p class="">
                                    Material Design is a visual programming language made by Google. Language
                                    programming...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="content">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="cardhome">
                            <a class="img-card" href="#">
                                <img
                                    src="https://media.blogto.com/articles/20220510-flixbus-toronto.jpg?w=2048&cmd=resize_then_crop&height=1365&quality=70" />
                            </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="#">B-Bus in Londol</a>
                                </h4>
                                <p class="">
                                    Material Design is a visual programming language made by Google. Language
                                    programming...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="cardhome">
                            <a class="img-card" href="#">
                                <img
                                    src="https://cdn-cf.cms.flixbus.com/drupal-assets/2021-10/mobile-flix-hero-q4-2021.jpg" />
                            </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="#">Green Bus</a>
                                </h4>
                                <p class="">
                                    Material Design is a visual programming language made by Google. Language
                                    programming...
                                </p>
                            </div>
                            <div class="card-read-more">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="cardhome">
                            <a class="img-card"
                                href="#">
                                <img
                                    src="https://www.isic.fi/media/1395792/flixbus_bus_alennus_2022.png" />
                            </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="#">Green Bus</a>
                                </h4>
                                <p class="">
                                    Material Design is a visual programming language made by Google. Language
                                    programming...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="features">
            <div class="list-features">
                <div class="icons"><i class='bx bxs-bus-school' style='color:#344e41; font-size: 3.5em;'></i></div>
                <div class="text">
                    <h4>Good Bus</h4>
                    <p>Our trombones use the shiniest brass which is sourced locally. This will increase the longevity of
                        your purchase.</p>
                </div>
                <div class="icons">
                    <i class='bx bxs-check-shield' style='color:#344e41; font-size: 3.5em;'></i>
                </div>
                <div class="text">
                    <h4>Safety</h4>
                    <p>We make sure you recieve your trombone as soon as we have finished making it. We also provide free
                        returns if you are not satisfied.</p>
                </div>
                <div class="icons">
                    <i class='bx bxs-calendar' style='color:#344e41; font-size: 3.5em;'></i>
                </div>
                <div class="text">
                    <h4>Suitable Schedule</h4>
                    <p>For every purchase you make, we will ensure there are no damages or faults and we will check and test
                        the pitch of your instrument.</p>
                </div>
            </div>
    </section>
@endsection
