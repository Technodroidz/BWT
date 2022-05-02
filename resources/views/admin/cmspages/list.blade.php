@extends('layouts.admin')
@section('title') Admin | CMS Pages @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-users.css') }}">
<!-- END: VENDOR CSS-->
@endsection

@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
  <div class="left-content">
    <div>
      <h4 class="main-content-title tx-22 mg-b-1 mg-b-lg-1">CMS Page List</h4>
    
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
      @include('admin.include.alert_msg')
      <div class="card-body">
        <div class="table-responsive userlist-table">
          <div class="col s2 m6 l6">
            <a class="btn waves-effect waves-light breadcrumbs-btn right"
            href="{{ route('admin.cms_pages.create')}}" id="add_edit_button">
            <span class="hide-on-small-onl">Add New Page</span>
          <!-- <i class="material-icons right">arrow_drop_down</i> -->
        </a>

      </div>
          <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
            <thead>
              <tr>

                <th class="wd-lg-20p"><span>id</span></th>
                <th class="wd-lg-20p"><span>Page Name</span></th>
                <th class="wd-lg-20p"><span>Page Description</span></th>
                <th class="wd-lg-20p"><span>Slug</span></th>
                <th class="wd-lg-20p"><span>Status</span></th>
                <th class="wd-lg-20p"><span>Created At</span></th>
                <th class="wd-lg-20p">Action</th>
              </tr>
            </thead>
            <tbody>
              @if(!empty($pages))
               @foreach($pages as $key => $row )
              <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $row->page_name ?? '-' }}</td>
                  <td>{{ $row->page_description ?? '-' }}</td>
                  <td>{{ $row->slug ?? '-' }}</td>
                  <td>  
                   
                      <label for="{{ $row->id }}">
                      <input id="{{ $row->id }}" data-url="{{ route('admin.cms_pages.changestatus')}}" name="onoffswitch" type="checkbox" data-id="{{ $row->id }}" <?= $row->status=='1' ? 'checked':'' ?> value="{{ $row->status }}">
                      <span class="lever"></span>
                      </label>
                   
                  </td>
                  
                  <td>{{ changeDateFormat($row->created_at, 'M-d-Y') }}</td>
                  
                  </td>

                  <td>                    
                      <a href="{{ route('admin.cms_pages.edit',$row->id)}}">
                          <i class="far fa-pencil"></i>
                      </a>
                      @if($row->slug != 'main_category')
                      <a href="{{ url('/admin/cms_pages/delete/'.$row->id) }}}" onclick="return confirm('Are you sure to delete this item?')">
                          <i class="fas fa-trash text-danger"></i>
                      </a>
                      @endif


                  </td>
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>
        </div>
        
      </div>
    </div>
  </div><!-- COL END -->
</div>
<!-- Sidebar-right-->
<div class="sidebar sidebar-right sidebar-animate">
  <div class="panel panel-primary card mb-0 box-shadow">
    <div class="tab-menu-heading border-0 p-3">
      <div class="card-title mb-0">Filter</div>
      <div class="card-options ml-auto">
        <a href="#" class="sidebar-remove"><i class="fe fe-x"></i></a>
      </div>
    </div>
    <div class="panel-body tabs-menu-body latest-tasks border-0">
    
        <form class="form-horizontal" action="{{url('admin/cms_pages')}}">
              <div class="form-group">
                <input type="text" name="page_name" value="{{request('page_name')}}" class="form-control" placeholder="Page Name">
              </div>

              <div class="form-group mb-0 mt-3 justify-content-end">
                <div>
                  
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href={{url('admin/cms_pages')}} class="btn btn-secondary float-right">Reset</a>
                </div>
              </div>
            </form>
    </div>
  </div>
</div>
<!--/Sidebar-right-->
@endsection
