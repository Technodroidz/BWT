@extends('web.welcome')

@section('title','Community Circle')

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
    <div class="col-md-6">
            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addNew">Add New</a>
        </div>
    <div class="col-md-6 text-right form-group">
            <button onclick="goBack()" class="btn btn-success"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
</div>

<div class="wrap-height">
    @php 
    $all_users = Auth::guard('web_user')->user()->communities()->where(["status"=>"1"])->get();
    $users_group = $all_users->groupBy('staff_id')->sortKeys();
    @endphp
    @foreach ($users_group as $key=>$users)
    <div class="row">
        <div class="col-xl-12 posRel mar-0">
            <h4 class="slider_head">{{['','Friends','Family','Colleagues','','Sponsors','Partners'][$key]}}</h4>
            <span class="line-1"></span>
            <span class="line-2"></span>
        </div>
    </div>
    <div class="tcb-product-slider">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
               @foreach ($users->chunk(4) as $chunk)
                <div class="item {{$loop->index?'':'active'}}">
                    <div class="row">
                        @foreach ($chunk as $user)
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="material-card Pink">
                                <h2>
                                    <span>{{$user->name}}</span>
                                    <strong>
                                        <i class="fa fa-fw fa-star"></i>
                                        {{$user->position}}
                                    </strong>
                                </h2>
                                <div class="mc-content">
                                    <div class="img-container" data-toggle="modal" data-target="#myProfile">
                                        <img class="img-responsive" src="{{$user->image_url}}">
                                    </div>
                                    <!---->
                                    <div class="mc-description">
                                        {{$user->bio}}
                                    </div>
                                </div>
                                <a class="mc-btn-action">
                                    <i class="fa fa-bars"></i>
                                </a>
                                <div class="mc-footer">
                                    <a class="mc-btn-action" data-toggle="modal"
                                        data-target="#editNew{{$user->id}}"
                                        style="width:40px; height:40px; margin-left:10px; margin-right:5px;">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="fa fa-fw fa-facebook"></a>
                                    <a class="fa fa-fw fa-twitter"></a>
                                    <a class="fa fa-fw fa-linkedin"></a>
                                    <a class="fa fa-fw fa-google-plus"></a>
                                    <a class="mc2-btn-action" href="{{url('our_community_delete/'.$user->id)}}"
                                        style="width:40px; height:40px; margin-left:15px;">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </article>
                        </div> 
                        @endforeach
                    </div>
                </div>
               @endforeach               
            </div>
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
    @endforeach    
    <div class="row">
       <div class="col-xl-12 posRel mar-0">
          <h4 class="slider_head">Followers</h4>
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
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="material-card Pink">
                                  <h2>
                                      <span>R. Stacker</span>
                                      <strong>
                                          <i class="fa fa-fw fa-star"></i>
                                          Host Producer
                                      </strong>
                                  </h2>
                                  <div class="mc-content">
                                      <div class="img-container" data-toggle="modal" data-target="#myProfile">
                                          <img class="img-responsive" src="{{asset('assets\img\Robert Stacker 2.jpg')}}">
                                      </div>
                                      <div class="mc-description">
                                          Trendsetter from production to promoter to Fasion Design for the Rich & Famous
                                      </div>
                                  </div>
                                  <a class="mc-btn-action">
                                      <i class="fa fa-bars"></i>
                                  </a>
                                  <div class="mc-footer">
                                      <a class="mc-btn-action" style="width:40px; height:40px; margin-left:10px; margin-right:5px;">
                                      <i class="fa fa-pencil"></i>
                                  </a>
                                      <a class="fa fa-fw fa-facebook"></a>
                                      <a class="fa fa-fw fa-twitter"></a>
                                      <a class="fa fa-fw fa-linkedin"></a>
                                      <a class="fa fa-fw fa-google-plus"></a>
