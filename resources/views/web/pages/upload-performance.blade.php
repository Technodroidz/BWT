@extends('web.welcome')

@section('title','Performance')

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
</div>
<div class="wrap-height top30">
    <div class="row">
        <div class="col-md-6">
            @include('common.video-upload',['type'=>'performance'])
        </div>
        <div class="col-md-6 text-right">
            <button onclick="goBack()" class="btn btn-success"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
    </div>    
    @php
    $likes = auth()->guard('web_user')->user()?auth()->guard('web_user')->user()->likes()->pluck('video_id'):collect([]);
   @endphp

    <div class="video_section">
        <div class="row">
            <div class="col-xl-12 posRel mar-0">
                <h4 class="slider_head">Performances</h4>
                <span class="line-1"></span>
                <span class="line-2"></span>
            </div>
        </div>
        @if (auth()->guard('web_user')->user())
        <div class="tcb-product-slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">                
                    @foreach (auth()->guard('web_user')->user()->performances->chunk(3) as $key=>$chunk)
                        <div class="row">
                            @foreach ($chunk as $performance)
                            <div class="col-md-4 col-xs-12 form-group">
                                <a href="javascript:void(0)" data-video="{{$performance->id}}" class="video-delete"><i class="fa fa-trash text-danger"></i></a>
                                @include('video-user',['likes'=>$likes,'video'=>$performance])

                            </div>
                            @endforeach
                        </div>
                    @endforeach
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
