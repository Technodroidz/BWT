@extends('web.welcome')

@section('title','Events')
@section('content')

<div class="row ">
    <div class="col-xl-12">
        <ul id="tabs" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#amazontv" class="amazon active" role="tab" data-toggle="tab"><img src="{{asset('assets/img/amazon-t.png')}}"></a></li>
            <li role="presentation"><a href="#appletv" role="tab" class="apple" data-toggle="tab"><img src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png"></a></li>
            <li role="presentation"><a href="#googletv" role="tab" class="google" data-toggle="tab"><img src="https://tv.google//static/images/logos/gtv.svg"> </a></li>
            <li role="presentation"><a href="#roku" role="tab" class="roku" data-toggle="tab"><img src="https://vidapp.com/wp-content/uploads/2019/06/RokuTVLogo.png">  </a></li>
        </ul>
    </div>
    <div class="col-md-12 text-right form-group">
            <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
</div>
<div class="wrap-height top30" id="evnt">
    <div class="row">
       <div class="col-xl-12">
          <!-- bg3 -->
          <div class="row form-group">
             <div class="col-xl-7 col-xs-12 text-center">
                <img src="{{asset('assets/img/events1.png')}}" class="img-responsive eventImg">
             </div>
             <div class="col-xl-5 col-xs-12 text-center">
                <div class="content_box">
                  <h3>WE ARE ACCEPTING AUDITION VIDEOS FOR OUR STATE & NATIONAL COMPETITIONS.</h3>
                  <p class="dateFormat">Friday, December 31, 2020</p>
                  <!--<p>-->
                  <!--    Catch fireworks and enjoy and watch a one-of-akind-->
                  <!--    virtual festival to welcome in the New Year-->
                  <!--    2021.-->
                  <!--</p>-->
                  <a href="javascript:void(0);" class="readMore">More Details</a>
                </div>
                <!-- <img src="assets/img/use/2.png" class="img-responsive"> -->
             </div>
          </div>
          <div class="row form-group">
             <div class="col-xl-7 col-xs-12 text-center">
                <img src="{{asset('assets/img/events2.png')}}" class="img-responsive eventImg">
             </div>
             <div class="col-xl-5 col-xs-12 text-center">
                <div class="content_box">
                  <h3>RTISTS WILL RECEIVE WAGES TO PERFORM VIA DITIGAL VIDEO
                         STREAMING ON TV NETWORK CHANNELS. </h3>
                  <p class="dateFormat">Friday, December 16, 2020</p>
                  <!--<p>-->
                  <!--    Join us for our Inaugural Virtual Performance Gala,-->
                  <!--    celebrating the inauguration of our 46th President-->
                  <!--    Elect Joe Biden and Vice-President Kamala Harris.-->
                  <!--    Additional information will be released soon.-->
                  <!--</p>-->
                  <a href="javascript:void(0);" class="readMore">More Details</a>
                </div>
                <!-- <img src="assets/img/use/2.png" class="img-responsive"> -->
             </div>
          </div>
          <!--<div class="row form-group">-->
          <!--   <div class="col-xl-7 col-xs-12 text-center">-->
          <!--      <img src="{{asset('assets/img/event3.jpg')}}" class="img-responsive eventImg">-->
          <!--   </div>-->
          <!--   <div class="col-xl-5 col-xs-12 text-center">-->
          <!--      <div class="content_box">-->
          <!--        <h3>BWT’S PERFORMANCES EVENTS</h3>-->
          <!--        <p class="dateFormat">Friday, December 31, 2020</p>-->
          <!--        <p>-->
          <!--            Join and support these amazing and talent-->
          <!--            performers. Additional information will be released-->
          <!--            soon.-->
          <!--        </p>-->
          <!--        <a href="javascript:void(0);" class="readMore">More Details</a>-->
          <!--      </div>-->
                <!-- <img src="assets/img/use/2.png" class="img-responsive"> -->
          <!--   </div>-->
          <!--</div>-->
       </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-4">
            <h5 class="ulHead"><strong>JOIN + GIVE</strong></h5>
            <ul class="list">
                <li><a href="{{ url('sponsors')}}">Advertisers</a></li>
                <li><a href="javascript:void(0);">About Us</a></li>
                <li><a href="javascript:void(0);">Become a Member</a></li>
                
                <li><a href="{{ url('community-circle')}}">Community Circle</a></li>
                <li><a href="javascript:void(0);">Current Partners</a></li>
                <li><a href="{{ url('sponsors')}}">Sponsors</a></li>
                <li><a href="{{ url('sign-up')}}">Support Performers</a></li>
                        <!--<li><a href="javascript:void(0);">California</a></li>-->
                        <!--<li><a href="javascript:void(0);">Washington</a></li>-->
                        <!--<li><a href="javascript:void(0);">Special Events</a></li>-->
                        <!--<li><a href="javascript:void(0);">Past Events</a></li>-->
                        <!--<li><a href="javascript:void(0);">Private Events</a></li>-->
            </ul>
        </div>
        <div class="col-md-4">
            <h5 class="ulHead"><strong>WATCH + LISTEN</strong></h5>
            <ul class="list">
                <li><a href="{{ url('gallery')}}">Gallery</a></li>
                <li><a href="javascript:void(0);">Audios</a></li>
                <li><a href="javascript:void(0);">Videos</a></li>
                <li><a href="{{ url('shopping')}}">Informercials</a></li>
                <li><a href="{{ url('events')}}">Tv Events</a></li>
                <li><a href="{{ url('bwt-store')}}">Boutique Store</a></li>
            </ul>
        </div>
        <div class="col-md-4 col-xs-12 form-group">
            <h5 class="ulHead"><strong>SCHEDULE OF EVENTS</strong></h5>
            <ul class="list">
                <li><a href="{{ url('upcoming-event')}}">Upcoming Events</a></li>
                <!--<li><a href="http://bwt.tec24.in/calender">Special Events</a></li>-->
                <li><a href="{{ url('special-event')}}">Special Events</a></li>
                <!--<li><a href="http://bwt.tec24.in/calender">Past Events</a></li>-->
                <li><a href="{{ url('past-event')}}">Past Events</a></li>
                <!--<li><a href="http://bwt.tec24.in/calender">Private Events</a></li>-->
                <li><a href="{{ url('private-event')}}">Private Events</a></li>
            </ul>
              <!--<div class="card">-->
              <!--  <div class="card-body p-0">-->
              <!--    <div id="calendar"></div>-->
              <!--  </div>-->
              <!--</div>-->
        </div>
                <!--<div class="col-md-4">-->
                <!--    <h5 class="ulHead"><strong>WATCH + LISTEN</strong></h5>-->
                <!--    <ul class="list">-->
                <!--        <li><a href="javascript:void(0);">Browse & Explore</a></li>-->
                <!--        <li><a href="javascript:void(0);">All Audio</a></li>-->
                <!--        <li><a href="javascript:void(0);">All Video</a></li>-->
                <!--        <li><a href="javascript:void(0);">Radio</a></li>-->
                <!--        <li><a href="javascript:void(0);">TV Schedule</a></li>-->
                <!--        <li><a href="javascript:void(0);">Galleria online</a></li>-->
                <!--    </ul>-->
                <!--</div>-->
    </div>
 </div>
@endsection
