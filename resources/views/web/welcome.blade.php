<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
               
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title','BWT')</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Favicons -->
        <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
       
        <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
         
       <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
         
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
      <!-- Vendor CSS Files -->
      <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
      <link href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
      
      <!-- Template Main CSS File -->
      <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
        <style>
          .vjs-big-play-button{
              display: none !important;
          }
          .video-js{
            background-color:white !important;
          }
          .vjs-poster{
            background-color:white !important;
          }
           .modal-dialog {
               max-width: 900px;
               margin: 30px auto;
               width:100%;
           }
           .content_box{
               height: calc(400px - 36px);
           }
           #content_box{height:400px!important;}
           .fade.in{display:block!important;}
           @media (min-width:1920px){
               #content_box {
                    height: 600px!important;
                }
                .content_box {
                    height: calc(578px - 36px);
                }
           }
           @media (max-width:720px){
               #content_box{
                   height:200px!important;
               }
           }
    .submenudrop:hover .dropdown-menu {
    display: block;
}

        </style>
    </head>
    <body>   
        <main id="main">
            <div class="container-fluid">
               <div class="row ">    
                  @include('web.layouts.sidebar')
                  <div class="col-12 col-sm-12 col-md-9 col-xl-10 col-lg-10 widthhalf">
                     <!-- ======= Header ======= -->
                     <div class="container-fluid"> 
                        <div class="row ">
                           <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12  ">
                              <div class="navmenu">
                                 <i class="icofont-navigation-menu"></i>
                                 <span class="hdTl">@yield('title')</span>
                              </div>                             
                              @include('web.layouts.header')
                              <div class="navmenu-left">
                                 <i class="fa fa-chevron-circle-down  "></i>
                              </div>
                           </div>
                        </div>
                      <div class="col-12">
                        @yield('content')
                      </div>
                     </div>
                     @include('web.layouts.footer')
                  </div>
               </div>
            </div>
         </main>
         <!-- End #main -->
         <div class="modal fade" id="myVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-body">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
                 <!-- 16:9 aspect ratio -->
                 <div class="embed-responsive embed-responsive-16by9">
                   <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <!-- ======= Footer ======= -->
         <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
         @yield('script')

    </body>
</html>
