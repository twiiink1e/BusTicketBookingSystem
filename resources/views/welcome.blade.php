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
                    <i class='bx bxs-arrow-from-left' style="font-size: 2em; margin-top:35px"></i>
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
                        <div class="card">
                            <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
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
                        <div class="card">
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
                        <div class="card">
                            <a class="img-card"
                                href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                                <img
                                    src="https://inspiredbymaps.com/wp-content/uploads/5-Reasons-Why-You-Explore-FlixBus-Routes-On-Your-Next-Europe-Trip-735x490.jpeg.webp" />
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
                        <div class="card">
                            <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
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
                        <div class="card">
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
                        <div class="card">
                            <a class="img-card"
                                href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                                <img
                                    src="https://inspiredbymaps.com/wp-content/uploads/5-Reasons-Why-You-Explore-FlixBus-Routes-On-Your-Next-Europe-Trip-735x490.jpeg.webp" />
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
@endsection
