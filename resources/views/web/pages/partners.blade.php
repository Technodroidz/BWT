@extends('web.welcome')


@section('title','Partners')

@section('content')
<style>
    .material-card {
    position: relative;
    height: 0;
    padding-bottom: 60%;
     margin-bottom: 0;
}
</style>
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

      <div class="row">
            <div class="col-xl-6 posRel mar-0"> <a href="{{ url('partner/signup') }}"><button class="btn btn-success" style="float:left"> Register</button></a>
            </div>
       <div class="col-xl-6 posRel mar-0">


            <button onclick="goBack()" class="btn btn-success back-btn" style="margin-top: 10px;"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
</div>
</div>

<div class="wrap-height" style="width: 100%">
    <!--Partners-->
    <div class="row">
       <div class="col-xl-12 posRel mar-0">
        <!--  <h4 class="slider_head">Partners</h4>-->
          <span class="line-1"></span>
          <span class="line-2"></span>
       </div>
    </div>
   <div class="row blocks">
        <div class="col-md-3 col-sm-6 col-xs-12">
            @forelse (\App\partner::all()??[] as $partner)
            <article class="material-card Pink">
                    <div class="mc-content">
                        <div class=" img-container" data-toggle="modal" data-target="#myProfile">
                            <img class="img-responsive img-thumbnail" src="{{$partner->image_url}}" style="border-radius:0% !important;">
                        </div>
                    </div>
            </article>
            @empty
            <article class="material-card Pink">
                    <div class="mc-content">
                        <div class=" img-container" data-toggle="modal" data-target="#myProfile">
                            <img class="img-responsive img-thumbnail" src="{{asset('assets\img\/Barkley Pages Logo-Header.png')}}" style="border-radius:0% !important;">
                        </div>
                    </div>
            </article>
            @endforelse
        </div>
    </div>
</div>
@endsection
