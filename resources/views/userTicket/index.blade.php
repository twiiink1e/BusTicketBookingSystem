@extends('layouts.userapp')

@section('content')

<div class="container" style="overflow: hidden; padding: 40px;   display: flex;
justify-content: center;
align-items: center;">
    <div class="item">
      <div class="item-right">
        <img src="./img/logo.png" alt="">
        <span class="up-border"></span>
        <span class="down-border"></span>
      </div> <!-- end item-right -->
      
      <div class="item-left">
        <p class="event">Bus Ticket</p>
        <h2 class="title">Phnom Penh -> Kampot</h2>
        
        <div class="sce">
          <div class="icon">
            <i class='bx bxs-calendar'></i>
          </div>
          <p>Monday 15th 2022 </p>
        </div>
        <div class="fix"></div>
        <div class="loc">
          <div class="icon">
            <i class='bx bxs-time' ></i>
          </div>
          <p>Departure Time: 11:00 AM <br/> Arrival Time: 2:00 PM</p>
        </div>
        <div class="fix"></div>
        <button class="booked">Booked</button>
      </div> <!-- end item-right -->
    </div> <!-- end item -->
   
</div>

<div class="container" style="overflow: hidden; padding: 40px;   display: flex;
justify-content: center;
align-items: center;">
    <div class="item">
      <div class="item-right">
        <img src="./img/logo.png" alt="">
        <span class="up-border"></span>
        <span class="down-border"></span>
      </div> <!-- end item-right -->
      
      <div class="item-left">
        <p class="event">Bus Ticket</p>
        <h2 class="title">Phnom Penh -> Kampot</h2>
        
        <div class="sce">
          <div class="icon">
            <i class='bx bxs-calendar'></i>
          </div>
          <p>Monday 15th 2022 </p>
        </div>
        <div class="fix"></div>
        <div class="loc">
          <div class="icon">
            <i class='bx bxs-time' ></i>
          </div>
          <p>Departure Time: 11:00 AM <br/> Arrival Time: 2:00 PM</p>
        </div>
        <div class="fix"></div>
        <button class="booked">Booked</button>
      </div> <!-- end item-right -->
    </div> <!-- end item -->
   
</div>

@endsection