<a class="mc2-btn-action" style="width:40px; height:40px; margin-left:15px;">
                                      <i class="fa fa-trash"></i>
                                  </a>
                                  </div>
                            </article>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="material-card Pink">
                                  <h2>
                                      <span>R. Stacker</span>
                                      <strong>
                                          <i class="fa fa-fw fa-star"></i>
                                          Host Producer
                                      </strong>
                                  </h2>
                                  <div class="mc-content">
                                      <div class="img-container" data-toggle="modal" data-target="#myProfile">
                                          <img class="img-responsive" src="{{asset('assets\img\Robert Stacker 2.jpg')}}">
                                      </div>
                                      <div class="mc-description">
                                          Trendsetter from production to promoter to Fasion Design for the Rich & Famous
                                      </div>
                                  </div>
                                  <a class="mc-btn-action">
                                      <i class="fa fa-bars"></i>
                                  </a>
                                  <div class="mc-footer">
                                      <a class="mc-btn-action" style="width:40px; height:40px; margin-left:10px; margin-right:5px;">
                                      <i class="fa fa-pencil"></i>
                                  </a>
                                      <a class="fa fa-fw fa-facebook"></a>
                                      <a class="fa fa-fw fa-twitter"></a>
                                      <a class="fa fa-fw fa-linkedin"></a>
                                      <a class="fa fa-fw fa-google-plus"></a>
<a class="mc2-btn-action" style="width:40px; height:40px; margin-left:15px;">
                                      <i class="fa fa-trash"></i>
                                  </a>
                                  </div>
                            </article>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="material-card Pink">
                                  <h2>
                                      <span>R. Stacker</span>
                                      <strong>
                                          <i class="fa fa-fw fa-star"></i>
                                          Host Producer
                                      </strong>
                                  </h2>
                                  <div class="mc-content">
                                      <div class="img-container" data-toggle="modal" data-target="#myProfile">
                                          <img class="img-responsive" src="{{asset('assets\img\Robert Stacker 2.jpg')}}">
                                      </div>
                                      <div class="mc-description">
                                          Trendsetter from production to promoter to Fasion Design for the Rich & Famous
                                      </div>
                                  </div>
                                  <a class="mc-btn-action">
                                      <i class="fa fa-bars"></i>
                                  </a>
                                  <div class="mc-footer">
                                      <a class="mc-btn-action" style="width:40px; height:40px; margin-left:10px; margin-right:5px;">
                                      <i class="fa fa-pencil"></i>
                                  </a>
                                      <a class="fa fa-fw fa-facebook"></a>
                                      <a class="fa fa-fw fa-twitter"></a>
                                      <a class="fa fa-fw fa-linkedin"></a>
                                      <a class="fa fa-fw fa-google-plus"></a>
<a class="mc2-btn-action" style="width:40px; height:40px; margin-left:15px;">
                                      <i class="fa fa-trash"></i>
                                  </a>
                                  </div>
                            </article>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="material-card Pink">
                                  <h2>
                                      <span>R. Stacker</span>
                                      <strong>
                                          <i class="fa fa-fw fa-star"></i>
                                          Host Producer
                                      </strong>
                                  </h2>
                                  <div class="mc-content">
                                      <div class="img-container" data-toggle="modal" data-target="#myProfile">
                                          <img class="img-responsive" src="{{asset('assets\img\Robert Stacker 2.jpg')}}">
                                      </div>
                                      <div class="mc-description">
                                          Trendsetter from production to promoter to Fasion Design for the Rich & Famous
                                      </div>
                                  </div>
                                  <a class="mc-btn-action">
                                      <i class="fa fa-bars"></i>
                                  </a>
                                  <div class="mc-footer">
                                      <a class="mc-btn-action" style="width:40px; height:40px; margin-left:10px; margin-right:5px;">
                                      <i class="fa fa-pencil"></i>
                                  </a>
                                      <a class="fa fa-fw fa-facebook"></a>
                                      <a class="fa fa-fw fa-twitter"></a>
                                      <a class="fa fa-fw fa-linkedin"></a>
                                      <a class="fa fa-fw fa-google-plus"></a>
