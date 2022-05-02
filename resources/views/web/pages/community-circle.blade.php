@extends('web.welcome')

@section('title','About Us')

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

<div class="wrap-height">
    <!--Staff-->
    <div class="row">
       <div class="col-xl-12 posRel mar-0">
          <h2 class="slider_head">Management Team</h2>
          <span class="line-1"></span>
          <span class="line-2"></span>
       </div>
    </div>
    <div class="tcb-product-slider">
           <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                 <div class="item active">
                    <div class="row">
                    @if(count($teamMgt) > 0)
                    @foreach($teamMgt as $member)
                    

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="material-card Pink">
                                  <h2>
                                      <span>{{ $member->name }}</span>
                                      <strong>
                                          <i class="fa fa-fw fa-star"></i>
                                          {{ $member->position }}
                                      </strong>
                                  </h2>
                                  <div class="mc-content">
                                      <div class="img-container" data-toggle="modal" data-target="#myProfile">
                                          <img class="img-responsive" src="{{ url('uploads/'.$member->image) }}">
                                      </div>
                                      <div class="mc-description">
                                      {{ $member->decription }}
                               </div>
                                  </div>
                                  <a class="mc-btn-action">
                                      <i class="fa fa-bars"></i>
                                  </a>
                                  <div class="mc-footer">
                                      
                                      <a class="fa fa-fw fa-facebook"></a>
                                      <a class="fa fa-fw fa-twitter"></a>
                                      <a class="fa fa-fw fa-linkedin"></a>
                                      <a class="fa fa-fw fa-google-plus"></a>
                                  </div>
                            </article>
                        </div>
                        
                        @endforeach
                        @else
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="material-card Pink">
                                  <h2>
                                      <span>S Helmker</span>
                                      <strong>
                                          <i class="fa fa-fw fa-star"></i>
                                          Marketing Director
                                      </strong>
                                  </h2>
                                  <div class="mc-content">
                                      <div class="img-container" data-toggle="modal" data-target="#myProfile">
                                          <img class="img-responsive" src="{{asset('assets\img\Shane_S-1487_Web.jpg')}}">
                                      </div>
                                      <div class="mc-description">
                                        Marketing sales and business branding
                                        Nulla ut orci eget nisi mattis blandit eu eu nunc.
                                        Aliquam convallis sapien et commodo interdum.
                                        Cras sed sapien fringilla, elementum risus id, maximus sem.
                                      </div>
                                  </div>
                                  <a class="mc-btn-action">
                                      <i class="fa fa-bars"></i>
                                  </a>
                                  <div class="mc-footer">
                                      
                                      <a class="fa fa-fw fa-facebook"></a>
                                      <a class="fa fa-fw fa-twitter"></a>
                                      <a class="fa fa-fw fa-linkedin"></a>
                                      <a class="fa fa-fw fa-google-plus"></a>
                                  </div>
                            </article>
                        </div>
                        @endif
                                     </div>
                </div>
            </div>
            <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <svg width="44" height="60"><polyline points="30 10 10 30 30 50" stroke="rgba(0,0,0,0.5)" stroke-width="4" stroke-linecap="butt" fill="none" stroke-linejoin="round"></polyline></svg>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <svg width="44" height="60"><polyline points="14 10 34 30 14 50" stroke="rgba(0,0,0,0.5)" stroke-width="4" stroke-linecap="butt" fill="none" stroke-linejoin="round"></polyline></svg>
              </a>
        </div>
    </div>
     <!--Producers-->
    <div class="row">
       <div class="col-xl-12 posRel mar-0">
          <h2 class="slider_head">Producers</h2>
          <span class="line-1"></span>
          <span class="line-2"></span>
       </div>
    </div>
    <div class="tcb-product-slider">
           <div id="carousel-example-generic3" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                 <div class="item active">
                    <div class="row">
                    @if(count($producers) > 0)

                    @foreach($producers as $member)
                    

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="material-card Pink">
                                  <h2>
                                      <span>{{ $member->name }}</span>
                                      <strong>
                                          <i class="fa fa-fw fa-star"></i>
                                          {{ $member->position }}
                                      </strong>
                                  </h2>
                                  <div class="mc-content">
                                      <div class="img-container" data-toggle="modal" data-target="#myProfile">
                                          <img class="img-responsive" src="{{ url('uploads/'.$member->image) }}">
                                      </div>
                                      <div class="mc-description">
                                      {{ $member->decription }}
                               </div>
                                  </div>
                                  <a class="mc-btn-action">
                                      <i class="fa fa-bars"></i>
                                  </a>
                                  <div class="mc-footer">
                                      
                                      <a class="fa fa-fw fa-facebook"></a>
                                      <a class="fa fa-fw fa-twitter"></a>
                                      <a class="fa fa-fw fa-linkedin"></a>
                                      <a class="fa fa-fw fa-google-plus"></a>
                                  </div>
                            </article>
                        </div>
                        
                        @endforeach
                        @else
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="material-card Pink">
                                  <h2>
                                      <span>S Helmker</span>
                                      <strong>
                                          <i class="fa fa-fw fa-star"></i>
                                          Marketing Producers
                                      </strong>
                                  </h2>
                                  <div class="mc-content">
                                      <div class="img-container" data-toggle="modal" data-target="#myProfile">
                                          <img class="img-responsive" src="{{asset('assets\img\Shane_S-1487_Web.jpg')}}">
                                      </div>
                                      <div class="mc-description">
                                        Marketing sales and business branding
                                        
                                      </div>
                                  </div>
                                  <a class="mc-btn-action">
                                      <i class="fa fa-bars"></i>
                                  </a>
                                  <div class="mc-footer">
                                      
                                      <a class="fa fa-fw fa-facebook"></a>
                                      <a class="fa fa-fw fa-twitter"></a>
                                      <a class="fa fa-fw fa-linkedin"></a>
                                      <a class="fa fa-fw fa-google-plus"></a>
                                  </div>
                            </article>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic3" role="button" data-slide="prev">
              <svg width="44" height="60"><polyline points="30 10 10 30 30 50" stroke="rgba(0,0,0,0.5)" stroke-width="4" stroke-linecap="butt" fill="none" stroke-linejoin="round"></polyline></svg>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic3" role="button" data-slide="next">
              <svg width="44" height="60"><polyline points="14 10 34 30 14 50" stroke="rgba(0,0,0,0.5)" stroke-width="4" stroke-linecap="butt" fill="none" stroke-linejoin="round"></polyline></svg>
              </a>
        </div>
    </div>


       <!--Host Producers-->
    <div class="row">
       <div class="col-xl-12 posRel mar-0">
          <h2 class="slider_head">Host Producers</h2>
          <span class="line-1"></span>
          <span class="line-2"></span>
       </div>
    </div>
    <div class="tcb-product-slider">
           <div id="carousel-example-generice" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                 <div class="item active">
                    <div class="row">
                    @if(count($hproducers) > 0)
                    @foreach($hproducers as $member)
                    

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="material-card Pink">
                                  <h2>
                                      <span>{{ $member->name }}</span>
                                      <strong>
                                          <i class="fa fa-fw fa-star"></i>
                                          {{ $member->position }}
                                      </strong>
                                  </h2>
                                  <div class="mc-content">
                                      <div class="img-container" data-toggle="modal" data-target="#myProfile">
                                          <img class="img-responsive" src="{{ url('uploads/'.$member->image) }}">
                                      </div>
                                      <div class="mc-description">
                                      {{ $member->decription }}
                               </div>
                                  </div>
                                  <a class="mc-btn-action">
                                      <i class="fa fa-bars"></i>
                                  </a>
                                  <div class="mc-footer">
                                      
                                      <a class="fa fa-fw fa-facebook"></a>
                                      <a class="fa fa-fw fa-twitter"></a>
                                      <a class="fa fa-fw fa-linkedin"></a>
                                      <a class="fa fa-fw fa-google-plus"></a>
                                  </div>
                            </article>
                        </div>
                        
                        @endforeach
                        @else
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="material-card Pink">
                                  <h2>
                                      <span>S Helmker</span>
                                      <strong>
                                          <i class="fa fa-fw fa-star"></i>
                                          Marketing h host
                                      </strong>
                                  </h2>
                                  <div class="mc-content">
                                      <div class="img-container" data-toggle="modal" data-target="#myProfile">
                                          <img class="img-responsive" src="{{asset('assets\img\Shane_S-1487_Web.jpg')}}">
                                      </div>
                                      <div class="mc-description">
                                      
                                        Aliquam convallis sapien et commodo interdum.
                                        Cras sed sapien fringilla, elementum risus id, maximus sem.
                                      </div>
                                  </div>
                                  <a class="mc-btn-action">
                                      <i class="fa fa-bars"></i>
                                  </a>
                                  <div class="mc-footer">
                                      
                                      <a class="fa fa-fw fa-facebook"></a>
                                      <a class="fa fa-fw fa-twitter"></a>
                                      <a class="fa fa-fw fa-linkedin"></a>
                                      <a class="fa fa-fw fa-google-plus"></a>
                                  </div>
                            </article>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generice" role="button" data-slide="prev">
              <svg width="44" height="60"><polyline points="30 10 10 30 30 50" stroke="rgba(0,0,0,0.5)" stroke-width="4" stroke-linecap="butt" fill="none" stroke-linejoin="round"></polyline></svg>
              </a>
              <a class="right carousel-control" href="#carousel-example-generice" role="button" data-slide="next">
              <svg width="44" height="60"><polyline points="14 10 34 30 14 50" stroke="rgba(0,0,0,0.5)" stroke-width="4" stroke-linecap="butt" fill="none" stroke-linejoin="round"></polyline></svg>
              </a>
        </div>
    </div>
    
    <!--Interns-->
    <div class="row">
       <div class="col-xl-12 posRel mar-0">
          <h2 class="slider_head"> Our Interns</h2>
          <span class="line-1"></span>
          <span class="line-2"></span>
       </div>
    </div>
    <div class="tcb-product-slider">
           <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                 <div class="item active">
                    <div class="row">


                    @if(count($internships) > 0)
                    @foreach($internships as $member)
                    

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="material-card Pink">
                                  <h2>
                                      <span>{{ $member->name }}</span>
                                      <strong>
                                          <i class="fa fa-fw fa-star"></i>
                                          {{ $member->position }}
                                      </strong>
                                  </h2>
                                  <div class="mc-content">
                                      <div class="img-container" data-toggle="modal" data-target="#myProfile">
                                          @if(!empty($member->image))
                                          <img class="img-responsive" src="{{ url('uploads/'.$member->image) }}">
                                          @else
                                          <img class="img-responsive" src="{{asset('assets\img\asian-lady.jpg')}}">

                                          @endif
                                      </div>
                                      <div class="mc-description">
                                      {{ $member->decription }}
                               </div>
                                  </div>
                                  <a class="mc-btn-action">
                                      <i class="fa fa-bars"></i>
                                  </a>
                                  <div class="mc-footer">
                                      
                                      <a class="fa fa-fw fa-facebook"></a>
                                      <a class="fa fa-fw fa-twitter"></a>
                                      <a class="fa fa-fw fa-linkedin"></a>
                                      <a class="fa fa-fw fa-google-plus"></a>
                                  </div>
                            </article>
                        </div>
                        
                        @endforeach
                        @else
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="material-card Pink">
                                  <!-- <h2>
                                      <span>S Helmker</span>
                                      <strong>
                                          <i class="fa fa-fw fa-star"></i>
                                          Intern da
                                      </strong>
                                  </h2> -->
                                  <div class="mc-content">
                                      <!-- <div class="img-container" data-toggle="modal" data-target="#myProfile">
                                          <img class="img-responsive" src="{{asset('assets\img\Shane_S-1487_Web.jpg')}}">
                                      </div>
                                      <div class="mc-description">
                                       
                                        Cras sed sapien fringilla, elementum risus id, maximus sem.
                                      </div> -->
                                  </div>
                                  <!-- <a class="mc-btn-action">
                                      <i class="fa fa-bars"></i>
                                  </a> -->
                                  <div class="mc-footer">
                                      
                                      <!-- <a class="fa fa-fw fa-facebook"></a>
                                      <a class="fa fa-fw fa-twitter"></a>
                                      <a class="fa fa-fw fa-linkedin"></a>
                                      <a class="fa fa-fw fa-google-plus"></a> -->
                                  </div>
                            </article>
                        </div>
                        @endif
                        
                    </div>
                </div>
            </div>
            <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
              <svg width="44" height="60"><polyline points="30 10 10 30 30 50" stroke="rgba(0,0,0,0.5)" stroke-width="4" stroke-linecap="butt" fill="none" stroke-linejoin="round"></polyline></svg>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
              <svg width="44" height="60"><polyline points="14 10 34 30 14 50" stroke="rgba(0,0,0,0.5)" stroke-width="4" stroke-linecap="butt" fill="none" stroke-linejoin="round"></polyline></svg>
              </a>
        </div>
    </div>
   
 
    <!--Creative Partners-->
    <div class="row">
       <div class="col-xl-12 posRel mar-0">
          <h2 class="slider_head">Crew Production Team</h2>
          <span class="line-1"></span>
          <span class="line-2"></span>
       </div>
    </div>
    <div class="tcb-product-slider">
           <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                 <div class="item active">
                    <div class="row">
                    @if(count($crew) > 0)
                    @foreach($crew as $member)
                    

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="material-card Pink">
                                  <h2>
                                      <span>{{ $member->name }}</span>
                                      <strong>
                                          <i class="fa fa-fw fa-star"></i>
                                          {{ $member->position }}
                                      </strong>
                                  </h2>
                                  <div class="mc-content">
                                      <div class="img-container" data-toggle="modal" data-target="#myProfile">
                                          <img class="img-responsive" src="{{ url('uploads/'.$member->image) }}">
                                      </div>
                                      <div class="mc-description">
                                      {{ $member->decription }}
                               </div>
                                  </div>
                                  <a class="mc-btn-action">
                                      <i class="fa fa-bars"></i>
                                  </a>
                                  <div class="mc-footer">
                                      
                                      <a class="fa fa-fw fa-facebook"></a>
                                      <a class="fa fa-fw fa-twitter"></a>
                                      <a class="fa fa-fw fa-linkedin"></a>
                                      <a class="fa fa-fw fa-google-plus"></a>
                                  </div>
                            </article>
                        </div>
                        
                        @endforeach
                        @else
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="material-card Pink">
                                  <!-- <h2>
                                      <span>S Helmker</span>
                                      <strong>
                                          <i class="fa fa-fw fa-star"></i>
                                          Marketing h host
                                      </strong>
                                  </h2> -->
                                  <div class="mc-content">
                                      <!-- <div class="img-container" data-toggle="modal" data-target="#myProfile">
                                          <img class="img-responsive" src="{{asset('assets\img\Shane_S-1487_Web.jpg')}}">
                                      </div>
                                      <div class="mc-description">
                                      
                                        Aliquam convallis sapien et commodo interdum.
                                        Cras sed sapien fringilla, elementum risus id, maximus sem.
                                      </div> -->
                                  </div>
                                  <!-- <a class="mc-btn-action">
                                      <i class="fa fa-bars"></i>
                                  </a> -->
                                  <div class="mc-footer">
<!--                                       
                                      <a class="fa fa-fw fa-facebook"></a>
                                      <a class="fa fa-fw fa-twitter"></a>
                                      <a class="fa fa-fw fa-linkedin"></a>
                                      <a class="fa fa-fw fa-google-plus"></a> -->
                                  </div>
                            </article>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev">
              <svg width="44" height="60"><polyline points="30 10 10 30 30 50" stroke="rgba(0,0,0,0.5)" stroke-width="4" stroke-linecap="butt" fill="none" stroke-linejoin="round"></polyline></svg>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next">
              <svg width="44" height="60"><polyline points="14 10 34 30 14 50" stroke="rgba(0,0,0,0.5)" stroke-width="4" stroke-linecap="butt" fill="none" stroke-linejoin="round"></polyline></svg>
              </a>
        </div>
    </div>
    
    
    
 </div>
@endsection
