@extends('frontend/layouts/based')
@section('title')
    Home page
@endsection


@section('content')
<section class="top-banner">
    <div class="bannerimg">
        <img src="{{ asset('img/bg1.jpg') }}" alt="">
    </div>

    <div class="topaboutus">
        <h1>Welcome to PRAISE JOINT ONE FOUNDATION</h1>
        <div class="linebottom"></div>
        <h1 class="vissionh1">OUR VISION</h1>
        <h2>Helping the needy and less privileged children in society, empowering children
            and the youth for an independent financial life through education, skills
            acquisition and creative arts</h2>
            <a href="" class="get-intouchlink">Get in touch with us</a>
    </div>
   </section>

   {{-- about us video section --}}
<section class="aboutus-video">
<div class="video-index-section">
    <div class="video-content">
        <div class="video-div">
            <iframe width="853" height="480"
            id="youtube-player"
            src="https://www.youtube.com/embed/qvtdAwEJ-ps" title="Baba-Ahmed, LP VP Candidate’s Brother, Joins Tinubu Government, Appointed As Special Adviser" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="clippathdiv" style="background-image: url({{ asset("img/bg3.avif") }})"></div>
            <div class="clippathdiv2" style="background-image: url({{ asset("img/bg2.jpg") }})"></div>
            <div class="playvideo" id="play-button"><i class="fa-solid fa-play"></i></div>
            <div class="pausevideo"><i class="fa-regular fa-circle-pause"></i></div>
        </div>
        <div class="changing-life">
            <h1>“The true self blooms only when we find our purpose.”</h1>
            <p>Watch how people of all ages and all walks of life are finding their </p>
            <a href="" class="changelife-link">Know more</a>
        </div>
    </div>
</div>
</section>


{{-- what we do section --}}

<section class="what-we-do-section">
    <div class="whatwedo-div">
        <div class="what-we-do-content">
            <div class="whatwedotextdiv">
                <div class="whatwedoh1div">
                    <h1>What we do</h1>
                    <div class="linebottom"></div>
                </div>

                <div class="whatwedop">
                    <p>Our programs and services are focused on our primary areas of impact that help people achieve their goals and strengthen communities. With our breadth of offerings, you can find the support you need and help your neighborhood thrive.</p>
                </div>
            </div>
            <div class="comming-event">
                <div class="event-content">
                    <h1 class="upcomingh1">Up Comming Event</h1>
                   <div class="events-container">
                    <div class="event-img-content">
                        <div class="event-img">
                            <img src="{{ asset("img/2014-06-25_AOF_12406_RGB.jpg") }}" alt="">
                        </div>
                        <div class="event-info">
                            <div class="event-date">
                            <div class="date">
                               <h1> 1/02/1013</h1>
                            </div>
                            <div class="date">
                                <h1>10:50pm</h1>
                             </div>

                        </div>
                        <div class="location">
                            <p>Location:Accra</p>
                           <div class="eventlink">
                              <a href="">Know More</a>
                           </div>
                        </div>
                        </div>
                    </div>

                    <div class="event-img-content">
                        <div class="event-img">
                            <img src="{{ asset("img/2014-06-25_AOF_12406_RGB.jpg") }}" alt="">
                        </div>
                        <div class="event-info">
                            <div class="event-date">
                            <div class="date">
                               <h1> 1/02/1013</h1>
                            </div>
                            <div class="date">
                                <h1>10:50pm</h1>
                             </div>

                        </div>
                        <div class="location">
                            <p>Location:Accra</p>
                           <div class="eventlink">
                              <a href="">Know More</a>
                           </div>
                        </div>
                        </div>
                    </div>


                    <div class="event-img-content">
                        <div class="event-img">
                            <img src="{{ asset("img/2014-06-25_AOF_12406_RGB.jpg") }}" alt="">
                        </div>
                        <div class="event-info">
                            <div class="event-date">
                            <div class="date">
                               <h1> 1/02/1013</h1>
                            </div>
                            <div class="date">
                                <h1>10:50pm</h1>
                             </div>

                        </div>
                        <div class="location">
                            <p>Location:Accra</p>
                           <div class="eventlink">
                              <a href="">Know More</a>
                           </div>
                        </div>
                        </div>
                    </div>

                    <div class="event-img-content">
                        <div class="event-img">
                            <img src="{{ asset("img/2014-06-25_AOF_12406_RGB.jpg") }}" alt="">
                        </div>
                        <div class="event-info">
                            <div class="event-date">
                            <div class="date">
                               <h1> 1/02/1013</h1>
                            </div>
                            <div class="date">
                                <h1>10:50pm</h1>
                             </div>

                        </div>
                        <div class="location">
                            <p>Location:Accra</p>
                           <div class="eventlink">
                              <a href="">Know More</a>
                           </div>
                        </div>
                        </div>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mission-section">
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


<section class="sponsors-section">
    <div class="sponsor-div">
        <h1 class="sponsorsh1">Our Sponsors</h1>
        <div class="owl-carousel">
            <div class="slider-content">
            <img src="{{ asset("img/2014-06-25_AOF_12406_RGB.jpg") }}" alt="">
            <div class="div-company">
                <h4>Managing director</h4>
                <a href="">Visit site</a>
            </div>
            </div>
            <div class="slider-content">
            <img src="{{ asset("img/bg2.jpg") }}" alt="">
            <div class="div-company">
                <h4>Managing director</h4>
                <a href="">Visit site</a>
            </div>
            </div>
            <div class="slider-content">
            <img src="{{ asset("img/2014-06-25_AOF_12406_RGB.jpg") }}" alt="">
            <div class="div-company">
                <h4>Managing director</h4>
                <a href="">Visit site</a>
            </div>
            </div>
            <div class="slider-content">
            <img src="{{ asset("img/2014-06-25_AOF_12406_RGB.jpg") }}" alt="">
            <div class="div-company">
                <h4>Managing director</h4>
                <a href="">Visit site</a>
            </div>
            </div>
            <div class="slider-content">
            <img src="{{ asset("img/2014-06-25_AOF_12406_RGB.jpg") }}" alt="">
            <div class="div-company">
                <h4>Managing director</h4>
                <a href="">Visit site</a>
            </div>
            </div>
            <div class="slider-content">
            <img src="{{ asset("img/2014-06-25_AOF_12406_RGB.jpg") }}" alt="">
            <div class="div-company">
                <h4>Managing director</h4>
                <a href="">Visit site</a>
            </div>
            </div>
            <div class="slider-content">
            <img src="{{ asset("img/2014-06-25_AOF_12406_RGB.jpg") }}" alt="">
            <div class="div-company">
                <h4>Managing director</h4>
                <a href="">Visit site</a>
            </div>
            </div>
          </div>
    </div>
</section>


@endsection


{{-- https://www.ymca.org/ --}}
