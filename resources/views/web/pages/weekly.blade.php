@extends('web.welcome')

@section('title','Video')

@section('content')


<div class="wrap-height"><br/>
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
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade show active" id="amazontv">
            <div class="row">
              <div class="col-md-12 col-xs-12 form-group">
                    <!--<video width="320" height="240" controls id="video"  allowscriptaccess="always" allow="autoplay">-->
                    <!--    <source src="http://bwt.tec24.in/public/assets/img/WHO_WE_ARE.mp4">-->
                    <!--</video>-->
                <div class="embed-responsive embed-responsive-16by9">
                    
                    <iframe id="video" src="http://bwt.tec24.in/public/assets/img/weekly_per.mp4?api=1&player_id=player" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                  <!--<iframe class="embed-responsive-item" src="http://bwt.tec24.in/public/assets/img/WHO_WE_ARE.mp4?autoplay=1& muted=1" id="video" frameborder="0" allow="autoplay; fullscreen" muted allowfullscreen></iframe>-->
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-xs-12 form-group">
                <h4 class="slider_head">Weekly Performances</h4>
              </div>
              <div class="col-lg-3 col-sm-3 col-xs-12 form-group">
                <div class="card mycard" data-toggle="modal" data-target="#trial_video">
                  <a href="javascript:void(0);">
                    <div class="imglogo-div">
                      <img src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png" >
                    </div>
                    <div class="trial">
                      <p>Start free trial</p>
                      <p>7 days free, then $4.99/month</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="appletv">
            <div class="row">
              <div class="col-md-12 col-xs-12 form-group">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/58385453?badge=0" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-xs-12 form-group">
                <h4 class="slider_head">Weekly Performances</h4>
              </div>
              <div class="col-lg-3 col-sm-3 col-xs-12 form-group">
                <div class="card mycard" data-toggle="modal" data-target="#trial_video">
                  <a href="javascript:void(0);">
                    <div class="imglogo-div">
                      <img src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png" >
                    </div>
                    <div class="trial">
                      <p>Start free trial</p>
                      <p>7 days free, then $4.99/month</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="googletv">
            <div class="row">
              <div class="col-md-12 col-xs-12 form-group">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/58385453?badge=0" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-xs-12 form-group">
                <h4 class="slider_head">Weekly Performances</h4>
              </div>
              <div class="col-lg-3 col-sm-3 col-xs-12 form-group">
                <div class="card mycard" data-toggle="modal" data-target="#trial_video">
                  <a href="javascript:void(0);">
                    <div class="imglogo-div">
                      <img src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png" >
                    </div>
                    <div class="trial">
                      <p>Start free trial</p>
                      <p>7 days free, then $4.99/month</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="roku">
            <div class="row">
              <div class="col-md-12 col-xs-12 form-group">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/58385453?badge=0" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-xs-12 form-group">
                <h4 class="slider_head">Weekly Performances</h4>
              </div>
              <div class="col-lg-3 col-sm-3 col-xs-12 form-group">
                <div class="card mycard" data-toggle="modal" data-target="#trial_video">
                  <a href="javascript:void(0);">
                    <div class="imglogo-div">
                      <img src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png" >
                    </div>
                    <div class="trial">
                      <p>Start free trial</p>
                      <p>7 days free, then $4.99/month</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
        </div>
    </div>
    
 </div>

@endsection
<script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>

			<script>	
				var player = $f(document.getElementById('player'));
				player.addEvent('ready', function() { 
				player.api('play');
				});
			</script>

