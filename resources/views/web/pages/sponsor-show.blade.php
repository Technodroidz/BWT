@extends('web.welcome')

@section('title','Sponsors')

@section('content')
<style>
    main#main {
        overflow-x: hidden;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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

<div class="wrap-height top30">
    @if(!empty($sponsors))
   @foreach ($sponsors as $key => $row)
   
        <div class="container-fluid tcb-product-slider">
           <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              
                
              <div>        
                 <div class="col-sm-6 col-md-4 col-xs-12">
                    <a class="lightbox">
                    <img  alt="...."  style="height: 209px !important;">
                    </a>
                    {{$row->image_url??'-'}}
                 </div>

                </div>
           </div>
        </div>
        @endforeach
        @endif
    </div>
   </div>       
  
</div>

@endsection
