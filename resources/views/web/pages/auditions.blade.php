@extends('web.welcome')

@section('title','Auditions')

@section('content')
<style type="text/css">
    .log-form {
        width: 100%;
        min-width: 320px;
        max-width: 100%;
        background: #fff;
        border: 4px solid #773067f7;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
    }
.modal-content{ border-radius: 21px; }
    @media (max-width: 40em) {
        .log-form {
            width: 95%;
            position: relative;
            margin: 2.5% auto 0 auto;
            left: 0%;
            -webkit-transform: translate(0%, 0%);
            -moz-transform: translate(0%, 0%);
            -o-transform: translate(0%, 0%);
            -ms-transform: translate(0%, 0%);
            transform: translate(0%, 0%);
        }
    }

    .log-form form {
        display: block;
        width: 100%;
        padding: 2em;
    }

    .log-form h2 {
        color: #fff;
        font-family: 'open sans condensed';
        font-size: 1em;
        display: block;
        background: #5F2652;
        width: 100%;
        text-align: center;
        text-transform: uppercase;
        padding: 0.75em 1em 0.75em 1.5em;
        box-shadow: inset 0px 1px 1px rgba(255, 255, 255, 0.05);
        margin: 0;
        font-weight: 200;
    }

    /*.log-form input {
      display: block;
      margin: auto auto;
      width: 100%;
      margin-bottom: 2em;
      padding: 0.5em;
      border: none;
      border: 1px solid #eaeaea;
      color: #000;
    }*/
    .log-form input:focus {
        outline: none;
    }

    .log-form .btn {
        display: inline-block;
        background: #5F2652;
        border: 1px solid #5F2652;
        padding: 0.5em 2em;
        color: white;
        margin-right: 0.5em;
        box-shadow: inset 0px 1px 0px rgba(255, 255, 255, 0.2);
    }

    .log-form .btn:hover {
        background: #23cad5;
        border-color: #23cad5;
    }

    .log-form .btn:active {
        background: #1fb5bf;
        border-color: #1fb5bf;
        box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.1);
    }

    .log-form .btn:focus {
        outline: none;
    }

    .log-form .forgot {
        color: #0b2fe2;
        line-height: 0.5em;
        position: relative;
        font-weight: 600;
        top: 1.5em;
        text-decoration: none;
        font-size: 1rem;
        margin: 0;
        padding: 0;
        float: right;
    }

    .create {
        color: #ffc107;
        font-weight: 600;
    }

    .log-form .forgot:hover {
        color: #1ba0a9;
    }

    .log-form p {
        font-size: 14px;
        margin: 0 0 16px 0;
    }

    .rel {
        position: relative;
        /*height:100vh;*/
    }

    .important-note {
        padding: 16px 20px;
        background: #5F2652;
        border-radius: 16px 16px 0px 0px;
    }

    .important-note h4 {
        font-size: 18px;
        color: #ffffff;
        font-weight: 600;
    }

    .important-note p {
        color: #ffffff;
        text-decoration: underline;
    }

    .log-form input.inl {
        display: inline-block !important;
        width: auto !important;
    }

    .inFlex {
        display: inline-flex;
    }

    .date-field {
        /*width: 30px;*/
        text-align: center;
    }

    /*.date-field--year {
      width: 60px;
    }*/

    .single-date-field {
        width: 120px;
    }

    .field-inline-block {
        display: inline-block;
        margin-right: 5px;
        margin-left: 5px;
        width: 20%;
    }

    .field-inline-block:last-child {
        width: 100%;
        max-width: 241px;
    }

    .field-inline-block label {
        text-align: center;
    }

    .log-form .d-flex {
        align-items: center;
        justify-content: center;
    }

    h4 {
        font-size: 18px;
        color: #000;
        font-weight: 100;
    }

    .login-logo {
        max-width: 240px;
        width: 100%;
        margin-right: 32px;
        margin-top: 12px;
    }

    .log-form .d-flex span {
        display: block;
        padding: 22px 0px;
    }

    .form-group .checkbox label {
        font-size: 14px;
        font-weight: normal;
    }
    .bill-board p{ margin-bottom: 0px; }
    .table-br { border-bottom: 1px solid #fff }
    .br-left { border-left: 1px solid #fff;    padding: 2px 0px 1px 4px !important;}
    .table-ranking { 
    display: flex;
    width: 100%;
    align-items: center;
    justify-content: space-between;
    height: 100%; }
    .table-ranking .bill-board{ width: 100% }
    .br-top { border-top: 1px solid #fff;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--state-&-national-->
@foreach (['danger', 'warning', 'success', 'info'] as $key)
@if(Session::has($key))
<p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
@endif
@endforeach
<div class="container-fluid national" style="display: block;">

    <section class="showcase mt-5">

        <div class="container-fluid"
            style="background: url(http://54.153.36.130/uploads/international/download.jpg);background-size: cover;">
            <div class="row">

                <div class="col-md-6 col-xs-6">
                    <h1 class="text-center"
                        style="padding-bottom:5px;letter-spacing: 2px;font-size: 25px;padding-left: 30%;padding-top:22px;color:#fff; line-height: 30px">
                        COMPETE TO WIN A GRAND PRIZE UPTO $100,OOO ON STATE AND NATIONAL LEVEL.</h1>
                        {{-- @if (auth()->guard('web_user')->check()) --}}
                        <center><a
                                style="background-color:#5F2652;letter-spacing: 2px;color:#fff;margin-left: 30%;/* padding-left: 34%; *//* padding-bottom: 20px; *//* margin-bottom: 20px; */border-radius: 5px;padding:15px;font-size:16px;"
                                href="{{url('personalInfo')}}">Register</a></center>
                        {{-- @else
                        <center><a
                                style="background-color:#5F2652;letter-spacing: 2px;color:#fff;margin-left: 30%;/* padding-left: 34%; *//* padding-bottom: 20px; *//* margin-bottom: 20px; */border-radius: 5px;padding:15px;font-size:16px;"
                                href="{{url('sign-in')}}">Register</a></center>
                        @endif --}}
                </div>


                <div class="col-md-6 col-xs-6">
                  <div class="table-ranking">
                    <div class="bill-board">

                        <div class="row table-br br-top">
                          <div class="col-md-4 p-0 br-left">
                            <strong><i class="fa fa-cog" aria-hidden="true"></i> Name</strong>
                          </div>
                          <div class="col-md-2 p-0 br-left">
                            <strong><i class="fa fa-cog" aria-hidden="true"></i> Judges</strong>
                          </div>
                          <div class="col-md-2 p-0 br-left">
                            <strong><i class="fa fa-cog" aria-hidden="true"></i> Voting</strong>
                          </div>
                          <div class="col-md-2 p-0 br-left">
                            <strong><i class="fa fa-cog" aria-hidden="true"></i> Score</strong>
                          </div>
                          <div class="col-md-2 p-0 br-left">
                            <strong><i class="fa fa-cog" aria-hidden="true"></i> Ranking</strong>
                          </div>
                        </div>

                        @foreach ($videos as $k=>$video)
                        <div class="row table-br">
                          <div class="col-md-4 p-0 br-left">
                            <p>{{$video->user->name}}</p>
                          </div>
                          <div class="col-md-2 p-0 br-left">
                            <p>{{$video->scoreByJudge}}</p>
                          </div>
                          <div class="col-md-2 p-0 br-left">
                            <p>{{$video->likes_count}}</p>
                          </div>
                          <div class="col-md-2 p-0 br-left">
                            <p>{{$video->total_score}}</p>
                          </div>
                          <div class="col-md-2 p-0 br-left">
                            <p>{{$k+1}}</p>
                          </div>
                        </div>
                 @endforeach
                     
                       

                       <!-- <div class="row">
  <div class="col-md-4 p-0">

  <table cellspacing="0" cellpadding="0" width="100%">
                 <tr>
                   <th colspan="2"><i class="fa fa-cog" aria-hidden="true"></i> <strong>Name</strong></th>
                 </tr>
                 @foreach ($videos as $video)
                 <tr>
                   <td>{{$video->user->name}}</td>
                 </tr>
                 @endforeach
                 @foreach (range($videos->count()+1,10) as $item)
                     <tr>
                       <td>NA</td>
                     </tr>
                 @endforeach
                </table>

               </div>

            <div class="col-md-2 p-0">

            <table cellspacing="0" cellpadding="0" width="100%">
              <tr>
                <th colspan="2"><i class="fa fa-cog" aria-hidden="true"></i> <strong>Judegs</strong></th>
              </tr>
              @foreach ($videos as $video)
              <tr>
                <td>{{$video->scoreByJudge}}</td>
              </tr>
              @endforeach
              @foreach (range($videos->count()+1,10) as $item)
                  <tr>
                    <td>NA</td>
                  </tr>
              @endforeach
             </table>

            </div>
             <div class="col-md-2 p-0">


             <table cellspacing="0" cellpadding="0" width="100%">
              <tr>
                <th colspan="2"><i class="fa fa-cog" aria-hidden="true"></i> <strong>Voting</strong></th>
              </tr>
              @foreach ($videos as $video)
              <tr>
                <td>{{$video->likes_count}}</td>
              </tr>
              @endforeach
              @foreach (range($videos->count()+1,10) as $item)
                  <tr>
                    <td>NA</td>
                  </tr>
              @endforeach
             </table>

            </div>
            <div class="col-md-2 p-0">

            <table cellspacing="0" cellpadding="0" width="100%">
                 <tr>
                   <th colspan="2"><i class="fa fa-cog" aria-hidden="true">
                       </i> <strong>Score</strong></th>
                 </tr>
                 @foreach ($videos as $video)
                 <tr>
                 <td>{{$video->total_score}}</td>

                 </tr>
                 @endforeach
                 @foreach (range($videos->count()+1,10) as $item)
                     <tr>
                       <td>NA</td>
                     </tr>
                 @endforeach
                </table>

               </div>
            <div class="col-md-2 p-0" style="padding-right: 15px;">

            <table cellspacing="0" cellpadding="0" width="100%">
                 <tr>
                   <th colspan="2"><i class="fa fa-cog" aria-hidden="true">
                       </i> <strong>Ranking</strong></th>
                 </tr>
                 @foreach ($videos as $video)
                 <tr>
                   <td>{{$loop->index+1}}</td>
                 </tr>
                 @endforeach
                 @foreach (range($videos->count()+1,10) as $item)
                     <tr>
                       <td>{{$item}}</td>
                     </tr>
                 @endforeach
                </table>

               </div>

        </div> -->




                    </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid" style="margin-top:20px;">

            <div class="card" style="/* background-color:#5F2652; *//* margin-right: 10%; *//* margin-left: 10%; */">
                <img class="card-img-top" src="http://54.153.36.130/uploads/international/rs=w_1250,cg_true.png"
                    style="height:314px;/* width:70%; */height:70%;vertical-align:middle;/* margin-right:auto; *//* margin-left:auto; */"
                    alt="Card image">
            </div>
        </div>
    </section>


    <section class="features-icons  text-center" style="margin-bottom:30px; margin-top:30px; ">
        <div class="">
            <h1 class="text-center" style="color:#000; padding:10px;"> Welcome </h1>
            @if (auth()->guard('web_user')->check())
            <a class="text-center mt-1 style=" style="background-color:#5F2652; letter-spacing: 1px;color:#fff; padding:10px 18px; border-radius:5px;
    margin-bottom: 3px;
    display: inline-block;" href="{{url('personalInfo')}}">{{auth()->guard('web_user')->user()->name}}</a>

            @else
            <a class="text-center mt-1 style=" style="background-color:#5F2652; letter-spacing: 1px;color:#fff; padding:10px 18px; border-radius:5px;
    margin-bottom: 3px;
    display: inline-block;" href="{{url('sign-in')}}">You Got This! Sign Up Now </a>
            @endif

        </div>
    </section>


    <div class="container-fluid"
        style="background: url(http://54.153.36.130/uploads/international/bannerbackground.webp);margin-bottom: 30px;padding-bottom: 40px;background-position: center;background-size: cover;margin-top:40px;">

        <h1 class="text-center"
            style="padding-bottom: 20px;letter-spacing: 2px;padding-left: 10%;padding-right: 14%;padding-top: 8%;">
            SUBMIT YOUR STATE'S AUDITION VIDEO TO WIN A GRAND PRIZE OF $25,000.</h1>
            {{-- @if (auth()->guard('web_user')->check()) --}}
            <center><a
                style="background-color:#5F2652;letter-spacing: 2px;color:#fff;/* padding-bottom: 20px; *//* margin-bottom: 20px; */border-radius: 5px;padding: 15px;font-size: 16px;"
                href="{{url('personalInfo')}}">Register</a></center>
            {{-- @else
            <center><a
                style="background-color:#5F2652;letter-spacing: 2px;color:#fff;/* padding-bottom: 20px; *//* margin-bottom: 20px; */border-radius: 5px;padding: 15px;font-size: 16px;"
                href="{{url('sign-in')}}">Register</a></center>
            @endif --}}
    </div>
    <div class="card" style="background-color:#5F2652;margin-right:10%;margin-left:10%;">
        <img class="card-img-top" src="http://54.153.36.130/assets/img/gallery4.jpg"
            style="height:314px; height:100%;vertical-align:middle; margin-right:auto; margin-left:auto;"
            alt="Card image">
    </div>

    <div class="container-fluid"
        style="background: url(http://54.153.36.130/uploads/international/download2.jpg);background-size: cover;">
        <div class="row">

            <div class="col-md-6 col-xs-6">
                <h1 class="text-center"
                    style="padding-bottom:5px;letter-spacing: 2px;font-size: 25px;padding-left: 30%;padding-top:22px;color:#fff; line-height: 30px">
                    COMPETE TO PERFORM FOR WEEKLY GRAND PRIZES AND CONTRIBUTION</h1>
                {{-- @if (auth()->guard('web_user')->check()) --}}
                <center><a
                    style="background-color:#5F2652;letter-spacing: 2px;color:#fff;margin-left: 30%;/* padding-left: 34%; *//* padding-bottom: 20px; *//* margin-bottom: 20px; */border-radius: 5px;padding:15px;font-size:16px;"
                    href="{{url('personalInfo')}}?type=weekly">Register</a></center>
                {{-- @else
                <center><a
                    style="background-color:#5F2652;letter-spacing: 2px;color:#fff;/* padding-bottom: 20px; *//* margin-bottom: 20px; */border-radius: 5px;padding: 15px;font-size: 16px;"
                    href="{{url('sign-in')}}">Register</a></center>
                @endif --}}

            </div>


            <div class="col-md-6 col-xs-6">

                  <div class="table-ranking">
                <div class="bill-board">


                        <div class="row table-br br-top">
                          <div class="col-md-4 p-0 br-left">
                            <strong><i class="fa fa-cog" aria-hidden="true"></i> Name</strong>
                          </div>
                          <div class="col-md-2 p-0 br-left">
                            <strong><i class="fa fa-cog" aria-hidden="true"></i> Judges</strong>
                          </div>
                          <div class="col-md-2 p-0 br-left">
                            <strong><i class="fa fa-cog" aria-hidden="true"></i> Voting</strong>
                          </div>
                          <div class="col-md-2 p-0 br-left">
                            <strong><i class="fa fa-cog" aria-hidden="true"></i> Score</strong>
                          </div>
                          <div class="col-md-2 p-0 br-left">
                            <strong><i class="fa fa-cog" aria-hidden="true"></i> Ranking</strong>
                          </div>
                        </div>

                        @foreach ($videos as $k=>$video)
                        <div class="row table-br">
                          <div class="col-md-4 p-0 br-left">
                            <p>{{$video->user->name}}</p>
                          </div>
                          <div class="col-md-2 p-0 br-left">
                            <p>{{$video->scoreByJudge}}</p>
                          </div>
                          <div class="col-md-2 p-0 br-left">
                            <p>{{$video->likes_count}}</p>
                          </div>
                          <div class="col-md-2 p-0 br-left">
                            <p>{{$video->total_score}}</p>
                          </div>
                          <div class="col-md-2 p-0 br-left">
                            <p>{{$k+1}}</p>
                          </div>
                        </div>
                 @endforeach

                  <!--  <div class="row">
  <div class="col-md-4 p-0">

             
  <table cellspacing="0" cellpadding="0" width="100%">
                 <tr>
                   <th colspan="2"><i class="fa fa-cog" aria-hidden="true"></i> <strong>Name</strong></th>
                 </tr>
                 @foreach ($videos as $video)
                 <tr>
                   <td>{{$video->user->name}}</td>
                 </tr>
                 @endforeach
                 @foreach (range($videos->count()+1,10) as $item)
                     <tr>
                       <td>NA</td>
                     </tr>
                 @endforeach
                </table>

               </div>

            <div class="col-md-2 p-0">

            <table cellspacing="0" cellpadding="0" width="100%">
              <tr>
                <th colspan="2"><i class="fa fa-cog" aria-hidden="true"></i> <strong>Judegs</strong></th>
              </tr>
              @foreach ($videos as $video)
              <tr>
                <td>{{$video->scoreByJudge}}</td>
              </tr>
              @endforeach
              @foreach (range($videos->count()+1,10) as $item)
                  <tr>
                    <td>NA</td>
                  </tr>
              @endforeach
             </table>

            </div>
             <div class="col-md-2 p-0">


             <table cellspacing="0" cellpadding="0" width="100%">
              <tr>
                <th colspan="2"><i class="fa fa-cog" aria-hidden="true"></i> <strong>Voting</strong></th>
              </tr>
              @foreach ($videos as $video)
              <tr>
                <td>{{$video->likes_count}}</td>
              </tr>
              @endforeach
              @foreach (range($videos->count()+1,10) as $item)
                  <tr>
                    <td>NA</td>
                  </tr>
              @endforeach
             </table>

            </div>
            <div class="col-md-2 p-0">

            <table cellspacing="0" cellpadding="0" width="100%">
                 <tr>
                   <th colspan="2"><i class="fa fa-cog" aria-hidden="true">
                       </i> <strong>Score</strong></th>
                 </tr>
                 @foreach ($videos as $video)
                 <tr>
                 <td>{{$video->total_score}}</td>

                 </tr>
                 @endforeach
                 @foreach (range($videos->count()+1,10) as $item)
                     <tr>
                       <td>NA</td>
                     </tr>
                 @endforeach
                </table>

               </div>
            <div class="col-md-2 p-0" style="padding-right: 15px;">

            <table cellspacing="0" cellpadding="0" width="100%">
                 <tr>
                   <th colspan="2"><i class="fa fa-cog" aria-hidden="true">
                       </i> <strong>Ranking</strong></th>
                 </tr>
                 @foreach ($videos as $video)
                 <tr>
                   <td>{{$loop->index+1}}</td>
                 </tr>
                 @endforeach
                 @foreach (range($videos->count()+1,10) as $item)
                     <tr>
                       <td>{{$item}}</td>
                     </tr>
                 @endforeach
                </table>


               </div>

        </div> -->
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
<!--weekly-performancesl-->
<div class="container-fluid weekly" style="display:none">
    <div class="row mt-5" style="padding: 20px;">
        <div class="col-md-6 col-xs-6">
            <center><a class="nationalclass activee"
                    style="letter-spacing: 2px;color: #000;border-radius: 5px; cursor: pointer;padding-right: 10px;padding:15px;font-size: 20px;box-shadow: rgb(122 16 75 / 65%) 0px 8px 24px;">State
                    &amp; National Competition</a></center>
        </div>
        <div class="col-md-6 col-xs-6">
            <center><a class="weeklyclass activeee"
                    style="letter-spacing: 2px;color: #000;border-radius: 5px; cursor: pointer;padding:15px;font-size: 20px; box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">Weekly
                    Performance Competition</a></center>
        </div>
    </div>

    <hr class="divider my-4">
    <div style="padding: 26px 0px 16px;">
        <div style="height: 100%;position: relative;width: 100%;">
            <div style="height: 100%;width: 100%;padding: 0px;">
                <video style="width: 100%;height: 100%;object-fit: cover;object-position: center;" controls=""
                    poster="http://54.153.36.130/assets/img/image.png">
                    <source src="http://54.153.36.130/assets\img\WHO WE ARE.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                </video>
            </div>
        </div>
        <p style="color: #000;font-size: 16px;font-weight: 500;margin: 0;">
        </p>
        <a style="background: #0f79af!important;"><img style="width: 50px;"
                src="http://54.153.36.130/assets/img/amazon-t.png"></a>
        <a style="background: #0f79af!important;"><img style="width: 50px;"
                src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png"></a>
        <a style="background: #0f79af!important;"><img style="width: 50px;"
                src="https://tv.google//static/images/logos/gtv.svg"></a>
        <a style="background: #0f79af!important;"><img style="width: 50px;"
                src="https://vidapp.com/wp-content/uploads/2019/06/RokuTVLogo.png"></a>
        <section class="features-icons  text-center" style="margin-bottom:30px; margin-top:30px; ">
            <h1 class="text-center" style="color: #000;padding:10px;border-radius: 6px;/* background-color:#5F2652; */">
                Welcome </h1>
            <hr class="divider my-4">
            <section class="showcase mt-5 pb-5">
                <div class="container-fluid" style="margin-top:20px;">
                    <div class="card" style="background-color:#5F2652;margin-right:20%;margin-left:20%;">
                        <img class="card-img-top" src="http://54.153.36.130/assets/img/events2.png"
                            style="height:314px; width:70%;height:70%;vertical-align:middle; margin-right:auto; margin-left:auto;"
                            alt="Card image">
                    </div>
                </div>
            </section>
            <a class="text-center mt-1 style="
                style="background-color:#5F2652; letter-spacing: 1px;color:#fff; padding:18px; border-radius:10px;"
                href="{{url('sign-in')}}">You Got This! Register </a>
            <hr class="divider my-4">
            <a class="text-center mt-4"
                style="background-color:#000; border-radius: 10px;letter-spacing: 2px;color:#fff; padding:10px;">BWT'S
                AUDITION VIDEOS COMPETITIONS </a>
            <hr class="divider my-4">
            <div class="row">
                <div class="col-md-6 col-xs-6 mb-2">
                    <div class="caption" style="margin-top:25px;">
                        <h4 class="text-center">BWT is seeking for talent in State of <br> Illinois</h4>
                    </div>
                    <div class="thumbnail">
                        <img src="http://54.153.36.130/uploads/international/cr=w_600,h_300.webp"
                            style="max-height:595px;border-radius: 5px; margin-bottom: 20px;">

                    </div>
                    <center><a style="background-color:#5F2652;letter-spacing: 2px;color:#fff;/* padding-bottom: 20px; *//* margin-bottom: 20px; */border-radius: 5px;padding:15px;font-size:16px;"
                            href="{{url('sign-in')}}">Register</a></center>
                </div>
                <div class="col-md-6 col-xs-6 mb-2">
                    <div class="caption" style="margin-top:25px;">
                        <h4 class="text-center">BWT aims for talent in the State of <br>Tennessee</h4>
                    </div>
                    <div class="thumbnail">
                        <img src="{{asset('uploads/international/cr=w_600,h_300.jpg')}}" class="img-responsive"
                            style="max-height:595px;border-radius: 5px;  margin-bottom: 20px;">
                    </div>
                    <center><a
                            style="background-color:#5F2652; letter-spacing: 2px; color:#fff;border-radius: 5px; padding:15px; font-size:16px; ">Register</a>
                    </center>
                </div>
                <div class="col-md-6 col-xs-6 mt-4">
                    <div class="caption" style="margin-top:10%;">
                        <h4 class="text-center">BWT will host competitions in the State of <br> Texas</h4>
                    </div>
                    <div class="thumbnail">
                        <img src="{{asset('uploads/international/cr=w_600,h_300 (1).jpg')}}"
                            style="max-height:595px;border-radius: 5px;  margin-bottom: 20px;">
                    </div>
                    <center><a
                            style="background-color:#5F2652;letter-spacing: 2px;color:#fff;/* padding-bottom: 20px; *//* margin-bottom: 20px; */border-radius: 5px;padding:15px;font-size:16px;"
                            href="{{url('sign-in')}}">Register</a></center>
                </div>
                <div class="col-md-6 col-xs-6 mt-4">
                    <div class="caption" style="margin-top:10%;">
                        <h4 class="text-center">BWT is looking for talent in the State of <br>Louisiana</h4>

                    </div>
                    <div class="thumbnail">
                        <img src="{{asset('uploads/international/cr=w_600,h_300 (2).jpg')}}" class="img-responsive"
                            style="max-height:595px;border-radius: 5px;  margin-bottom: 20px;">
                    </div>
                    <center><a
                            style="background-color:#5F2652; letter-spacing: 2px; color:#fff;border-radius: 5px; padding:15px; font-size:16px; ">Register</a>
                    </center>
                </div>
            </div>
            <button
                style="background-color:#5F2652;letter-spacing: 3px;border-radius: 6px;color:#fff;margin-top: 50px;margin-bottom: 30px;padding: 10px;font-size: 14px;">Register
                Here for Weekly Grand Prizes &amp; <br> Contributions</button>
        </section>
        <!--<div class="col-md-4 col-sm-4 col-xs-12 form-group">-->
        <!--    <div class="content_box" style="padding-left:20%;">-->
        <!--      <div style=" width: 80%;height: 150px; position: relative; margin-bottom:10px; ,margin-top:10px;">-->
        <!--        <div class="thumbnail">-->
        <!--            <img src="http://creativedzine.co.in/bwt/public/uploads/international/cr=w_600,h_300.webp" class="img-responsive" style="max-height:595px;max-width:330px;border-radius: 5px;  margin-bottom: 20px;">-->
        <!--        </div>-->
        <!--      </div>-->
        <!--      <hr class="divider my-4" style="margin-bottom:10px;"/>-->
        <!--      <div style=" width: 80%;height: 150px;position: relative; margin-bottom:10px; ,margin-top:10px;">-->
        <!--        <div class="thumbnail">-->
        <!--            <img src="http://creativedzine.co.in/bwt/public/uploads/international/cr=w_600,h_300.webp" class="img-responsive" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);max-height:595px;max-width:300px;border-radius: 5px;  margin-bottom: 20px;">-->
        <!--        </div>-->
        <!--      </div>-->
        <!--      <hr class="divider my-4" style="margin-bottom:10px;"/>-->
        <!--      <div style=" width: 80%;height: 150px;position: relative; margin-bottom:10px; ,margin-top:10px;">-->
        <!--        <div class="thumbnail">-->
        <!--            <img src="http://creativedzine.co.in/bwt/public/uploads/international/cr=w_600,h_300.webp" class="img-responsive" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);max-height:595px;max-width:300px;border-radius: 5px;  margin-bottom: 20px;">-->
        <!--        </div>-->
        <!--      </div>-->
        <!--      <hr class="divider my-4" style="margin-bottom:10px;"/>-->
        <!--      <div style=" width: 80%;height: 150px;position: relative; margin-bottom:10px; ,margin-top:10px;">-->
        <!--        <div class="thumbnail">-->
        <!--            <img src="http://creativedzine.co.in/bwt/public/uploads/international/cr=w_600,h_300.webp" class="img-responsive" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);max-height:595px;max-width:300px;border-radius: 5px;  margin-bottom: 20px;">-->
        <!--        </div>-->
        <!--      </div>-->
        <!--      <hr class="divider my-4" style="margin-bottom:10px;"/>-->
        <!--      <div style=" width: 80%;height: 150px;position: relative; margin-bottom:10px; ,margin-top:10px;">-->
        <!--        <div class="thumbnail">-->
        <!--            <img src="http://creativedzine.co.in/bwt/public/uploads/international/cr=w_600,h_300.webp" class="img-responsive" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);max-height:595px;max-width:300px;border-radius: 5px;  margin-bottom: 20px;">-->
        <!--        </div>-->
        <!--      </div>-->
        <!--      <hr class="divider my-4" style="margin-bottom:10px;"/>-->
        <!--      <div style=" width: 80%;height: 150px;position: relative; margin-bottom:10px; ,margin-top:10px;">-->
        <!--        <div class="thumbnail">-->
        <!--            <img src="http://creativedzine.co.in/bwt/public/uploads/international/cr=w_600,h_300.webp" class="img-responsive" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);max-height:595px;max-width:300px;border-radius: 5px;  margin-bottom: 20px;">-->
        <!--        </div>-->
        <!--      </div>-->
        <!--      <hr class="divider my-4" style="margin-bottom:10px;"/>-->
        <!--      <div style=" width: 80%;height: 150px;position: relative; margin-bottom:10px; ,margin-top:10px;">-->
        <!--        <div class="thumbnail">-->
        <!--            <img src="http://creativedzine.co.in/bwt/public/uploads/international/cr=w_600,h_300.webp" class="img-responsive" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);max-height:595px;max-width:300px;border-radius: 5px;  margin-bottom: 20px;">-->
        <!--        </div>-->
        <!--      </div>-->
        <!--      <hr class="divider my-4" style="margin-bottom:10px;"/>-->
        <!--</div>-->
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.nationalclass').click(function () {
            $('.weekly').hide();
            $('.national').show();
            $('.activee').css({
                "box-shadow": "rgb(122 16 75 / 65%) 0px 8px 24px"
            });
            $('.activeee').css({
                "box-shadow": "rgb(149 157 165 / 20%) 0px 8px 24px"
            });
        });

        $('.weeklyclass').click(function () {
            $('.weekly').show();
            $('.national').hide();
            $('.activee').css({
                "box-shadow": "rgb(149 157 165 / 20%) 0px 8px 24px"
            });
            $('.activeee').css({
                "box-shadow": "rgb(122 16 75 / 65%) 0px 8px 24px"
            });
        });
    });