<a class="mc2-btn-action" style="width:40px; height:40px; margin-left:15px;">
                                      <i class="fa fa-trash"></i>
                                  </a>
                                  </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="material-card Pink">
                                  <h2>
                                      <span>R. Stacker</span>
                                      <strong>
                                          <i class="fa fa-fw fa-star"></i>
                                          Host Producer
                                      </strong>
                                  </h2>
                                  <div class="mc-content">
                                      <div class="img-container" data-toggle="modal" data-target="#myProfile">
                                          <img class="img-responsive" src="{{asset('assets\img\Robert Stacker 2.jpg')}}">
                                      </div>
                                      <div class="mc-description">
                                          Trendsetter from production to promoter to Fasion Design for the Rich & Famous
                                      </div>
                                  </div>
                                  <a class="mc-btn-action">
                                      <i class="fa fa-bars"></i>
                                  </a>
                                  <div class="mc-footer">
                                      <a class="mc-btn-action" style="width:40px; height:40px; margin-left:10px; margin-right:5px;">
                                      <i class="fa fa-pencil"></i>
                                  </a>
                                      <a class="fa fa-fw fa-facebook"></a>
                                      <a class="fa fa-fw fa-twitter"></a>
                                      <a class="fa fa-fw fa-linkedin"></a>
                                      <a class="fa fa-fw fa-google-plus"></a>
<a class="mc2-btn-action" style="width:40px; height:40px; margin-left:15px;">
                                      <i class="fa fa-trash"></i>
                                  </a>
                                  </div>
                            </article>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="material-card Pink">
                                  <h2>
                                      <span>R. Stacker</span>
                                      <strong>
                                          <i class="fa fa-fw fa-star"></i>
                                          Host Producer
                                      </strong>
                                  </h2>
                                  <div class="mc-content">
                                      <div class="img-container" data-toggle="modal" data-target="#myProfile">
                                          <img class="img-responsive" src="{{asset('assets\img\Robert Stacker 2.jpg')}}">
                                      </div>
                                      <div class="mc-description">
                                          Trendsetter from production to promoter to Fasion Design for the Rich & Famous
                                      </div>
                                  </div>
                                  <a class="mc-btn-action">
                                      <i class="fa fa-bars"></i>
                                  </a>
                                 <div class="mc-footer">
                                      <a class="mc-btn-action" style="width:40px; height:40px; margin-left:10px; margin-right:5px;">
                                      <i class="fa fa-pencil"></i>
                                  </a>
                                      <a class="fa fa-fw fa-facebook"></a>
                                      <a class="fa fa-fw fa-twitter"></a>
                                      <a class="fa fa-fw fa-linkedin"></a>
                                      <a class="fa fa-fw fa-google-plus"></a>
<a class="mc2-btn-action" style="width:40px; height:40px; margin-left:15px;">
                                      <i class="fa fa-trash"></i>
                                  </a>
                                  </div>
                            </article>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="material-card Pink">
                                  <h2>
                                      <span>R. Stacker</span>
                                      <strong>
                                          <i class="fa fa-fw fa-star"></i>
                                          Host Producer
                                      </strong>
                                  </h2>
                                  <div class="mc-content">
                                      <div class="img-container" data-toggle="modal" data-target="#myProfile">
                                          <img class="img-responsive" src="{{asset('assets\img\Robert Stacker 2.jpg')}}">
                                      </div>
                                      <div class="mc-description">
                                          Trendsetter from production to promoter to Fasion Design for the Rich & Famous
                                      </div>
                                  </div>
                                  <a class="mc-btn-action">
                                      <i class="fa fa-bars"></i>
                                  </a>
                                  <div class="mc-footer">
                                      <a class="mc-btn-action" style="width:40px; height:40px; margin-left:10px; margin-right:5px;">
                                      <i class="fa fa-pencil"></i>
                                  </a>
                                      <a class="fa fa-fw fa-facebook"></a>
                                      <a class="fa fa-fw fa-twitter"></a>
                                      <a class="fa fa-fw fa-linkedin"></a>
                                      <a class="fa fa-fw fa-google-plus"></a>
