@extends('web.welcome')

@section('title','Trailers')

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
@php
    $likes = auth()->guard('web_user')->user()?auth()->guard('web_user')->user()->likes()->pluck('video_id'):collect([]);
@endphp
<div class="wrap-height top30">
   @foreach ($categories as $category)
   <div class="video_section">
     <div class="row">    
        <div class="col-xl-12 posRel mar-0" data-aos="fade-up" data-aos-delay="100">
           <h4 class="slider_head">{{$category->name}}</h4>
           <span class="line-1"></span>
           <span class="line-2"></span>
           <a href="{{ route('trailer-more',$category->slug)}}" class="ldMore">Load More</a>
        </div>
      
        <div class="container-fluid tcb-product-slider">
           <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                 @foreach ($category->videos->chunk(3) as $key=>$chunk)
              <div class="item {{$key?'':'active'}}" style="min-height: 200px">
                    <div class="row">
                       @foreach ($chunk as $video)
                       <div class="col-md-4 col-xs-12 form-group" data-aos="fade-up" data-aos-delay="100">
                        @include('video-user',['likes'=>$likes,'video'=>$video])
                     </div>
                       @endforeach
                    </div>
              </div>
              @endforeach
              </div>
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <svg width="44" height="60"><polyline points="30 10 10 30 30 50" stroke="rgba(0,0,0,0.5)" stroke-width="4" stroke-linecap="butt" fill="none" stroke-linejoin="round"></polyline></svg>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <svg width="44" height="60"><polyline points="14 10 34 30 14 50" stroke="rgba(0,0,0,0.5)" stroke-width="4" stroke-linecap="butt" fill="none" stroke-linejoin="round"></polyline></svg>
              </a>
           </div>
        </div>
     </div>
   </div>       
   @endforeach
</div>
@endsection
