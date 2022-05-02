@extends('web.welcome')

@section('title','Events')
<style>
  .imgbox{ width: 100%; height: 300px; overflow: hidden; }
  .imgbox img { width: 100%; height: 100% }
</style>

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div class="wrap-height">
    <div class="row ">
        <div class="col-xl-12">
            <ul id="tabs" class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#amazontv" class="amazon active" role="tab"
                        data-toggle="tab"><img src="{{asset('assets/img/amazon-t.png')}}"></a></li>
                <li role="presentation"><a href="#appletv" role="tab" class="apple" data-toggle="tab"><img
                            src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png"></a>
                </li>
                <li role="presentation"><a href="#googletv" role="tab" class="google" data-toggle="tab"><img
                            src="https://tv.google//static/images/logos/gtv.svg"> </a></li>
                <li role="presentation"><a href="#roku" role="tab" class="roku" data-toggle="tab"><img
                            src="https://vidapp.com/wp-content/uploads/2019/06/RokuTVLogo.png"> </a></li>
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
                    <div class="">
                      @include('video',['poster'=>asset('assets/img/image.png'),
                      'src'=>"http://54.153.36.130/assets/img/WHO_WE_ARE.mp4", 'height'=>550])
                    </div>
                </div>
                @php
                    $registrations = auth()->guard('web_user')->user()?auth()->guard('web_user')->user()->event_registrations->pluck('event_id'):collect([]);
                @endphp
                @foreach ($events as $event)
                  <div class="col-md-6 col-xs-12">
                      <div class="thumbnail">
                         <div class="imgbox" style="height: 504px;"> <img src="{{ $event->image_url }}" class="img-responsive"></div>
                          <div class="caption" style="margin-top:2%;">
                              <h4 class="text-center">{!!$event->event_description!!}</h4>
                              @if (Auth::guard('web_user')->check())
                              @if ($registrations->contains($event->id))
                              <center><span class="text-success">Registered</span></center>
                              @else
                              <center><a href="javascript:void(0);" class="readMore" data-toggle="modal"
                                      data-target="#event-{{$event->id}}">Register</a></center>
                              @endif
                              @else
                              <center><a href="javascript:void(0);" class="readMore"
                                      onclick="window.location.href='{{url('/sign-in')}}'">Register</a></center>
                              @endif
                          </div>
                      </div>
                  </div>
                  @if (auth()->guard('web_user')->check())
                    <div id="event-{{$event->id}}" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                          <!-- Modal content-->
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" id="closemodal">&times;</button>
                                  <h4 class="modal-title">Event Details</h4>
                              </div>
                              <div style="margin-left:10px; margin-right:10px;">
                                  <table class="table table-striped">

                                      <tbody>
                                          <tr>
                                              <th>Name</th>
                                              <td>{{$event->name}}</td>
                                          </tr>
                                          <tr>
                                              <th>Type</th>
                                              <td>{{$event->type}}</td>
                                          </tr>
                                          <tr>
                                              <th>Date</th>
                                              <td>{{$event->from}}</td>
                                          </tr>
                                          <tr>
                                              <th>Vanue</th>
                                              <td>{{$event->venue}}</td>
                                          </tr>
                                      </tbody>
                                  </table>
                                  <br>
                                  <h4 class="modal-title">Profile Details</h4>
                                  <table class="table table-striped">
                                      <tbody>
                                          <tr>
                                              <th>Name</th>
                                              <td>{{auth()->guard('web_user')->user()->name}}</td>
                                          </tr>
                                          <tr>
                                              <th>Email</th>
                                              <td>{{auth()->guard('web_user')->user()->email}}</td>
                                          </tr>
                                          <tr>
                                              <th>Mobile</th>
                                              <td>{{auth()->guard('web_user')->user()->mobile}}</td>
                                          </tr>
                                          <tr>
                                              <th>Date Of Birth</th>
                                              <td>{{auth()->guard('web_user')->user()->dob}}</td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                              <div class="modal-footer">
                                  <a href="#" type="button" class="btn btn-default" data-dismiss="modal">Close</a>
                                  <button type="submit" class="btn btn-success joinevent" data-event="{{$event->id}}" >Join</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  @endif
                @endforeach
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="appletv">
            <div class="row">
                <div class="col-md-12 col-xs-12 form-group">
                    <div class="">
                        <video id="video1" controls>
                            <source src="http://bwt.tec24.in/public/assets/img/videoplayback.mp4" type="video/mp4">
                            <!--<source src="movie.ogg" type="video/ogg">-->
                        </video>
                    </div>
                    <a href="{{url('/events')}}" class="viewmore">More Info</a>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="googletv">
            <div class="row">
                <div class="col-md-12 col-xs-12 form-group">
                    <div class="">
                        <video id="video1" controls>
                            <source src="http://bwt.tec24.in/public/assets/img/videoplayback.mp4" type="video/mp4">
                            <!--<source src="movie.ogg" type="video/ogg">-->
                        </video>
                    </div>
                    <a href="{{url('/events')}}" class="viewmore">More Info</a>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="roku">
            <div class="row">
                <div class="col-md-12 col-xs-12 form-group">
                    <div class="">
                        <video id="video1" controls>
                            <source src="http://bwt.tec24.in/public/assets/img/videoplayback.mp4" type="video/mp4">
                            <!--<source src="movie.ogg" type="video/ogg">-->
                        </video>
                    </div>
                    <a href="{{url('/events')}}" class="viewmore">More Info</a>
                </div>
            </div>
        </div>
    </div>

