@extends('layouts.admin')
@section('title') Admin | Member @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-users.css') }}">
<!-- END: VENDOR CSS-->
@endsection

@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
  <div class="left-content">
    <div>
      <h4 class="main-content-title tx-22 mg-b-1 mg-b-lg-1">Videos</h4>
    
    </div>
  </div>

  <div class="right-content">

      <div class="dropdown main-header-message right-toggle">
        <a class="nav-link pr-0" data-toggle="sidebar-right" data-target=".sidebar-right">
          <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line></svg>
        </a>
      </div>
    </div>

</div>
<!-- /breadcrumb -->

<!-- row -->

<!--Row-->
<div class="row row-sm">
  <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive userlist-table">


          <form class="form-horizontal"  method="post" id="add_video_form" action="{{ route('admin.videos.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row m-0">

            <div class="form-group col-sm-6">
              <label for="name"> Video Name</label>
              <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name" placeholder="Enter Name...">
            @error('name')
              <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group col-sm-6">
              <label for="position">Upload Video</label>
              <input type="file" class="form-control"  id="position"  value="{{old('video')}}" name="video"  required accept=".mp4, .m4v, .mov, .avi, .wmv,.flv, .mpg, .mpeg">
              @error('video')
              <span class="text-danger">{{$message}}</span>
            @enderror            
            </div>
            <div class="form-group col-sm-6">
              <label for="image">Upload thumbnail</label>
              <input type="file" class="form-control"  id="thumbnail"  value="{{old('thumbnail')}}" name="thumbnail" placeholder="Upload thumbnail">
              @error('thumbnail')
              <span class="text-danger">{{$message}}</span>
            @enderror 
            </div>
          
            <div class="form-group col-sm-6">
              <label for="remark">Video remark</label>
              <input type="text" class="form-control"  id="remark"  value="{{old('remark')}}" name="remark" placeholder="Enter remark">
              @error('remark')
              <span class="text-danger">{{$message}}</span>
            @enderror 
            </div>

            <div class="col-sm-6">
              <div class="input-field col s12"> 
                <label>Select Category</label>
                <select name="category_id" class="form-control" >
                  @foreach ($categories as $category )
                  <option value="{{$category->id}}" >{{$category->name}}</option>
                  @endforeach
                </select>
                @error('category_id')
                <span class="text-danger">{{$message}}</span>
              @enderror 
              </div>
            </div>

            <div class="col-sm-6">
              <div class="input-field col s12"> 
                <label>Select page reference</label>
                <select name="prefernce" class="form-control" >
                  
                  <option value="">Choose video page reference</option>
                  <option value="home" {{old('prefernce')=='home' ? 'selected':'' }}>  Home Page</option>
                  <option value="performance" {{old('prefernce')=="performance"?'selected':'' }}>Performance Page</option>
                  
                </select>
                @error('prefernce')
                <span class="text-danger">{{$message}}</span>
              @enderror 
              </div>
            </div>
            
          

          
          
            <div class="form-group col-sm-12  mb-0 mt-3 justify-content-end">
              <div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
      </div>
    </div>

      </form>


        </div>
       
      </div>
    </div>
  </div><!-- COL END -->
</div>


<!--/Sidebar-right-->
@endsection
