@extends('web.welcome')

@section('title','Library')

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
    <div class="col-md-12 text-right form-group">
            <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
</div>


<div class="wrap-height top30">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-folders">
         
          <!-- Folders Container -->
          <div class="card-body" id="foldersGroup">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active">Library</li>
            </ol>
            <div id="main-folders" class="d-flex align-items-stretch flex-wrap">
              <div class="row" style="width: 100%">
                @foreach ($categories as $category)
                <div class="col-md-6">
                  <div class="d-inline-flex" id="f">
                  
                   <div class="boxx">
                      <img src="http://54.153.36.130/uploads/library.jpg" class="img-responsive">
  
                      <div class="overlay">
                          <img src="http://54.153.36.130/uploads/ico1.png">
                        <h3>{{$category->name}}</h3>
                        <a href="{{route('show-detaill',$category->slug)}}"><i class="fa fa-paper-plane" aria-hidden="true"></i> View-more</a>
  
                      </div>
                   </div>
                 
                  </div>
                 </div>
                @endforeach
                
                
               </div>
              
             
             
              </div>
          </div>
          
               @foreach ($categories as $category)
                   
               <div class="card-body">
                <div class="row" style="width: 100%">
                    <div class="col-md-12">
                      <h4 class="title">{{$category->name}}</h4>
                    </div>
                 </div>
  
               <div class="row" style="width: 100%">
                
            @foreach ($category->categories  as $subcategory)
  
            <div class="col-md-3">
              @if ($subcategory->categories->count())
              <a href="{{route('show-detaill',$subcategory->slug)}}">
              @else
              <a href="{{route('library-content',$subcategory->slug)}}">                  
              @endif
                <div class="card-vd">
                    <div class="boxx bx">
                        <img src="http://54.153.36.130/uploads/library.jpg" class="img-responsive">
                        <div class="overlay">
                          <img src="http://54.153.36.130/uploads/ico3.png" style="width: 50px">
                        </div>
                    </div>
                    <div class="cont">
                        <strong>{{$subcategory->name}}</strong>
                    </div>
                </div>
              </a>
            </div>

          @endforeach
           </div>

               @endforeach

          </div>
        </div>
      </div>
    </div>
 </div>



@endsection
