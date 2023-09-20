@extends('frontend/layouts/based')
@section('title')
   Get Involved
@endsection


@section('content')
<section class="top-banner">
    <div class="bannerimg">
        <img src="{{ asset("img/group1.jpg") }}" alt="">
    </div>

    <div class="topaboutus">
        <h1>PRAISE JOINT ONE FOUNDATION</h1>
        <div class="linebottom"></div>
        <h4>There are so many ways to get involved with the PRAISE JOINT ONE FOUNDATION from membership and program participation to volunteering and fundraising. take the path that most interests you and connect with us today.</h4>
    </div>
   </section>

   <section class="weneed-you-involved">
   <div class="involved-info">
    <div class="we-need-you-involved-page">
        <h1>We Need You</h1>
        <p>We rely on our members, program participants, donors and volunteers to work alongside us to strengthen communities. Whether you want to mentor young people, improve family’s health and wellbeing or support communities, your involvement with PRAISE JOINT ONE FOUNDATION helps bring about positive and meaningful change.</p>
    </div>
   </div>
   </section>
<section class="getinvolved-section">
    <div class="involved-div">
        <div class="involved-content">
            <div class="involved-item">
                <img src="{{ asset("img/teaching.avif") }}" alt="Teaching">
                <h1>Teaching</h1>
                <div class="contactlink">
                    <a wire:navigate href="{{ route("contact") }}">Contact</a>
                </div>
            </div>
            <div class="involved-item">
                <img src="{{ asset("img/health1.avif") }}" alt="Health">
                <h1>Health</h1>
                <div class="contactlink">
                    <a wire:navigate href="{{ route("contact") }}">Contact</a>
                </div>
            </div>
            <div class="involved-item">
                <img src="{{ asset("img/gift.avif") }}" alt="Gift">
                <h1>Sharing Gift</h1>
                <div class="contactlink">
                    <a wire:navigate href="{{ route("contact") }}">Contact</a>
                </div>
            </div>

            <div class="involved-item">
                <img src="{{ asset("img/partner.avif") }}" alt="Partinership">
                <h1>Partiner with us</h1>
                <div class="contactlink">
                    <a wire:navigate href="">Contact</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


{{-- https://www.ymca.org/ --}}
