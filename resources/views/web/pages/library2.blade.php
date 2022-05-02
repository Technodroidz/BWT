@extends('web.welcome')

@section('title','Library')

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
    <div class="row">
      <div class="col-md-12">
        <div class="card card-folders">
          <!-- Folders Container -->
          <div class="card-body" id="foldersGroup">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{url('library')}}">Library</a></li>
              @if (optional($category->parent)->parent)
              <li class="breadcrumb-item "><a href="{{route('show-detaill',$category->parent->parent->slug)}}">{{$category->parent->parent->name}}</a></li>                  
              @endif
              @if ($category->parent)
              <li class="breadcrumb-item "><a href="{{route('show-detaill',$category->parent->slug)}}">{{$category->parent->name}}</a></li>                  
              @endif
                <li class="breadcrumb-item active">{{$category->name}}</li>
            </ol>
          
          </div>
          <div class="row" style="width: 100%">
            @foreach ($videos as $video)
              <div class="col-md-4 col-xs-12 form-group" >
                @include('video-user',['likes'=>$likes,'video'=>$video]) 
              </div>
            @endforeach
          </div>
        </div>
        {{$videos->links()}}
      </div>
    </div>
 </div>



@endsection
