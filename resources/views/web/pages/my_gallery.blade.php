` @extends('web.welcome')
@section('title','Gallery')
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
    <div class="col-md-6">
            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addNew">Add New</a>
        </div>
    <div class="col-md-6 text-right form-group">
            <button onclick="goBack()" class="btn btn-success"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
</div>
<div class="wrap-height top30">
    <div class="row form-group">

<!-- Gallery start -->
<div class="gallery-container">
<div class="tz-gallery">
  <div class="row">
   @if (auth()->guard('web_user')->user())
      @foreach (auth()->guard('web_user')->user()->galleries as $gallery)
      <div class="col-sm-6 col-md-4 col-xs-12">
         <a class="lightbox" href="{{$gallery->image_url}}">
         <img src="{{$gallery->image_url}}" alt="Park" style="height: 524px !important;">
         </a>
      </div>
      @endforeach
    @endif     
  </div>
</div>
</div>
<!-- Gallery close -->
    </div>
 </div>
<div id="addNew" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" id="closemodal">&times;</button>
        <h4 class="modal-title">Add New Image</h4>
      </div>
      <form method="post" action="{{route('add-image-gallery')}}" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="fromDate">Image:</label>
                    <input type="file" class="form-control" name="image"  required>
                  </div>
                </div>
              </div>
              
          </div>
          <div class="modal-footer">
            <a href="#" type="button" class="btn btn-default" data-dismiss="modal">Close</a>
            <button type="submit" class="btn btn-success" >Submit</button>
          </div>
      </form>
    </div>

  </div>
</div>

@endsection