</div>
   <div class="row bottom-bar">
        <div class="col-md-4">
            <h5 class="ulHead"><strong>JOIN + GET INVOLVE</strong></h5>
            <ul class="list">
                <!--<li><a href="http://creativedzine.co.in/bwt/sponsors">Advertisers</a></li>-->
                <li><a href="{{url('/community-circle')}}">About Us</a></li>
                <li><a href="{{url('/advertisers')}}">Advertisers</a></li>

                 <!--@if (Auth::guard('web_user')->check())
             @php
             $id=Auth::guard('web_user')->user()->id;
             $data = DB::table('channel')->select('*')->where('user_id',$id)->first();
             @endphp
             @if($data)
             <li><a href="{{url('/my-channel')}}" >Create Your Channel</a></li>

             @else

             <li><a href="javascript:void(0);" class="readMore"  data-toggle="modal" data-target="#channel">Create Yossur Channel</a></li>
             @endif
             @else
			   <li> <a href="javascript:void(0);"   data-toggle="modal" data-target="#channel">Create Your Channel</a></li>
             @endif-->

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
            <li><a href="{{ url('upcoming-event')}}">Upcoming Events</a></li>
                <!--<li><a href="http://bwt.tec24.in/calender">Special Events</a></li>-->
                <li><a href="{{ url('special-event')}}">Special Events</a></li>
                <!--<li><a href="http://bwt.tec24.in/calender">Past Events</a></li>-->
                <li><a href="{{ url('past-event')}}">Past Events</a></li>
                <!--<li><a href="http://bwt.tec24.in/calender">Private Events</a></li>-->
                <li><a href="{{ url('private-event')}}">Private Events</a></li>
            </ul>
              <!--<div class="card">-->
              <!--  <div class="card-body p-0">-->
              <!--    <div id="calendar"></div>-->
              <!--  </div>-->
              <!--</div>-->
        </div>
                <!--<div class="col-md-4">-->
                <!--    <h5 class="ulHead"><strong>WATCH + LISTEN</strong></h5>-->
                <!--    <ul class="list">-->
                <!--        <li><a href="javascript:void(0);">Browse & Explore</a></li>-->
                <!--        <li><a href="javascript:void(0);">All Audio</a></li>-->
                <!--        <li><a href="javascript:void(0);">All Video</a></li>-->
                <!--        <li><a href="javascript:void(0);">Radio</a></li>-->
                <!--        <li><a href="javascript:void(0);">TV Schedule</a></li>-->
                <!--        <li><a href="javascript:void(0);">Galleria online</a></li>-->
                <!--    </ul>-->
                <!--</div>-->
    </div>
    <script>
    $(document).ready(function(){
        $('.joinevent').click(function(){
            let event = $(this).attr('data-event')
            $.ajax({
                url: "{{route('register-event')}}",// url where to submit the request
                type : "POST", // type of action POST || GET
                data :{
                    event_id:event,
                    _token:'{{csrf_token()}}'
                } , // post data || get data
                success : function(result) {
                    $('#closemodal1').click();
                    swal({
                    title: 'This Event Successfully Join',
                    text: '',
                    icon: 'success',
                    button: 'Ok', });
                    setTimeout(function(){
                        window.location.reload(true)
                    },2000)
                }
            })
        });
    });
