@extends('web.welcome')
@section('title','Busking Board')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
<style>
   .nav-item{
      letter-spacing: 2px;
      color: #000;
      border-radius: 5px;
      padding-right: 10px;
      width: 300px;
      cursor: pointer;
      font-size: 20px;
      border: none;
   }
   .nav-item.active{
      box-shadow: rgb(122 16 75 / 65%) 0px 8px 24px; text-align: center;
   }
   .nav-item a{
     border: none !important;
     padding: 10px 10px !important;
   }
   .tab-content > .active{
      opacity: 1;
   }
   .nav-link:hover {color: #555 !important}
</style>

 <!--<div class="row">
              <div class="col-md-12">
               <h4 class="slider_head">Busking Board</h4>
              </div>
              </div>-->
         <div class="ranking">
         <div class="row">
            <div class="col-md-6 p-0">
              <div class="ig-block">
              <h2 style="color: #fff;">Advertisement</h2>
               <center><a style="background-color:#5F2652;letter-spacing: 2px;color:#fff;margin-left: 0%;/* padding-left: 34%; *//* padding-bottom: 20px; *//* margin-bottom: 20px; */border-radius: 5px;padding:15px;font-size:16px;" href="{{url('sign-in')}}">Register</a></center> 
               <!-- <center><a style="background-color:#5F2652;letter-spacing: 2px;color:#fff;margin-left: 0%;/* padding-left: 34%; *//* padding-bottom: 20px; *//* margin-bottom: 20px; */border-radius: 5px;padding:15px;font-size:16px;" href="{{url('studio/signup')}}">Register</a></center> -->
                </div>
            </div>

            <div class="col-md-6">
              <div class="bill-board">
        <div class="row">
           <div class="col-md-2 p-0">

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

            
            <div class="col-md-3 p-0">

                <table cellspacing="0" cellpadding="0" width="100%">
                 <tr>
                   <th colspan="2"><i class="fa fa-cog" aria-hidden="true">
                       </i> <strong>Score</strong></th>
                 </tr>
                 @foreach ($videos as $video)
                 <tr>
                   <td>NA</td>
                 </tr>
                 @endforeach
                 @foreach (range($videos->count()+1,10) as $item)
                     <tr>
                       <td>NA</td>
                     </tr>
                 @endforeach
                </table>

               </div>

             <div class="col-md-3 p-0">


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

           

        </div>
      </div>
            </div>

        </div>
      </div>
<br><br>
@php
$likes = auth()->guard('web_user')->user()?auth()->guard('web_user')->user()->likes()->pluck('video_id'):collect([]);
@endphp
<div class="rbusking">
   <ul class="nav nav-tabs" id="myTab" role="tablist" style="display: flex;
   justify-content: space-between;border: none;">
      @foreach ($categories as $sub)
      <li class="nav-item {{$loop->index?'':'active'}}">
        <a class="nav-link" id="home-{{$loop->index}}" data-toggle="tab"
         href="#home{{$loop->index}}" role="tab" aria-controls="home" aria-selected="true">{{$sub->name}}</a>
      </li>
      @endforeach
    </ul>
</div>
<div class="tab-content mt-2">
   @foreach ($categories as $sub)
   <div class="tab-pane fade {{$loop->index?'':'active'}}" id="home{{$loop->index}}"
       role="tabpanel" aria-labelledby="home-{{$loop->index}}">
      @foreach ($sub->categories as $category)
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
                                      <div class="col-md-4 col-xs-12 form-group" data-aos="fade-up"
                                          data-aos-delay="100">
                                          @include('video-user',['likes'=>$likes,'video'=>$video])
                                      </div>
                                      @endforeach
                                  </div>
                              </div>
                              @endforeach
                          </div>
                          <!-- Controls -->
                          <a class="left carousel-control" href="#carousel-example-generic" role="button"
                              data-slide="prev">
                              <svg width="44" height="60">
                                  <polyline points="30 10 10 30 30 50" stroke="rgba(0,0,0,0.5)" stroke-width="4"
                                      stroke-linecap="butt" fill="none" stroke-linejoin="round"></polyline>
                              </svg>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" role="button"
                              data-slide="next">
                              <svg width="44" height="60">
                                  <polyline points="14 10 34 30 14 50" stroke="rgba(0,0,0,0.5)" stroke-width="4"
                                      stroke-linecap="butt" fill="none" stroke-linejoin="round"></polyline>
                              </svg>
                          </a>
                      </div>
                  </div>
            </div>

         </div>
         @if ($loop->index==2)



         @endif
      @endforeach
   </div>
   @endforeach
 </div>
@endsection
