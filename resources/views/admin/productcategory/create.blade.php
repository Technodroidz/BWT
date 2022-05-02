@extends('layouts.admin')
@section('title') Admin | Product Category Page | Create @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-users.css') }}">
<!-- END: VENDOR CSS-->
@endsection

@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
  <div class="left-content">
    <div>
      <h4 class="main-content-title tx-22 mg-b-1 mg-b-lg-1">Product Category List</h4>
    
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


          <form class="form-horizontal"  method="post" action="{{ route('admin.product-category.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row m-0">

            <div class="form-group col-sm-12">
              <label for="name">Product Name</label>
              <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name" placeholder="Enter Name">
            @error('name')
              <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group col-sm-12">
              <label for="position">Position</label>
              <input type="text" class="form-control"  id="position"  value="{{old('position')}}" name="position" placeholder="Enter Position">
              @error('position')
              <span class="text-danger">{{$message}}</span>
            @enderror            
            </div>

            <div class="form-group col-sm-12">
              <label for="thumbnail">Thumbnail</label>
              <input type="file" class="form-control"  id="thumbnail"  accept="image/png, image/gif, image/jpeg" value="{{old('thumbnail')}}" name="thumbnail" >
              @error('thumbnail')
              <span class="text-danger">{{$message}}</span>
            @enderror            
            </div>


            

            <div class="input-field col s12">
                <label for="parent_id">Select Parent ID</label>
              <select name="parent_id" id="parent_id" class="form-control">
                <option value="" disabled selected>Select Parent</option>
                 <option value="1" labelVal="0" >Main Category</option>
                @if(!empty($listData))
                  @foreach($listData as $key => $row)
                  <option style="font-weight: bolder;font-size: larger;" labelVal="{{ $row->position }}" value="{{ $row->id }}"  >{{ $row->name }}</option>
                    @foreach ($row->childrenCategories as $childCategory)   
                      @include('admin.category.child_category', ['child_category' => $childCategory]) 
                    @endforeach 
                  @endforeach
                @endif 
              </select>
            
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