<a class="mc2-btn-action" style="width:40px; height:40px; margin-left:15px;">
                                      <i class="fa fa-trash"></i>
                                  </a>
                                  </div>
                            </article>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <article class="material-card Pink">
                                  <h2>
                                      <span>R. Stacker</span>
                                      <strong>
                                          <i class="fa fa-fw fa-star"></i>
                                          Host Producer
                                      </strong>
                                  </h2>
                                  <div class="mc-content">
                                      <div class="img-container" data-toggle="modal" data-target="#myProfile">
                                          <img class="img-responsive" src="{{asset('assets\img\Robert Stacker 2.jpg')}}">
                                      </div>
                                      <div class="mc-description">
                                          Trendsetter from production to promoter to Fasion Design for the Rich & Famous
                                      </div>
                                  </div>
                                  <a class="mc-btn-action">
                                      <i class="fa fa-bars"></i>
                                  </a>
                                  <div class="mc-footer">
                                      <a class="mc-btn-action" style="width:40px; height:40px; margin-left:10px; margin-right:5px;">
                                      <i class="fa fa-pencil"></i>
                                  </a>
                                      <a class="fa fa-fw fa-facebook"></a>
                                      <a class="fa fa-fw fa-twitter"></a>
                                      <a class="fa fa-fw fa-linkedin"></a>
                                      <a class="fa fa-fw fa-google-plus"></a>
                                        <a class="mc2-btn-action" style="width:40px; height:40px; margin-left:15px;">
                                      <i class="fa fa-trash"></i>
                                  </a>
                                  </div>
                            </article>
                        </div>
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
 </div>
 
 <div id="addNew" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" id="closemodal">&times;</button>
        <h4 class="modal-title">Add New Member</h4>
      </div>
      <form method="post" action="{{route('add-member')}}" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="fromDate">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" id="enterName" required>
                  </div>
                </div>
              </div>
              <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                    <label for="toDate">Select category:</label>
                    <select name="staff" required id="category" class="form-control">
                        <option value="">Select category</option>
                        <option value="1">Friends</option>
                        <option value="2">Family</option>
                        <option value="3">Colleagues</option>
                        <option value="5">Sponsors</option>
                        <option value="6">Partners</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4 depand" style="display:none">
                  <div class="form-group">
                    <label for="fromDate" class="chandat">Position:</label>
                    <input type="text" class="form-control" name="position" placeholder="Enter position" id="position">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="fromDate">Image:</label>
                    <input type="file" class="form-control" name="image">
                  </div>
                </div>
              </div>
              
              <div class="row"> 
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="fromDate">Bio:</label>
                    <textarea  class="form-control" name="bio" placeholder="Enter Bio" id="bio"></textarea>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <a href="#" type="button" class="btn btn-default" data-dismiss="modal">Close</a>
            <button type="submit" class="btn btn-success" >Add Member</button>
          </div>
      </form>
    </div>
  </div>
