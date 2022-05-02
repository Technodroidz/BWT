@extends('web.welcome')

@section('title','Judges')

@section('content')

<div class="video_section">
    <div class="row">
       <div class="col-xl-12">
        <ul id="tabs" class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#amazontv" class="amazon active" role="tab" data-toggle="tab"><img src="{{asset('assets/img/amazon-t.png')}}"></a></li>
          <li role="presentation"><a href="#appletv" role="tab" class="apple" data-toggle="tab"><img src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png"></a></li>
          <li role="presentation"><a href="#googletv" role="tab" class="google" data-toggle="tab"><img src="https://tv.google//static/images/logos/gtv.svg"> </a></li>
          <li role="presentation"><a href="#roku" role="tab" class="roku" data-toggle="tab"><img src="https://vidapp.com/wp-content/uploads/2019/06/RokuTVLogo.png">  </a></li>
        </ul>
        <div class="text-right form-group">
            <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
        <br>
        <!-- tabs content -->
        <div class="tab-content" id="pad16">
          <div role="tabpanel" class="tab-pane fade show active" id="amazontv">
             <div class="row ">
                <div class="col-xl-12">
                   <div class="row ">
                      <div class="col-md-8 col-xs-12">
                         <div class="form-group">
                            <a href="{{ url('national-judges')}}">
                               <h4 class="slider_head pad0">
                               </h4>
                               <span class="line-1 mr-l0"></span>
                               <span class="line-2 mr-l0"></span>
                            </a>
                            <div id="content_box">
                                <div class="vdSection">
                                    @include('video', ['src'=>optional($video)->video_url,'height'=>400])
                                </div>
                            </div>
                            <p class="video_d_p" style="margin: 8px 0px 0px 0px">

                            </p>
                            <div><a href="#" class="tags_link f"><img src="{{asset('assets/img/amazon-t.png')}}"></a>
                            <a href="#" class="tags_link s"><img src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png"></a>
                            <a href="#" class="tags_link t"><img src="https://tv.google//static/images/logos/gtv.svg"></a>
                            <a href="#" class="tags_link fr"><img src="https://vidapp.com/wp-content/uploads/2019/06/RokuTVLogo.png"></a></div>

                         </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                        <div class="content_box">
                            <p class="comment-head">Comment &amp; Post</p>
                            <div class="comment_section" id="style-3">
                                @foreach (optional($video)->comments??[] as $comment)
                                <div class="comments">
                                    <p class="cm-text">
                                        {{$comment->comment}}
                                    </p>
                                    <p class="cm-name">
                                        {{$comment->user->name}}
                                    </p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="row ml-0 mr-0" style="border: 1px solid #e5e5e5;">
                            <div class="col-sm-1 p-0 mt-2">
                                @if (auth()->guard('web_user')->check())
                                    <img src="{{auth()->guard('web_user')->user()->profile_url}}" width="50" height="50" style="border-radius: 30px;" title="{{auth()->guard('web_user')->user()->name}}"/>
                                @else
                                    <img src="{{asset('assets/img/user.png')}}" width="50" height="50" style="border-radius: 30px;" class="user-img"  alt="">
                                @endif
                            </div>
                           <div class="col-sm-11">
                                @if (auth()->guard('web_user')->check())
                                <textarea  name="comment" id="comment-body" class="form-control" placeholder="Comment here ..." style="resize: none; border: none;" rows="2"></textarea>
                                @else
                                    <div class="w-100 m-4">
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
                    <!--start-->
                    <div class="bg4" style="width: 100%;">
             <div class="col-xl-4 col-xs-12">
                 <a href="{{url('national-judges')}}">
                <br>
                <h4 class="slider_head pad0">National’s Judges</h4>
                <span class="line-1 mr-l0"></span>
                <span class="line-2 mr-l0"></span>
                <img class="bold-text box-shadow-style img-responsive" src="{{asset('assets/img/NationalJudgesImage.jpeg')}}"  style="
    max-height: 197px;
    position: relative;
    height: 181px;
    width: 100%;
}">
<a href="{{url('national-judges')}}" class="viewmore">More Info</a></a>

             </div>
             <div class="col-xl-4 col-xs-12">
                <a href="{{url('state-judges')}}">
                    <br>
                    <h4 class="slider_head pad0">State's Judges</h4>
                    <span class="line-1 mr-l0"></span>
                    <span class="line-2 mr-l0"></span>
                    <img class="bold-text box-shadow-style img-responsive" src="{{asset('assets/img/use/4.png')}}" style="
    max-height: 197px;
    position: relative;
    height: 181px;
    width: 100%;
}">
                 <a href="{{url('state-judges')}}" class="viewmore">More Info</a>
                </a>
             </div>
             <div class="col-xl-4 col-xs-12">
                 <a href="{{url('state-groups')}}">
                <br>
                <h4 class="slider_head pad0">Focus Groups</h4>
                <span class="line-1 mr-l0"></span>
                <span class="line-2 mr-l0"></span>
                <img class="bold-text box-shadow-style img-responsive" src="{{asset('assets/img/FocusGroupsImage.jpeg')}}"  style="
    max-height: 197px;
    position: relative;
    height: 181px;
    width: 100%;
}">
                <a href="{{url('state-groups')}}" class="viewmore">More Info</a>
                </a>
             </div>
          </div>
                    <!--End-->
                   </div>
                   <hr class="hrhidden">
                </div>
             </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="appletv">
             <div class="row ">
                <div class="col-xl-12">
                   <div class="row ">
                      <div class="col-md-8 col-xs-12">
                         <div class="form-group">
                            <a href="national-contest.html">
                               <h4 class="slider_head pad0">National Contestant's Judges
                               </h4>
                               <span class="line-1 mr-l0"></span>
                               <span class="line-2 mr-l0"></span>
                            </a><br>
                            <div id="content_box">
                               <a href="{{url('full-video')}}" class="img_l video-btn" >
                                  <img src="https://images.hdqwalls.com/wallpapers/tithi-luadthong-digital-art-new.jpg" class="img_ss">
                                  <p class="video_l">01:02</p>
                               </a>
                            </div>
                            <p class="video_d_p" style="margin: 8px 0px 0px 0px">

                            </p>
                            <div><a href="#" class="tags_link f"><img src="http://bwt.tec24.in/public/assets/img/amazon-t.png"></a>
                            <a href="#" class="tags_link s"><img src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png"></a>
                            <a href="#" class="tags_link t"><img src="https://tv.google//static/images/logos/gtv.svg"></a>
                            <a href="#" class="tags_link fr"><img src="https://vidapp.com/wp-content/uploads/2019/06/RokuTVLogo.png"></a></div>
                            <a href="{{url('national-contest')}}" class="viewmore">More Info</a>
                         </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                         <h4 class="slider_head pad0">&nbsp;
                               </h4><br>
                        <div class="content_box">
                        <p class="comment-head">Comment &amp; Posts</p>
                        <div class="comment_section" id="style-3">
                                <div class="comments">
                                <p class="cm-text">
                                    When the comments make you laugh more than the trailer
                                </p>
                                <p class="cm-name">
                                    ankit
                                </p>
                            </div>
                            <div class="comments">
                                <p class="cm-text">
                                    When the comments make you laugh more than the trailer
                                </p>
                                <p class="cm-name">
                                    ankit
                                </p>
                            </div>
                            <div class="comments">
                                <p class="cm-text">
                                    When the comments make you laugh more than the trailer
                                </p>
                                <p class="cm-name">
                                    ankit
                                </p>
                            </div>
                            <div class="comments">
                                <p class="cm-text">
                                    When the comments make you laugh more than the trailer
                                </p>
                                <p class="cm-name">
                                    ankit
                                </p>
                            </div>
                            <div class="comments">
                                <p class="cm-text">
                                    When the comments make you laugh more than the trailer
                                </p>
                                <p class="cm-name">
                                    ankit
                                </p>
                            </div>
                            <div class="comments">
                                <p class="cm-text">
                                    When the comments make you laugh more than the trailer
                                </p>
                                <p class="cm-name">
                                    ankit
                                </p>
                            </div>
                        </div>
                        </div>
                        <a href="http://bwt.tec24.in/comment-post" class="link">Learn More</a>
                    </div>
                         <hr>
                     <div class="col-md-6 col-xs-12">
                         <div class="form-group">
                            <a href="{{ url('state-contest')}}">
                              <h4 class="slider_head pad0">State Contestant's Judges
                               </h4>
                               <span class="line-1 mr-l0"></span>
                               <span class="line-2 mr-l0"></span>
                            </a><br>                                                <div id="content_box2">
                               <a href="{{url('full-video')}}" class="img_l video-btn" >
                                  <img src="https://i.pinimg.com/originals/e9/3f/cd/e93fcd9db766f6506304230058ef6c39.jpg" class="img_ss">
                                  <p class="video_l">01:02</p>
                               </a>
                            </div>
                            <div class="video_d">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="profile_i" src="https://www.upflix.ru/themes/default/statics/img/avatar.png">
                                    </div>
                                    <div class="col-md-9">
                                        <p class="video_d_p">

                                        </p>

                                        <p class="p_desc">28 <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> • 3 days ago</p>
                                        <a href="#" class="tags_link f"><img src="http://bwt.tec24.in/public/assets/img/amazon-t.png"></a>
                                        <a href="#" class="tags_link s"><img src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png"></a>
                                        <a href="#" class="tags_link t"><img src="https://tv.google//static/images/logos/gtv.svg"></a>
                                        <a href="#" class="tags_link fr"><img src="https://vidapp.com/wp-content/uploads/2019/06/RokuTVLogo.png"></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('state-contest')}}" class="viewmore">More Info</a>
                         </div>
                     </div>
                         <hr>
                     <div class="col-md-6 col-xs-12">
                         <div class="form-group">
                            <a href="{{ url('state-focus')}}">
                            <h4 class="slider_head pad0">State's Focus Group Members                                                   </h4>
                               <span class="line-1 mr-l0"></span>
                               <span class="line-2 mr-l0"></span>
                            </a><br>
                            <div id="content_box2">
                               <a href="{{url('full-video')}}" class="img_l video-btn" >
                                  <img src="https://www.itl.cat/pngfile/big/6-67447_hd-boys-wallpapers-full-hd-stylish-boy.jpg" class="img_ss">
                                  <p class="video_l">01:02</p>
                               </a>
                            </div>
                            <div class="video_d">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="profile_i" src="https://www.upflix.ru/themes/default/statics/img/avatar.png">
                                    </div>
                                    <div class="col-md-9">
                                        <p class="video_d_p">

                                        </p>

                                        <p class="p_desc">28 <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> • 3 days ago</p>
                                        <a href="#" class="tags_link f"><img src="http://bwt.tec24.in/public/assets/img/amazon-t.png"></a>
                                        <a href="#" class="tags_link s"><img src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png"></a>
                                        <a href="#" class="tags_link t"><img src="https://tv.google//static/images/logos/gtv.svg"></a>
                                        <a href="#" class="tags_link fr"><img src="https://vidapp.com/wp-content/uploads/2019/06/RokuTVLogo.png"></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('state-focus')}}" class="viewmore">More Info</a>
                         </div>
                      </div>
                   </div>
                   <hr class="hrhidden">
                </div>
             </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="googletv">
             <div class="row ">
                <div class="col-xl-12">
                   <div class="row ">
                      <div class="col-md-8 col-xs-12">
                         <div class="form-group">
                            <a href="national-contest.html">
                               <h4 class="slider_head pad0">National Contestant's Judges
                               </h4>
                               <span class="line-1 mr-l0"></span>
                               <span class="line-2 mr-l0"></span>
                            </a><br>
                            <div id="content_box">
                              <!-- data-toggle="modal" data-src="https://player.vimeo.com/video/58385453?badge=0" data-target="#myVideo" -->
                               <a href="{{url('full-video')}}" class="img_l video-btn" >
                                  <img src="https://images.hdqwalls.com/wallpapers/tithi-luadthong-digital-art-new.jpg" class="img_ss">
                                  <p class="video_l">01:02</p>
                               </a>
                            </div>
                            <p class="video_d_p" style="margin: 8px 0px 0px 0px">

                            </p>
                            <div><a href="#" class="tags_link f"><img src="http://bwt.tec24.in/public/assets/img/amazon-t.png"></a>
                            <a href="#" class="tags_link s"><img src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png"></a>
                            <a href="#" class="tags_link t"><img src="https://tv.google//static/images/logos/gtv.svg"></a>
                            <a href="#" class="tags_link fr"><img src="https://vidapp.com/wp-content/uploads/2019/06/RokuTVLogo.png"></a></div>
                            <a href="national-contest.html" class="viewmore">More Info</a>
                         </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                         <h4 class="slider_head pad0">&nbsp;
                               </h4><br>
                        <div class="content_box">
                        <p class="comment-head">Comment &amp; Posts</p>
                        <div class="comment_section" id="style-3">
                                <div class="comments">
                                <p class="cm-text">
                                    When the comments make you laugh more than the trailer
                                </p>
                                <p class="cm-name">
                                    ankit
                                </p>
                            </div>
                            <div class="comments">
                                <p class="cm-text">
                                    When the comments make you laugh more than the trailer
                                </p>
                                <p class="cm-name">
                                    ankit
                                </p>
                            </div>
                            <div class="comments">
                                <p class="cm-text">
                                    When the comments make you laugh more than the trailer
                                </p>
                                <p class="cm-name">
                                    ankit
                                </p>
                            </div>
                            <div class="comments">
                                <p class="cm-text">
                                    When the comments make you laugh more than the trailer
                                </p>
                                <p class="cm-name">
                                    ankit
                                </p>
                            </div>
                            <div class="comments">
                                <p class="cm-text">
                                    When the comments make you laugh more than the trailer
                                </p>
                                <p class="cm-name">
                                    ankit
                                </p>
                            </div>
                            <div class="comments">
                                <p class="cm-text">
                                    When the comments make you laugh more than the trailer
                                </p>
                                <p class="cm-name">
                                    ankit
                                </p>
                            </div>
                        </div>
                        </div>
                        <a href="http://bwt.tec24.in/comment-post" class="link">Learn More</a>
                    </div>
                         <hr>
                     <div class="col-md-6 col-xs-12">
                         <div class="form-group">
                            <a href="state-contest.html">
                              <h4 class="slider_head pad0">State Contestant's Judges
                               </h4>
                               <span class="line-1 mr-l0"></span>
                               <span class="line-2 mr-l0"></span>
                            </a><br>                                                <div id="content_box2">
                               <a href="{{url('full-video')}}" class="img_l video-btn" >
                                  <img src="https://i.pinimg.com/originals/e9/3f/cd/e93fcd9db766f6506304230058ef6c39.jpg" class="img_ss">
                                  <p class="video_l">01:02</p>
                               </a>
                            </div>
                            <div class="video_d">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="profile_i" src="https://www.upflix.ru/themes/default/statics/img/avatar.png">
                                    </div>
                                    <div class="col-md-9">
                                        <p class="video_d_p">

                                        </p>

                                        <p class="p_desc">28 <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> • 3 days ago</p>
                                        <a href="#" class="tags_link f"><img src="http://bwt.tec24.in/public/assets/img/amazon-t.png"></a>
                                        <a href="#" class="tags_link s"><img src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png"></a>
                                        <a href="#" class="tags_link t"><img src="https://tv.google//static/images/logos/gtv.svg"></a>
                                        <a href="#" class="tags_link fr"><img src="https://vidapp.com/wp-content/uploads/2019/06/RokuTVLogo.png"></a>
                                    </div>
                                </div>
                            </div>
                            <a href="state-contest.html" class="viewmore">More Info</a>
                         </div>
                     </div>
                         <hr>
                     <div class="col-md-6 col-xs-12">
                         <div class="form-group">
                            <a href="state-focus.html">
                            <h4 class="slider_head pad0">State's Focus Group Members                                                   </h4>
                               <span class="line-1 mr-l0"></span>
                               <span class="line-2 mr-l0"></span>
                            </a><br>
                            <div id="content_box2">
                               <a href="{{url('full-video')}}" class="img_l video-btn" >
                                  <img src="https://www.itl.cat/pngfile/big/6-67447_hd-boys-wallpapers-full-hd-stylish-boy.jpg" class="img_ss">
                                  <p class="video_l">01:02</p>
                               </a>
                            </div>
                            <div class="video_d">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="profile_i" src="https://www.upflix.ru/themes/default/statics/img/avatar.png">
                                    </div>
                                    <div class="col-md-9">
                                        <p class="video_d_p">

                                        </p>

                                        <p class="p_desc">28 <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> • 3 days ago</p>
                                        <a href="#" class="tags_link f"><img src="http://bwt.tec24.in/public/assets/img/amazon-t.png"></a>
                                        <a href="#" class="tags_link s"><img src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png"></a>
                                        <a href="#" class="tags_link t"><img src="https://tv.google//static/images/logos/gtv.svg"></a>
                                        <a href="#" class="tags_link fr"><img src="https://vidapp.com/wp-content/uploads/2019/06/RokuTVLogo.png"></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url('state-focus')}}" class="viewmore">More Info</a>
                         </div>
                      </div>
                   </div>
                   <hr class="hrhidden">
                </div>
             </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="roku">
             <div class="row ">
                <div class="col-xl-12">
                   <div class="row ">
                      <div class="col-md-8 col-xs-12">
                         <div class="form-group">
                            <a href="national-contest.html">
                               <h4 class="slider_head pad0">National Contestant's Judges
                               </h4>
                               <span class="line-1 mr-l0"></span>
                               <span class="line-2 mr-l0"></span>
                            </a><br>
                            <div id="content_box">
                              <!-- data-toggle="modal" data-src="https://player.vimeo.com/video/58385453?badge=0" data-target="#myVideo" -->
                               <a href="{{url('full-video')}}" class="img_l video-btn" >
                                  <img src="https://images.hdqwalls.com/wallpapers/tithi-luadthong-digital-art-new.jpg" class="img_ss">
                                  <p class="video_l">01:02</p>
                               </a>
                            </div>
                            <p class="video_d_p" style="margin: 8px 0px 0px 0px">

                            </p>
                            <div><a href="#" class="tags_link f"><img src="http://bwt.tec24.in/public/assets/img/amazon-t.png"></a>
                            <a href="#" class="tags_link s"><img src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png"></a>
                            <a href="#" class="tags_link t"><img src="https://tv.google//static/images/logos/gtv.svg"></a>
                            <a href="#" class="tags_link fr"><img src="https://vidapp.com/wp-content/uploads/2019/06/RokuTVLogo.png"></a></div>
                            <a href="national-contest.html" class="viewmore">More Info</a>
                         </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                         <h4 class="slider_head pad0">&nbsp;
                               </h4><br>
                        <div class="content_box">
                        <p class="comment-head">Comment &amp; Posts</p>
                        <div class="comment_section" id="style-3">
                                <div class="comments">
                                <p class="cm-text">
                                    When the comments make you laugh more than the trailer
                                </p>
                                <p class="cm-name">
                                    ankit
                                </p>
                            </div>
                            <div class="comments">
                                <p class="cm-text">
                                    When the comments make you laugh more than the trailer
                                </p>
                                <p class="cm-name">
                                    ankit
                                </p>
                            </div>
                            <div class="comments">
                                <p class="cm-text">
                                    When the comments make you laugh more than the trailer
                                </p>
                                <p class="cm-name">
                                    ankit
                                </p>
                            </div>
                            <div class="comments">
                                <p class="cm-text">
                                    When the comments make you laugh more than the trailer
                                </p>
                                <p class="cm-name">
                                    ankit
                                </p>
                            </div>
                            <div class="comments">
                                <p class="cm-text">
                                    When the comments make you laugh more than the trailer
                                </p>
                                <p class="cm-name">
                                    ankit
                                </p>
                            </div>
                            <div class="comments">
                                <p class="cm-text">
                                    When the comments make you laugh more than the trailer
                                </p>
                                <p class="cm-name">
                                    ankit
                                </p>
                            </div>
                        </div>
                        </div>
                        <a href="http://bwt.tec24.in/comment-post" class="link">Learn More</a>
                    </div>
                         <hr>
                     <div class="col-md-6 col-xs-12">
                         <div class="form-group">
                            <a href="{{ url('state-judges')}}">
                              <h4 class="slider_head pad0">State Contestant's Judges
                               </h4>
                               <span class="line-1 mr-l0"></span>
                               <span class="line-2 mr-l0"></span>
                            </a><br>                                                <div id="content_box2">
                               <a href="{{url('full-video')}}" class="img_l video-btn" >
                                  <img src="https://i.pinimg.com/originals/e9/3f/cd/e93fcd9db766f6506304230058ef6c39.jpg" class="img_ss">
                                  <p class="video_l">01:02</p>
                               </a>
                            </div>
                            <div class="video_d">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="profile_i" src="https://www.upflix.ru/themes/default/statics/img/avatar.png">
                                    </div>
                                    <div class="col-md-9">
                                        <p class="video_d_p">

                                        </p>

                                        <p class="p_desc">28 <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> • 3 days ago</p>
                                        <a href="#" class="tags_link f"><img src="http://bwt.tec24.in/public/assets/img/amazon-t.png"></a>
                                        <a href="#" class="tags_link s"><img src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png"></a>
                                        <a href="#" class="tags_link t"><img src="https://tv.google//static/images/logos/gtv.svg"></a>
                                        <a href="#" class="tags_link fr"><img src="https://vidapp.com/wp-content/uploads/2019/06/RokuTVLogo.png"></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('state-judges')}}" class="viewmore">More Info</a>
                         </div>
                     </div>
                         <hr>
                     <div class="col-md-6 col-xs-12">
                         <div class="form-group">
                            <a href="state-focus.html">
                            <h4 class="slider_head pad0">State's Focus Group Members                                                   </h4>
                               <span class="line-1 mr-l0"></span>
                               <span class="line-2 mr-l0"></span>
                            </a><br>
                            <div id="content_box2">
                               <a href="{{url('full-video')}}" class="img_l video-btn" >
                                  <img src="https://www.itl.cat/pngfile/big/6-67447_hd-boys-wallpapers-full-hd-stylish-boy.jpg" class="img_ss">
                                  <p class="video_l">01:02</p>
                               </a>
                            </div>
                            <div class="video_d">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="profile_i" src="https://www.upflix.ru/themes/default/statics/img/avatar.png">
                                    </div>
                                    <div class="col-md-9">
                                        <p class="video_d_p">

                                        </p>

                                        <p class="p_desc">28 <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> • 3 days ago</p>
                                        <a href="#" class="tags_link f"><img src="http://bwt.tec24.in/public/assets/img/amazon-t.png"></a>
                                        <a href="#" class="tags_link s"><img src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png"></a>
                                        <a href="#" class="tags_link t"><img src="https://tv.google//static/images/logos/gtv.svg"></a>
                                        <a href="#" class="tags_link fr"><img src="https://vidapp.com/wp-content/uploads/2019/06/RokuTVLogo.png"></a>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('state-focus')}}" class="viewmore">More Info</a>
                         </div>
                      </div>
                   </div>
                   <hr class="hrhidden">
                </div>
             </div>
          </div>
        </div>
       </div>
    </div>
 </div>


@endsection
