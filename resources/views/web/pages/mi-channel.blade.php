 @php
$channel=Auth::guard('web_user')->user()->channel??$channel;
@endphp

@extends('web.welcome')

@section('title',$channel->name)

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

<style>
    .content_box {
    height: calc(400px - 36px);
}
</style>
<div class="wrap-height" id="pad16"> 
    <div class="row ">
       <div class="col-xl-12">
          <div class="row">
             <div class="col-xl-12 col-xs-12">
                <h4 class="slider_head pad0">Current Performance</h4>
                <span class="line-1 mr-l0"></span>
                <span class="line-2 mr-l0"></span>
                <br>
                <div class="">
                    <video id="video1" controls poster="{{asset('assets/img/image.png')}}">
                        <source src="{{asset('assets/img/videoplayback.mp4')}}" type="video/mp4">                       
                    </video>
                </div>
                <p class="video_d_p" style="margin: 8px 0px 0px 0px">
                </p>
                <a href="#" class="tags_link f"><img src="http://54.153.36.130/assets/img/amazon-t.png"></a>
                <a href="#" class="tags_link s"><img src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png"></a>
                <a href="#" class="tags_link t"><img src="https://tv.google//static/images/logos/gtv.svg"></a>
                <a href="#" class="tags_link fr"><img src="https://vidapp.com/wp-content/uploads/2019/06/RokuTVLogo.png"></a>
             </div>
          </div>
          <div class="row bg4">
             <div class="col-xl-4 col-xs-12">
                 <a href="{{ isset($slug)?route('channel-performance',$slug):url('upload-performance')}}">
                <br>
                <h4 class="slider_head pad0">Performances</h4>
                <span class="line-1 mr-l0"></span>
                <span class="line-2 mr-l0"></span>
                
                <img class="bold-text  img-responsive" src="{{asset('assets/img/gallery10.jpg')}}" style="max-height:199px;min-height: 199px; border: 1px solid #d3d3d3"></a>
             </div>
             <div class="col-xl-4 col-xs-12">
                <a href="{{url('my-event')}}" style="margin-bottom: 30px;">
                    <br>
                    <h4 class="slider_head pad0">Events</h4>
                    <span class="line-1 mr-l0"></span>
                    <span class="line-2 mr-l0"></span>
                   
                    <img class="bold-text img-responsive" src="http://54.153.36.130/assets/img/Galley7.jpg"  style="max-height:199px;min-height: 199px;border: 1px solid #d3d3d3; width: 100%">
                </a>
             </div>
             <div class="col-xl-4 col-xs-12">
                <a href="{{url('stores')}}" style="margin-bottom: 30px;display: inline-block;">
                <br>
                <h4 class="slider_head pad0">Boutique</h4>
                <span class="line-1 mr-l0"></span>
                <span class="line-2 mr-l0"></span>
                <img class="bold-text img-responsive" src="http://54.153.36.130/uploads/1630752346.png"  style="max-height:199px;min-height: 199px;border: 1px solid #d3d3d3; width: 100%">
                </a>
             </div>
          </div>
          <div class="row bg5">
             <div class="col-xl-4 col-xs-12">
                 <a href="{{url('trailers')}}" style="margin-bottom: 30px;display: inline-block;">
                <br>
                <h4 class="slider_head pad0">Trailers</h4>
                <span class="line-1 mr-l0"></span>
                <span class="line-2 mr-l0"></span>
                <video id="video1" controls poster=
"{{asset('assets/img/image.png')}}" style="max-height:199px;min-height: 199px;border: 1px solid #d3d3d3">
                        <source src="{{asset('assets/img/FullSizeRender.MOV')}}" type="video/mp4"  >
                        <!--<source src="movie.ogg" type="video/ogg">-->
                    </video>
                </a>
             </div>
             
             <div class="col-xl-4 col-xs-12">
                 <a href="{{url('my-gallery')}}" style="margin-bottom: 30px;display: inline-block;">
                <br>
                <h4 class="slider_head pad0">Gallery</h4>
                <span class="line-1 mr-l0"></span>
                <span class="line-2 mr-l0"></span>
                <img class="bold-text img-responsive" src="http://54.153.36.130/assets/img/gallery11.jpg"  style="max-height:199px;min-height: 199px;border: 1px solid #d3d3d3">
                </a>
             </div>
             <div class="col-xl-4 col-xs-12">
                 <a href="{{url('our-community')}}" style="margin-bottom: 30px;display: inline-block;">
                <br>
                <h4 class="slider_head pad0">Community Circle</h4>
                <span class="line-1 mr-l0"></span>
                <span class="line-2 mr-l0"></span>
                <img class="bold-text 
                img-responsive" src="http://54.153.36.130/assets/img/cr=w_600,h_300.webp"  style="max-height:199px;min-height: 199px;border: 1px solid #d3d3d3">
                </a>
             </div>
             
             
          </div>
       </div>
    </div>
 </div>

@endsection