</script>

	<div id="channel" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!--<button type="button" class="close" data-dismiss="modal" id="closemodal">&times;</button>-->
        <button type="button" onclick="closed()" class="close" >&times;</button>
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
                    <input type="text" class="form-control" name="channel_name" id="channel_name"  required>
                  </div>
                </div>
              </div>

          </div>
          <div class="row ">
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
                    <video id="video1" controls="" poster="{{asset('assets/img/image.png')}}">
                        <source src="{{asset('assets/img/videoplayback.mp4')}}" type="video/mp4">
                        <!--<source src="movie.ogg" type="video/ogg">-->
                    </video>
                </div>
                <!--<div class="embed-responsive embed-responsive-16by9" style="height:100%;">-->
                <!--  <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/58385453?badge=0" id="video1"  allowscriptaccess="always" allow="autoplay"></iframe>-->
                <!--</div>-->
                <p class="video_d_p" style="margin: 8px 0px 0px 0px">
                </p>
                <a href="#" class="tags_link f"><img src="http://bwt.tec24.in/public/assets/img/amazon-t.png"></a>
                <a href="#" class="tags_link s"><img src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png"></a>
                <a href="#" class="tags_link t"><img src="https://tv.google//static/images/logos/gtv.svg"></a>
                <a href="#" class="tags_link fr"><img src="https://vidapp.com/wp-content/uploads/2019/06/RokuTVLogo.png"></a>
             </div>
          </div>
          <div class="row bg4">
             <div class="col-xl-4 col-xs-12">
                 <a href="#">
                <br>
                <h4 class="slider_head pad0">Performances</h4>
                <span class="line-1 mr-l0"></span>
                <span class="line-2 mr-l0"></span>
                <br>
                <img class="bold-text box-shadow-style img-responsive" src="http://54.153.36.130/assets/img/gallery10.jpg" style="max-height:199px;min-height: 199px;"></a>
             </div>
             <div class="col-xl-4 col-xs-12">
                <a href="#">
                    <br>
                    <h4 class="slider_head pad0">Events</h4>
                    <span class="line-1 mr-l0"></span>
                    <span class="line-2 mr-l0"></span>
                    <br>
                    <img class="bold-text box-shadow-style img-responsive" src="http://54.153.36.130/assets/img/Galley7.jpg" style="max-height:199px;min-height: 199px;">
                </a>
             </div>
             <div class="col-xl-4 col-xs-12">
                <a href="#s">
                <br>
                <h4 class="slider_head pad0">Boutique</h4>
                <span class="line-1 mr-l0"></span>
                <span class="line-2 mr-l0"></span>
                <br><img class="bold-text box-shadow-style img-responsive" src="http://54.153.36.130/uploads/1630752346.png" style="max-height:199px;min-height: 199px;">
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
                <video id="video1" controls="" poster="{{asset('assets/img/image.png')}}" style="max-height:199px;min-height: 199px;">
                        <source src="{{asset('assets/img/FullSizeRender.MOV')}}" type="video/mp4">
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
                <img class="bold-text box-shadow-style img-responsive" src="http://54.153.36.130/assets/img/gallery11.jpg" style="max-height:199px;min-height: 199px;">
                </a>
             </div>
             <div class="col-xl-4 col-xs-12">
                 <a href="#">
                <br>
                <h4 class="slider_head pad0">Community Circle</h4>
                <span class="line-1 mr-l0"></span>
                <span class="line-2 mr-l0"></span>
                <br>
                <img class="bold-text box-shadow-style img-responsive" src="http://54.153.36.130/assets/img/cr=w_600,h_300.webp" style="max-height:199px;min-height: 199px;">
                </a>
             </div>


          </div>
       </div>
    </div>
 </div>

      <!--</form>-->
	</div>
	<div class="modal-footer">
	    		<button type="button" onclick="closed()" class="btn btn-default" >Close</button>

	<!--	<a href="#" type="button" class="btn btn-default" onclick="closssse()" data-dismiss="modal">Close</a>-->
		<button type="button" onclick="createChannel()" class="btn btn-success" >Continue</button>
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
@endsection




<script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>


