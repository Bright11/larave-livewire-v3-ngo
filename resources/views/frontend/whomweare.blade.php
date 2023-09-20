@extends('frontend/layouts/based')
@section('title')
    Home page
@endsection


@section('content')
<section class="top-banner">
    <div class="bannerimg">
        <img src="{{ asset("img/group1.jpg") }}" alt="">
    </div>

    <div class="topaboutus">
        <h1>Welcome to PRAISE JOINT ONE FOUNDATION</h1>
        <div class="linebottom"></div>
        <h4>We are an organization like no other. The  PRAISE JOINT ONE FOUNDATION is a nonprofit committed in helping the needy and less privileged children in society, empowering children and the youth for an independent financial life through education, skills acquisition and creative arts.</h4>
    </div>
   </section>
   <section class="mission-section" style="margin-top: 40px">
    <div class="div-section">
        <h1 class="missionh1">Our Mission</h1>
        <div class="mission-content">
            <div>
                <p>To develop the talent of children and youth locally and internationally</p>
            </div>

            <div>
                <p>To train children for skill acquisition and creative arts</p>
            </div>

            <div>
                <p>To impact or imbibe educational knowledge for effective leadership</p>
            </div>

            <div>
                <p>Youth empowerment for independent financial life</p>
            </div>
        </div>
    </div>
</section>


<section class="value-section">
    <div class="value-div">
        <div class="value-content">
           <div class="value-text">
            <h1>Our Value</h1>
            <p>Guided by our core values of caring, honesty, respect and responsibility, the PRAISE JOINT ONE FOUNDATION is dedicated to giving people of all ages, backgrounds and walks of life the opportunity to reach their full potential with dignity.</p>
           </div>
           <div class="value-img">
            <img src="{{ asset("img/value.jpg") }}" alt="">
           </div>
        </div>
    </div>
</section>

@endsection


{{-- https://www.ymca.org/ --}}
