@extends('web.welcome')

@section('title','My-Channel')

@section('content')

<div class="row ">
    <div class="col-xl-12" style="padding: 3%;">
        {{-- <ul id="tabs" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#amazontv" class="amazon active" role="tab" data-toggle="tab"><img src="{{asset('assets/img/amazon-t.png')}}"></a></li>
            <li role="presentation"><a href="#appletv" role="tab" class="apple" data-toggle="tab"><img src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png"></a></li>
            <li role="presentation"><a href="#googletv" role="tab" class="google" data-toggle="tab"><img src="https://tv.google//static/images/logos/gtv.svg"> </a></li>
            <li role="presentation"><a href="#roku" role="tab" class="roku" data-toggle="tab"><img src="https://vidapp.com/wp-content/uploads/2019/06/RokuTVLogo.png">  </a></li>
        </ul> --}}
    </div>
    <div class="col-md-12 text-right form-group">
        <a href="{{url('sign-in')}}"><button class="btn btn-success"><i class="fa fa-chevron-right"></i> Continue</button> </a>
        </div>
      <div class="col-md-12 text-center form-group">
          <h2 class="text-center">
              <u>
              @php
              echo $channel_name;
              @endphp
              </u>
          </h2>
          </div>
</div>

<style>
    .content_box {
    height: calc(400px - 36px);
}
</style>
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
                    <video id="video1" controls poster=
"{{asset('assets/img/image.png')}}">
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
      <!--       <div class="col-xl-4 col-xs-12">-->
      <!--          <h4 class="slider_head pad0">Informercial</h4>-->
      <!--          <span class="line-1 mr-l0"></span>-->
      <!--          <span class="line-2 mr-l0"></span>-->
      <!--          <br>-->
      <!--          <div class="content_box">-->
      <!--       <p class="comment-head">Community Circle's Messages</p>-->
      <!--       <div class="comment_section" id="style-3">-->
      <!--      <div class="comments">-->
      <!--             <p class="cm-text">-->
      <!--                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.-->
      <!--             </p>-->
      <!--             <p class="cm-name">-->
      <!--                John Doe-->
      <!--             </p>-->
      <!--          </div>-->
      <!--          <div class="comments">-->
      <!--             <p class="cm-text">-->
      <!--                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.-->
      <!--             </p>-->
      <!--             <p class="cm-name">-->
      <!--                John Doe-->
      <!--             </p>-->
      <!--          </div>-->
      <!--          <div class="comments">-->
      <!--             <p class="cm-text">-->
      <!--                Lorem ipsum doller sit amet consicture knowledge of lorem text-->
      <!--             </p>-->
      <!--             <p class="cm-name">-->
      <!--                John Doe-->
      <!--             </p>-->
      <!--          </div>-->
      <!--          <div class="comments">-->
      <!--             <p class="cm-text">-->
      <!--                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.-->
      <!--             </p>-->
      <!--             <p class="cm-name">-->
      <!--                John Doe-->
      <!--             </p>-->
      <!--          </div>-->
      <!--       </div>-->
      <!--</div>-->
      <!--<a href="{{ url('community-circle-message')}}" class="link" id="mar16">Learn More</a>-->
      <!--       </div>-->
          </div>
          <div class="row bg4">
             <div class="col-xl-4 col-xs-12">
                 <a href="{{ url('upload-performance')}}">
                <br>
                <h4 class="slider_head pad0">Performances</h4>
                <span class="line-1 mr-l0"></span>
                <span class="line-2 mr-l0"></span>
                <br>
                <img class="bold-text box-shadow-style img-responsive" src="{{asset('assets/img/gallery10.jpg')}}" style="max-height:199px;min-height: 199px;"></a>
             </div>
             <div class="col-xl-4 col-xs-12">
                <a href="{{url('event')}}">
                    <br>
                    <h4 class="slider_head pad0">Events</h4>
                    <span class="line-1 mr-l0"></span>
                    <span class="line-2 mr-l0"></span>
                    <br>
                    <img class="bold-text box-shadow-style img-responsive" src="{{asset('assets/img/Galley7.jpg')}}"  style="max-height:199px;min-height: 199px;">
                </a>
             </div>
             <div class="col-xl-4 col-xs-12">
                <a href="{{url('stores')}}">
                <br>
                <h4 class="slider_head pad0">Boutique</h4>
                <span class="line-1 mr-l0"></span>
                <span class="line-2 mr-l0"></span>
                <br><img class="bold-text box-shadow-style img-responsive" src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png"  style="max-height:199px;min-height: 199px;">
                </a>
             </div>
          </div>
          <div class="row bg5">
             <div class="col-xl-4 col-xs-12">
                 <a href="{{url('trailers')}}">
                <br>
                <h4 class="slider_head pad0">Trailers</h4>
                <span class="line-1 mr-l0"></span>
                <span class="line-2 mr-l0"></span>
                <br>
                <video id="video1" controls poster=
"{{asset('assets/img/image.png')}}" style="max-height:199px;min-height: 199px;">
                        <source src="{{asset('assets/img/FullSizeRender.MOV')}}" type="video/mp4"  >
                        <!--<source src="movie.ogg" type="video/ogg">-->
                    </video>
                </a>
             </div>

             <div class="col-xl-4 col-xs-12">
                 <a href="{{url('my-gallery')}}">
                <br>
                <h4 class="slider_head pad0">Gallery</h4>
                <span class="line-1 mr-l0"></span>
                <span class="line-2 mr-l0"></span>
                <br>
                <img class="bold-text box-shadow-style img-responsive" src="{{asset('assets/img/gallery11.jpg')}}"  style="max-height:199px;min-height: 199px;">
                </a>
             </div>
             <div class="col-xl-4 col-xs-12">
                 <a href="{{url('our-community')}}">
                <br>
                <h4 class="slider_head pad0">Community Circle</h4>
                <span class="line-1 mr-l0"></span>
                <span class="line-2 mr-l0"></span>
                <br>
                <img class="bold-text box-shadow-style img-responsive" src="http://bwt.tec24.in/public/assets/img/cr=w_600,h_300.webp"  style="max-height:199px;min-height: 199px;">
                </a>
             </div>


          </div>

          <div class="col-md-12 text-right form-group">
             <a href="{{url('sign-in')}}"><button class="btn btn-success"><i class="fa fa-chevron-right"></i> Continue</button> </a>
        </div>
       </div>
    </div>
 </div>

@endsection
