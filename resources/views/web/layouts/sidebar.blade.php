{{-- @extends('layouts.app')

@section('content') --}}

<div class="col-5 col-sm-4 col-md-3 col-xl-2 col-lg-2 sidenav-bg">
    <div class="logo-bg">
       <img class="img-responsive" src="{{asset('assets/img/use/smalllogo.png')}}">
    </div>
    <ul class="sidenav-duplicate">
        <!--home-->
       <li>
          <a href="{{url('/')}}">
             <div class="user list-style-none"><i class="fa fa-home" aria-hidden="true"></i> home
             </div>
          </a>
       </li>
         <!--About Us-->
       <li>
          <a href="{{url('/community-circle')}}">
             <div class="user list-style-none"><i class="fa fa-arrows" aria-hidden="true"></i> About Us
             </div>
          </a>
       </li>
       <!--Auditions-->
       <li>
          <a href="{{url('/auditions')}}">
             <div class="user list-style-none">
             <!-- <i class="fa fa-television" aria-hidden="true"></i> -->
           <i class="fa fa-id-card-o"></i>
              Auditions
             </div>
          </a>
       </li>

       <!--Judges-->
       <li>
          <a href="{{url('judges')}}">
             <div class="user list-style-none">
             <!-- <i class="fa fa-television" aria-hidden="true"></i> -->
             <i class="fa fa-user-o" aria-hidden="true"></i>
              Judges
             </div>
          </a>
       </li>
       @if (Auth::guard('web_user')->check())
       <!--channel-->

       @endif
       <!--Performances-->
       <li>
          <a href="{{route('studios')}}">
             <div class="user list-style-none"><i class="fa fa-television" aria-hidden="true"></i> Studios
             </div>
          </a>
       </li>
       <li>
          <a href="{{url('performance')}}">
             <div class="user list-style-none">
             <!-- <i class="fa fa-ravelry" aria-hidden="true"></i> -->
            <i class="fa fa-caret-square-o-right" aria-hidden="true"></i>
              Performances
             </div>
          </a>
       </li>
       <!--Events-->
       <li>
          <a href="{{url('/event')}}">
             <div class="user list-style-none"><i class="fa fa-calendar" aria-hidden="true"></i> Events
             </div>
          </a>
       </li>
       <!--Gallery-->
       <li>
          <a href="{{url('gallery')}}">
             <div class="user list-style-none"><i class="fa fa-picture-o" aria-hidden="true"></i> Gallery
             </div>
          </a>
       </li>
       <!--Busking Board-->
       <li>
          <a href="{{url('busking-board')}}">
             <div class="user list-style-none"><i class="fa fa-object-group" aria-hidden="true"></i>  Busking Board
             </div>
          </a>
       </li>
       <!--Trailers-->
       <li>
          <a href="{{url('trailers')}}">
             <div class="user list-style-none"><i class="fa fa-film" aria-hidden="true"></i> Trailers
             </div>
          </a>
       </li>
       <!--Library-->
       <li>
          <a href="{{url('library')}}">
             <div class="user list-style-none"><i class="fa fa-newspaper-o" aria-hidden="true"></i>  Library
             </div>
          </a>
       </li>
       <!--Settings-->
       <!-- <li>
          <a href="{{url('setting')}}">
             <div class="user list-style-none"><i class="fa fa-cog" aria-hidden="true"></i>Settings
             </div>
          </a>
       </li> -->

       <!--help-->
       <li>
          <a href="{{url('/help')}}">
             <div class="user list-style-none"><i class="fa fa-question-circle" aria-hidden="true"></i>help
             </div>
          </a>
       </li>
    </ul>
 </div>

 {{-- @endsection --}}
