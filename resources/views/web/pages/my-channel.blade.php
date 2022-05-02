@extends('web.welcome')

@section('title','Studios')

@section('content')

<div class="">
    <br>
    @foreach (['danger', 'warning', 'success', 'info'] as $key)
        @if(Session::has($key))
            <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
        @endif
   @endforeach
        <div class="row">
            <div class="col-md-6 text-left">
                @if (auth()->guard('web_user')->check())
                    @if(auth()->guard('web_user')->user()->channel)
                        <a class="btn btn-success" href="{{url('/mi-channel')}}">My Studio</a>
                    @else

					<a href="bwtstudio/signup"><button class="btn btn-success">Create a Studio</button><a>

                        <!-- <button class="btn btn-success" data-toggle="modal" data-target="#addNew">Create a Studio</button> -->
                    @endif
                @else

				<a href="{{ url('studio/signup') }}"><button class="btn btn-success">Create a Studio</button><a>

                <!-- <button class="btn btn-success" data-toggle="modal" data-target="#addNew">Create Studio</button> -->
                @endif

            </div>
            <!-- <div class="col-md-4">
				<form action="{{route('studios')}}">
                <input type="text" class="form-control" placeholder="search channel" value="{{request('search')}}" name="search">
				</form>
            </div> -->
            <!-- <div class="col-md-2 text-right" style="margin-left: 315px;">
                <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
            </div> -->
        </div>
    @php
        $followers = auth()->guard('web_user')->check()?auth()->guard('web_user')->user()->channel->followers->pluck('user_id'):collect([]);
    @endphp
	<div class="row my-2">
	    @foreach ($channel as $row )
	    <div class="col-md-3 col-xs-12 form-group load-product">
	        <div class="card" id="card-new">
	            <div class="product_img">
	               <a href="{{route('channel-detail',@$row->user->channel->slug??777)}}">
					<img src="{{@$row->user->profile_url??777}}"
					onerror="this.onerror=null;this.src='http://54.153.36.130/assets/img/channelprofile2.jpg';" class="img-responsive pro-img"></a>
	            </div>
	            <div class="product_desc">
	                <p class="mar_0 text-center"><strong>{{$row->name}}</strong></p>
                    @if (auth()->guard('web_user')->check())
                        @if ($followers->contains(auth()->guard('web_user')->Id()))
                        <p id="subscribes{{$row->id}}" class="subscribe-btn"><a href="#" class="btn btn-success">Subscribed</a></p>
                        @else
                        <p id="subscribes{{$row->id}}" class="subscribe-btn"><a href="#"
	                        onclick="subscribe('{{$row->id}}','{{auth()->guard('web_user')->Id()}}')"
	                        class="btn btn-success">Subscribe</a></p>
                        @endif
                    @else
                    <div id="subs" class="text-center"><a href="{{route('sign-in')}}" class="btn-success subscribe-btn">Subscribe</a></div>
                    @endif
	            </div>
	        </div>
	    </div>
        @endforeach
	</div>
	<div class="text-center">
		<a href="#" class="btn btn-primary" id="loadMore">Load More</a>
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
			   <!-- <li> <a href="javascript:void(0);"   data-toggle="modal" data-target="#channel">Create Your Channel</a></li>-->
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
                <li><a href="{{url('/performance')}}">Artists/Artisans</a></li>
                <li><a href="{{url('/bwt-store')}}">Boutique Stores</a></li>
                <li><a href="{{url('/busking-board')}}">Busking Board</a></li>
                <li><a href="{{url('/my-channel')}}">Studios</a></li>
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


	<div id="addNew" class="modal fade" role="dialog">
	    <div class="modal-dialog modal-sm">
	        <!-- Modal content-->
	        <div class="modal-content">
	            <div class="modal-header">
	                <!--<button type="button" class="close" data-dismiss="modal" id="closemodal">&times;</button>-->
	                <button type="button" onclick="closed()" class="close">&times;</button>
	                <h4 class="modal-title text-center">Create Your Studio</h4>
	            </div>
	            <div id="preview_channel" style="padding: 4%;">
	                <div class="modal-body">
	                    <div class="row">
	                        <div class="col-md-12">
	                            <div class="form-group">
	                                <label for="fromDate">Studio Name:</label>
	                                <input type="text" class="form-control" name="channel_name" id="channel_name" required>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="" id="pad16">
	                    <div class="row ">
	                        <div class="col-xl-12">
	                            <div class="row">
	                                <div class="col-xl-12 col-xs-12">
	                                    <h4 class="slider_head pad0">Current Performance</h4>
	                                    <span class="line-1 mr-l0"></span>
	                                    <span class="line-2 mr-l0"></span>
	                                    <br>
	                                    <div class="">
	                                        <video id="video1" controls=""
	                                            poster="{{asset('assets/img/image.png')}}">
	                                            <source
	                                                src="{{asset('assets/img/videoplayback.mp4')}}"
	                                                type="video/mp4">
	                                            <!--<source src="movie.ogg" type="video/ogg">-->
	                                        </video>
	                                    </div>
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
	                            <div class="row bg4 " style="margin-bottom: 25px;">
	                                <div class="col-xl-4 col-xs-12">
	                                    <a href="#">
	                                        <br>
	                                        <h4 class="slider_head pad0">Performances</h4>
	                                        <span class="line-1 mr-l0"></span>
	                                        <span class="line-2 mr-l0"></span>
	                                        <br>
	                                        <div class="container-fluid box-shadow-style"
	                                            style="background: url({{asset('assets/img/gallery10.jpg')}});height: 80%;background-position: center;background-size: cover;">
	                                        </div>
	                                    </a>
	                                </div>
	                                <div class="col-xl-4 col-xs-12">
	                                    <a href="#">
	                                        <br>
	                                        <h4 class="slider_head pad0">Events</h4>
	                                        <span class="line-1 mr-l0"></span>
	                                        <span class="line-2 mr-l0"></span>
	                                        <br>
	                                        <div class="container-fluid box-shadow-style"
	                                            style="background: url({{asset('assets/img/Galley7.jpg')}});height: 80%;background-position: center;background-size: cover;">
	                                        </div>
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
	                                            style="height: 80%;">
	                                    </a>
	                                </div>
	                            </div>
	                            <div class="row bg5" style="margin-bottom: 25px;">
	                                <div class="col-xl-4 col-xs-12">
	                                    <a href="#">
	                                        <br>
	                                        <h4 class="slider_head pad0">Trailers</h4>
	                                        <span class="line-1 mr-l0"></span>
	                                        <span class="line-2 mr-l0"></span>
	                                        <br>
	                                        <video id="video1" controls=""
	                                            poster="{{asset('assets/img/image.png')}}"
	                                            style="height:80%;" class="box-shadow-style">
	                                            <source
	                                                src="{{asset('assets/img/FullSizeRender.MOV')}}"
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

	                                        <div class="container-fluid box-shadow-style"
	                                            style="background: url({{asset('assets/img/gallery11.jpg')}});height: 80%;background-position: center;background-size: cover;">
	                                        </div>
	                                    </a>
	                                </div>
	                                <div class="col-xl-4 col-xs-12">
	                                    <a href="#">
	                                        <br>
	                                        <h4 class="slider_head pad0">Community Circle</h4>
	                                        <span class="line-1 mr-l0"></span>
	                                        <span class="line-2 mr-l0"></span>
	                                        <br>
	                                        <div class="container-fluid box-shadow-style"
	                                            style="background: url({{asset('assets/img/cr=w_600,h_300.webp')}});height: 80%;background-position: center;background-size: cover;">
	                                        </div>
	                                    </a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="modal-footer">
	                <button type="button" onclick="closed()" class="btn btn-default">Close</button>
	                <!--	<a href="#" type="button" class="btn btn-default" onclick="closssse()" data-dismiss="modal">Close</a>-->
	                <button type="button" onclick="createChannel()" class="btn btn-success">Register</button>
	            </div>
	        </div>
	    </div>
	</div>
</div>

<script>


function closed(){

    /*alert("dvcd");*/
    $("#channel_name").val("");
    $('#addNew').modal('hide');

}
    function subscribe(follower_id,user_id){

        var _token="{{ csrf_token() }}";
        $.ajax({
            url: "{{route('channel-subscribe')}}",
        type:"POST",
        data:{
            follower_id:follower_id,
            user_id:user_id,
          _token: _token
        },
        success:function(data){

            if(data.status==1){
                $("#subscribes"+follower_id).html(`<a href="#"  class="btn btn-info">Subscribed</a>`);

            }else if(data.status==0){

                alert(data.msg);
            }
        }

        })

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
@endsection
