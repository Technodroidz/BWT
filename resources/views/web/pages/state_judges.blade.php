@extends('web.welcome')


@section('title','State Judges')

@section('content')


<div class="wrap-height">
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
    <div class="row" style="margin-top:16px;">
        <div class="col-md-12 text-right">
            <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
    </div>
    <br>
                        <div class="row ">
                           <div class="col-xl-12  text-center">
                              <div class="row ">
                                 <div class="col-xl-12  text-center">
                                    <!--<h5 class="bold-text h5-style font-style"> STATES’ CONTESTANTS’ JUDGES</h5>-->
                                    <!--<iframe id="player1" src="https://player.vimeo.com/video/155702469?color=465c4d" width="100%" height="590" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
                                    <video id="video1" style="height:590px;width:100%" controls poster=
"{{asset('assets/img/image.png')}}">
                                  <source src="{{asset('assets\img\FullSizeRender.MOV')}}" type="video/mp4">
                                  <!--<source src="movie.ogg" type="video/ogg">-->
                                </video>
                                    
                                 </div>
                              </div>
                              <hr class="hrhidden">
                              <div class="row active-with-click proRender">
                                @foreach ($members as $member)
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <article class="material-card Pink">
                                            <h2>
                                                <span>{{$member->name}}</span>
                                                <strong>
                                                    <i class="fa fa-fw fa-star"></i>
                                                    
                                                </strong>
                                            </h2>
                                            <div class="mc-content">
                                                <div class="img-container">
                                                    <img class="img-responsive" src="{{$member->image_url}}">
                                                </div>
                                                <div class="mc-description">
                                                    {{$member->decription}}
                                                </div>
                                            </div>
                                            <a class="mc-btn-action">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                            <div class="mc-footer">
                                                @foreach ($member->social_links as $key=>$link)
                                                <a class="fa fa-fw fa-{{$key}}" href="{{$link??'#'}}"></a>                                                    
                                                @endforeach
                                            </div>
                                        </article>
                                    </div>                                      
                                  @endforeach                                  
                              </div>
                              <a href="" class="load-more">Load More</a>
                           </div>
                        </div>
                     </div>



@endsection

<script>
         $(document).ready(function(){
           $(".navmenu").click(function(){
             $('.sidenav-bg').toggle();
          $('.widthhalf').toggleClass('widthfull')
           });
         });
         
         $(document).ready(function(){
           $(".navmenu-left").click(function(){
            $('.nav-menu > ul').toggle()
           });
         });
      </script>
      <script type="text/javascript">
        $(function() {
        $('.material-card > .mc-btn-action').click(function () {
            var card = $(this).parent('.material-card');
            var icon = $(this).children('i');
            icon.addClass('fa-spin-fast');

            if (card.hasClass('mc-active')) {
                card.removeClass('mc-active');

                window.setTimeout(function() {
                    icon
                        .removeClass('fa-arrow-left')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-bars');

                }, 800);
            } else {
                card.addClass('mc-active');

                window.setTimeout(function() {
                    icon
                        .removeClass('fa-bars')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-arrow-left');

                }, 800);
            }
        });
        });
      </script>
      <script type="text/javascript">
        $(function () {
          $(".active-with-click .col-md-3").slice(0, 8).show();
          $("body").on('click touchstart', '.load-more', function (e) {
            e.preventDefault();
            $(".col-md-3:hidden").slice(0, 8).slideDown();
            if ($(".col-md-3:hidden").length == 0) {
              $(".load-more").css('visibility', 'hidden');
            }
            $('html,body').animate({
              scrollTop: $(this).offset().top
            }, 1000);
          });
        });
      </script>
      <script>
         $(document).ready(function(){
           $("#sClick").click(function(){
             $(".box").animate({
               width: "toggle"
             });
           });
         });
        </script>