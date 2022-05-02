@extends('web.welcome')

@section('title','Performances')


@section('content')
@php
    $likes = auth()->guard('web_user')->user()?auth()->guard('web_user')->user()->likes()->pluck('video_id'):collect([]);
@endphp
<div class="wrap-height"><br />
    <div class="text-right form-group">
        <button onclick="goBack()" class="btn btn-success"><i class="fa fa-chevron-left"></i> Go Back</button>
    </div>
    <div class="row ">
        <div class="col-xl-12">
            <div class="row">
               <h4 class="slider_head mb-4">
                {{$category->name}}
               </h4>
                @foreach ($videos as $video)
                <div class="col-md-4 col-xs-12 form-group" data-aos="fade-up" data-aos-delay="100">
                    @include('video-user',['likes'=>$likes,'video'=>$video])                    
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
                     
@endsection