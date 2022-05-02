@extends('web.welcome')

@section('title','Home')

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

<style>
   #video2 {
    width: 100%;
    height: 73%;
    object-fit: cover;
    object-position: center;
}
</style>

  <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade show active" id="amazontv">
            <div class="top_2">
                <div class="row">
                    <!---->
                    <div class="col-md-8 col-sm-8 col-xs-12 form-group">
                        <div id="content_box" style="min-height: 400px">
                            @include('video', ['src'=>optional($video)->video_url,'height'=>400])
                        </div>
                        <a href="#" class="tags_link f"><img src="http://54.153.36.130/assets/img/amazon-t.png"></a>
                        <a href="#" class="tags_link s"><img src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png"></a>
                        <a href="#" class="tags_link t"><img src="https://tv.google//static/images/logos/gtv.svg"></a>
                        <a href="#" class="tags_link fr"><img src="https://vidapp.com/wp-content/uploads/2019/06/RokuTVLogo.png"></a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                        <div class="content_box">
                        <p class="comment-head">Comment & Post</p>
                        <div class="comment_section" id="style-3">
                            @foreach (optional($video)->comments??[] as $comment)
                            <div class="comments">
                                <p class="cm-text">
                                    {{$comment->comment}}
                                </p>
                                <p class="cm-name">
                                    {{@$comment->user->name}}
                                </p>
                            </div>
                            @endforeach
                        </div>
                        </div>
                        <div class="row ml-0 mr-0" style="border: 1px solid #e5e5e5;">
                            <div class="col-sm-2 p-0 mt-2">
                                @if (auth()->guard('web_user')->check())
                                    <img src="{{auth()->guard('web_user')->user()->profile_url}}" class="user-img" width="50" height="50" style="border-radius: 30px;" title="{{auth()->guard('web_user')->user()->name}}"/>
                                @else
                                    <img src="{{asset('assets/img/user.png')}}" class="user-img" width="50" height="50" style="border-radius: 30px;"  alt="">
                                @endif
                            </div>
                           <div class="col-sm-10">
                                @if (auth()->guard('web_user')->check())
                                <textarea  name="comment" id="comment-body" class="form-control" placeholder="Comment here ..." style="resize: none; border: none;" rows="2"></textarea>
                                @else
                                    <div class="w-100 m-4 login-box">
                                        Please <a href="{{route('sign-in')}}"> login </a> ...
                                    </div>
                                @endif
                                <button class="btn btn-primary comment" data-video="{{optional($video)->id}}" style="float: right;
                                height: 30px;
                                margin: 5px;
                                padding: 7px 10px !important;font-weight: 300;
 background: #5F2652">Comment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php
                $likes = auth()->guard('web_user')->user()?auth()->guard('web_user')->user()->likes()->pluck('video_id'):collect([]);
            @endphp
            @foreach ($categories as $category)
                <div class="video_section">
                    <div class="row">
                        <div class="col-xl-12 posRel mar-0" data-aos="fade-up" data-aos-delay="100">
                        <h4 class="slider_head">{{$category->name}}</h4>
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
        <div class="row bottom-bar">
        <div class="col-md-4">
            <h5 class="ulHead"><strong>JOIN + GET INVOLVE</strong></h5>
            <ul class="list">
                <!--<li><a href="http://creativedzine.co.in/bwt/sponsors">Advertisers</a></li>-->
                <li><a href="{{url('/community-circle')}}">About Us</a></li>
                <li><a href="{{url('/advertisers')}}">Advertisers</a></li>

                 @if (Auth::guard('web_user')->check())
             @php
             $id=Auth::guard('web_user')->user()->id;
             $data = DB::table('channel')->select('*')->where('user_id',$id)->first();
             @endphp
             @if($data)
             <!--<li><a href="{{url('/my-channel')}}" >Create Your Channel</a></li>-->

             @else

             <!-- <li><a href="javascript:void(0);" class="readMore"  data-toggle="modal" data-target="#channel">Create Yossur Channel</a></li>-->
             @endif
             @else
			   <!--<li> <a href="javascript:void(0);"   data-toggle="modal" data-target="#channel">Create Your Channel</a></li>-->
             @endif

                <li><a href="{{url('/join-community')}}">Join Our Community</a></li>
                <!--<li><a href="{{url('/join-community')}}">Become a Member</a></li>-->
                <!--<li><a href="http://creativedzine.co.in/bwt/community-circle">Community Circle</a></li>-->
                <li><a href="{{url('/partners')}}">Partners</a></li>
                <li><a href="{{url('/sponsors')}}">Sponsors</a></li>
                <!--<li><a href="http://creativedzine.co.in/bwt/sponsors">Sponsors</a></li>
                <li><a href="http://creativedzine.co.in/bwt/sign-up">Support Performers</a></li>-->
                        <!--<li><a href="javascript:void(0);">California</a></li>-->
                        <!--<li><a href="javascript:void(0);">Washington</a></li>-->
                        <!--<li><a href="javascript:void(0);">Special Events</a></li>-->
                        <!--<li><a href="javascript:void(0);">Past Events</a></li>-->
                        <!--<li><a href="javascript:void(0);">Private Events</a></li>-->
            </ul>
        </div>
        <div class="col-md-4">
            <h5 class="ulHead"><strong>OUR PROGRAMS</strong></h5>
            <ul class="list">
                <li><a href="{{url('/auditions')}}">Auditions</a></li>
                <!-- <li><a href="{{url('/performance')}}">Artists/Artisans</a></li> -->
                <li><a href="{{url('/performance')}}">Performances</a></li>
                <li><a href="{{url('/bwt-store')}}">Boutique Stores</a></li>
                <li><a href="{{url('/busking-board')}}">Busking Board</a></li>
                <li><a href="{{url('/studios')}}">Studios</a></li>
                <li><a href="{{url('/shopping')}}">Infomercials</a></li>


                <!--<li><a href="{{url('/gallery')}}">Gallery</a></li>-->
                <!--<li><a href="javascript:void(0);">Audios</a></li>
                <li><a href="javascript:void(0);">Videos</a></li>-->
                <!--<li><a href="{{url('/shopping')}}">Information</a></li>-->
                <!--<li><a href="http://creativedzine.co.in/bwt/events">Tv Events</a></li>-->
                <!--<li><a href="{{url('/busking-board')}}">Busking Board</a></li>-->
                <!--<li><a href="{{url('/stores')}}">Boutique Store</a></li>-->
            </ul>
        </div>
        <hr>
        <div class="col-md-4 col-xs-12 form-group">
            <h5 class="ulHead"><strong>SCHEDULE OF EVENTS</strong></h5>
            <ul class="list">
                <li><a href="{{url('upcoming-event')}}">Upcoming Events</a></li>
                <!--<li><a href="http://bwt.tec24.in/calender">Special Events</a></li>-->
                <li><a href="{{url('special-event')}}">Special Events</a></li>
                <!--<li><a href="http://bwt.tec24.in/calender">Past Events</a></li>-->
                <li><a href="{{url('past-event')}}">Past Events</a></li>
                <!--<li><a href="http://bwt.tec24.in/calender">Private Events</a></li>-->
                <li><a href="{{url('private-event')}}">Private Events</a></li>
            </ul>
              <!--<div class="card">-->
              <!--  <div class="card-body p-0">-->
              <!--    <div id="calendar"></div>-->
              <!--  </div>-->
              <!--</div>-->
        </div>
    </div>
    <div id="channel" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <!--<button type="button" class="close" data-dismiss="modal" id="closemodal">&times;</button>-->
                    <button type="button" onclick="closed()" class="close">&times;</button>
                    <h4 class="modal-title text-center">Create Your Channel</h4>
                </div>
                <div id="preview_channel" style="padding: 4%;">
                    <!-- <form method="post" action="{{route('add-new-channel')}}" enctype="multipart/form-data">-->
                    <!-- <form method="post"  enctype="multipart/form-data">
                @csrf-->
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="fromDate">Channel Name:</label>
                                    <input type="text" class="form-control" name="channel_name" id="channel_name"
                                        required>
                                </div>
                            </div>
                        </div>

                    </div>

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
                                            <video id="video2" controls=""
                                                poster="{{asset('assets/img/image.png')}}">
                                                <source
                                                    src="{{asset('assets/img/videoplayback.mp4')}}"
                                                    type="video/mp4">
                                                <!--<source src="movie.ogg" type="video/ogg">-->
                                            </video>
                                        </div>
                                        <!--<div class="embed-responsive embed-responsive-16by9" style="height:100%;">-->
                                        <!--  <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/58385453?badge=0" id="video1"  allowscriptaccess="always" allow="autoplay"></iframe>-->
                                        <!--</div>-->
                                        <p class="video_d_p" style="margin: 8px 0px 0px 0px">
                                        </p>
                                        <a href="#" class="tags_link f"><img
                                                src="http://bwt.tec24.in/public/assets/img/amazon-t.png"></a>
                                        <a href="#" class="tags_link s"><img
                                                src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png"></a>
                                        <a href="#" class="tags_link t"><img
                                                src="https://tv.google//static/images/logos/gtv.svg"></a>
                                        <a href="#" class="tags_link fr"><img
                                                src="https://vidapp.com/wp-content/uploads/2019/06/RokuTVLogo.png"></a>
                                    </div>

                                </div>
                                <div class="row bg4" style=" margin-top: -14%;">
                                    <div class="col-xl-4 col-xs-12">
                                        <a href="#">
                                            <br>
                                            <h4 class="slider_head pad0">Performances</h4>
                                            <span class="line-1 mr-l0"></span>
                                            <span class="line-2 mr-l0"></span>
                                            <br>
                                            <img class="bold-text box-shadow-style img-responsive"
                                                src="{{asset('/assets/img/gallery10.jpg')}}"
                                                style="max-height:199px;min-height: 199px;">
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-xs-12">
                                        <a href="#">
                                            <br>
                                            <h4 class="slider_head pad0">Events</h4>
                                            <span class="line-1 mr-l0"></span>
                                            <span class="line-2 mr-l0"></span>
                                            <br>
                                            <img class="bold-text box-shadow-style img-responsive"
                                                src="{{asset('/assets/img/Galley7.jpg')}}"
                                                style="max-height:199px;min-height: 199px;">
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-xs-12">
                                        <a href="#s">
                                            <br>
                                            <h4 class="slider_head pad0">Boutique</h4>
                                            <span class="line-1 mr-l0"></span>
                                            <span class="line-2 mr-l0"></span>
                                            <br><img class="bold-text box-shadow-style img-responsive"
                                                src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png"
                                                style="max-height:199px;min-height: 199px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="row bg5">
                                    <div class="col-xl-4 col-xs-12">
                                        <a href="#">
                                            <br>
                                            <h4 class="slider_head pad0">Trailers</h4>
                                            <span class="line-1 mr-l0"></span>
                                            <span class="line-2 mr-l0"></span>
                                            <br>
                                            <video id="video1" controls=""
                                                poster="{{asset('/assets/img/image.png')}}"
                                                style="max-height:199px;min-height: 199px;">
                                                <source
                                                    src="{{asset('/assets/img/FullSizeRender.MOV')}}"
                                                    type="video/mp4">
                                                <!--<source src="movie.ogg" type="video/ogg">-->
                                            </video>
                                        </a>
                                    </div>

                                    <div class="col-xl-4 col-xs-12">
                                        <a href="#">
                                            <br>
                                            <h4 class="slider_head pad0">Gallery</h4>
                                            <span class="line-1 mr-l0"></span>
                                            <span class="line-2 mr-l0"></span>
                                            <br>
                                            <img class="bold-text box-shadow-style img-responsive"
                                                src="{{asset('/assets/img/gallery11.jpg')}}"
                                                style="max-height:199px;min-height: 199px;">
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-xs-12">
                                        <a href="#">
                                            <br>
                                            <h4 class="slider_head pad0">Community Circle</h4>
                                            <span class="line-1 mr-l0"></span>
                                            <span class="line-2 mr-l0"></span>
                                            <br>
                                            <img class="bold-text box-shadow-style img-responsive"
                                                src="{{asset('/assets/img/cr=w_600,h_300.webp')}}"
                                                style="max-height:199px;min-height: 199px;">
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <!--</form>-->
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="closed()" class="btn btn-default">Close</button>

                    <!--	<a href="#" type="button" class="btn btn-default" onclick="closssse()" data-dismiss="modal">Close</a>-->
                    <button type="button" onclick="createChannel()" class="btn btn-success">Continue</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>


function closed(){

    /*alert("dvcd");*/
    $("#channel_name").val("");
    $('#channel').modal('hide');

}
  function createChannel(){

        var channel_name=$('#channel_name').val();
        var _token="{{ csrf_token() }}";
        if(channel_name!=""){


            $.ajax({
            url: "{{route('preview-channel')}}",
        type:"POST",
        data:{
            channel_name:channel_name,
          _token: _token
        },
        success:function(data){

            if(data.status==1){
              window.location.href = "{{ route('sign-in')}}";


            }else {

                alert("Channel Not Save !!");
            }
        }

        })

        }else{
            $("#channel_name").focus();
            $("#channel_name").prop('required',true);
        }



    }
</script>
<script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
@endsection