</script>
<div id="auditions" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="">
                <div class="log-form">
                    @foreach (['danger', 'warning', 'success', 'info'] as $key)
                    @if(Session::has($key))
                    <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
                    @endif
                    @endforeach
                    <h2 class="d-flex">ALREADY REGISTERED? SIGN IN TO COMPLETE YOUR APPLICATION</h2>
                    <form method="get" action="{{ route('personalInfo')}}">
                        <p style="color:#000;margin-bottom:0px;font-weight:600; margin-top:10px;">Which competition
                            would you like to apply to? *</p>
                        <div class="checkbox">
                            <label><input type="radio" value="1" name="apply_competition" class="apply_type">
                                State & National Competition
                            </label>
                        </div>
                        <div class="checkbox">
                            <label><input type="radio" value="2" name="apply_competition" class="apply_type">
                                Weekly Buskers' Performances Competition
                            </label>
                        </div>
                        <div class="col-md-12 col-xs-12 form-group state">
                            <label style="color:#000;">State competition state:*</label>
                            <select name="state" class="form-control states">
                                <option value="">Select...</option>
                                <option value="10">California</option>
                                <option value="20">Illinois</option>
                                <option value="30">Louisiana</option>
                                <option value="40">Massachusetts</option>
                                <option value="50">New York</option>
                                <option value="60">Tennessee</option>
                                <option value="70">Texas</option>
                                <option value="80">Washington</option>
                            </select>
                        </div>
                        <script>
                            $(document).ready(function () {
                                $('.state').hide();
                                $('.apply_type').click(function () {
                                    var type = $(this).val();
                                    if (type == 1) {
                                        $(".states").prop('required', true);
                                        $('.state').show();
                                    } else if (type == 2) {
                                        $(".states").prop('required', false);
                                        $('.state').hide();
                                    }
                                });
                            });

                        </script>
                        <hr />
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn">Join</button>
                                <!-- <a class="forgot" href="#">Forgotten my password</a>-->
                            </div>
                        </div>
                    </form>
                </div>
                <!--end log form -->
            </div>
        </div>
    </div>
</div>
@endsection
