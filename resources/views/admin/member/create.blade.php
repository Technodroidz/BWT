@extends('layouts.admin')
@section('title') Admin | Member  |@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-users.css') }}">
<!-- END: VENDOR CSS-->
@endsection

@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
  <div class="left-content">
    <div>
      <h4 class="main-content-title tx-22 mg-b-1 mg-b-lg-1">{{ @$_GET['r'] ?? 'Members'}}</h4>
    
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


          <form class="form-horizontal"  method="post" action="{{route('admin.member.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row m-0">

            <div class="form-group col-sm-6">
              <label for="name"> Member Name</label>
              <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name" placeholder="Enter Member">
            @error('name')
              <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group col-sm-6">
              <label for="position">Member Position</label>
              <input type="text" class="form-control"  id="position"  value="{{old('position')}}" name="position" placeholder="Enter Position">
              @error('position')
              <span class="text-danger">{{$message}}</span>
            @enderror            
            </div>
            <div class="form-group col-sm-6">
              <label for="image">Member Image</label>
              <input type="file" class="form-control"  id="image"  value="{{old('image')}}" name="image" placeholder="Enter Image">
              @error('image')
              <span class="text-danger">{{$message}}</span>
            @enderror 
            </div>
          
            <div class="form-group col-sm-6">
              <label for="decription">Member Description</label>
              <input type="text" class="form-control"  id="decription"  value="{{old('decription')}}" name="decription" placeholder="Enter Description">
              @error('decription')
              <span class="text-danger">{{$message}}</span>
            @enderror 
            </div>
            <div class="form-group col-sm-6">
              <label for="facebook">Facebook Url</label>
              <input type="text" class="form-control"  id="facebook" value="{{old('social_links.facebook')}}" name="social_links[facebook]" placeholder="Facebook Url...">
              @error('social_links.facebook')
              <span class="text-danger">{{$message}}</span>
            @enderror 
            </div>
            <div class="form-group col-sm-6">
              <label for="twitter">Facebook Url</label>
              <input type="text" class="form-control"  id="twitter" value="{{old('social_links.twitter')}}" name="social_links[twitter]" placeholder="twitter Url...">
              @error('social_links.twitter')
              <span class="text-danger">{{$message}}</span>
            @enderror 
            </div>
            <div class="form-group col-sm-6">
              <label for="linkedin">Facebook Url</label>
              <input type="text" class="form-control"  id="linkedin" value="{{old('social_links.linkedin')}}" name="social_links[linkedin]" placeholder="linkedin Url...">
              @error('social_links.linkedin')
              <span class="text-danger">{{$message}}</span>
            @enderror 
            </div>

            <input type="hidden" class="form-control" value="{{ @$_GET['r'] }}" name="type" >

<!--           
            <div class="col-sm-6">
              <div class="input-field col s12"> 
                <label>Select Category</label>
                <select name="type" class="form-control" >
                  <option value="" >Choose your option</option>
                  <option value="Team Management" {{old('type')=='Team Management' ? 'selected':'' }}>  Team Management</option>
                  <option value="Producers" {{old('type')=='Producers' ? 'selected':'' }}>  Producers</option>
                  <option value="Host Producers" {{old('type')=='Host Producers' ? 'selected':'' }}> Host Producers</option>
                  <option value="Creative Partners" {{old('type')=='Creative Partners' ? 'selected':'' }}>  Creative Partners</option>
                  <option value="National’s Judges" {{old('type')=='National’s Judges' ? 'selected':'' }}>  National’s Judges</option>
                  <option value="State's Judges" {{old('type')=="State's Judges"?'selected':'' }}>State's Judges</option>
                  <option value="Focus Groups" {{old('type')=='Focus Groups'?'selected':''}}>Focus Groups</option>
                </select>
                @error('type')
                <span class="text-danger">{{$message}}</span>
              @enderror 
              </div>
            </div> -->
          
          
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