</div>
    @foreach ($all_users as $data)
    <div id="editNew{{$data->id}}" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" id="closemodal">&times;</button>
                    <h4 class="modal-title">Edit Member</h4>
                </div>
                <form method="post" action="{{route('edit-member')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="fromDate">Name:</label>
                                    <input type="text" class="form-control" name="name" value="{{$data->name}}"
                                        placeholder="Enter Name" id="enterName" required>
                                    <input type="hidden" class="form-control" name="id" value="{{$data->id}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="toDate">Select category:</label>
                                    <select name="staff" required id="category" class="form-control">
                                        <option value="">Select category</option>
                                        <option value="1" @php if($data->staff_id=='1'){ echo 'selected';}
                                            @endphp>Friends</option>
                                        <option value="2" @php if($data->staff_id=='2'){ echo 'selected';}
                                            @endphp>Family</option>
                                        <option value="3" @php if($data->staff_id=='3'){ echo 'selected';}
                                            @endphp>Colleagues</option>
                                        <option value="5" @php if($data->staff_id=='5'){ echo 'selected';}
                                            @endphp>Sponsors</option>
                                        <option value="6" @php if($data->staff_id=='6'){ echo 'selected';}
                                            @endphp>Partners</option>
                                    </select>
                                </div>
                            </div>
                            <script>
                                $(document).ready(function(){
                                      var dbdaat="{{$data->staff_id}}";
                                      if(dbdaat==1)
                                       {
                                           $('.depand{{$data->id}}').hide();
                                           $('#position{{$data->id}}').prop('required',false);
                                       }
                                       else if(dbdaat==2)
                                       {
                                           $('.chandat').html('Relation:');
                                           $('#position{{$data->id}}').attr('placeholder','Enter Relation');
                                           $('#position{{$data->id}}').prop('required',true);
                                           $('.depand{{$data->id}}').show();
                                       }
                                       else if(dbdaat==5 || dbdaat==6)
                                       {
                                           $('.chandat').html('Company Name:');
                                           $('#position{{$data->id}}').attr('placeholder','Company Name'); 
                                           $('#position{{$data->id}}').prop('required',true);
                                           $('.depand{{$data->id}}').show();
                                       }
                                      
                                    $('#category').change(function(){
                                       if($(this).val()==1)
                                       {
                                           $('.depand{{$data->id}}').hide();
                                           $('#position{{$data->id}}').prop('required',false);
                                       }
                                       else if($(this).val()==2)
                                       {
                                           $('.chandat').html('Relation:');
                                           $('#position{{$data->id}}').attr('placeholder','Enter Relation');
                                           $('#position{{$data->id}}').prop('required',true);
                                           $('.depand{{$data->id}}').show();
                                       }
                                       else if($(this).val()==5 || $(this).val()==6)
                                       {
                                           $('.chandat').html('Company Name:');
                                           $('#position{{$data->id}}').attr('placeholder','Company Name'); 
                                           $('#position{{$data->id}}').prop('required',true);
                                           $('.depand{{$data->id}}').show();
                                       }
                                    });
                                });
                                </script>
                            <div class="col-md-4 depand{{$data->id}}" style="display:none">
                                <div class="form-group">
                                    <label for="fromDate" class="chandat">Position:</label>
                                    <input type="text" class="form-control" value="{{$data->position}}" name="position"
                                        placeholder="Enter position" id="position{{$data->id}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="fromDate">Image:</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="fromDate">Bio:</label>
                                    <textarea class="form-control" name="bio" placeholder="Enter Bio"
                                        id="bio">{{$data->bio}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="fromDate">Image:</label>
                                    <input type="hidden" name="old_image" value="{{$data->image}}">
                                    <img class="img-responsive" src="{{asset('uploads/'.$data->image)}}"
                                        style="height: 200px;width: 200px;">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a href="#" type="button" class="btn btn-default" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>        
    @endforeach
</div>

<script>
    $(document).ready(function(){
        $('#category').change(function(){
           if($(this).val()==1)
           {
               $('.depand').hide();
               $('#position').prop('required',false);
           }
           else if($(this).val()==2)
           {
               $('.chandat').html('Relation:');
               $('#position').attr('placeholder','Enter Relation');
               $('#position').prop('required',true);
               $('.depand').show();
           }
           else if($(this).val()==5 || $(this).val()==6)
           {
               $('.chandat').html('Company Name:');
               $('#position').attr('placeholder','Company Name'); 
               $('#position').prop('required',true);
               $('.depand').show();
           }
        });
    });
    </script>
@endsection
