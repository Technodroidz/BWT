@extends('layouts.admin')
@section('title') Admin | Events @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-users.css') }}">
<!-- END: VENDOR CSS-->
@endsection

@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
  <div class="left-content">
    <div>
      <h4 class="main-content-title tx-22 mg-b-1 mg-b-lg-1">Events Joinee users</h4>
     <!-- <a href="events/create" > <button type="button" class="btn btn-dark" style="position: absolute;right: 0;z-index: 9999;top: 76px;right: 103px;">
          Add New Events
         <i class="glyphicon glyphicon-plus"></i>
</button>
</a> -->
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
          <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
            <thead>
              <tr>
                <th class="wd-lg-20p"><span>id</span></th>
                <th class="wd-lg-20p"><span>Name</span></th>
                <th class="wd-lg-20p"><span>Email</span></th>
                <th class="wd-lg-20p"><span>Phone</span></th>
                <th class="wd-lg-20p"><span>Created_at</span></th>
               
              </tr>
            </thead>
            <tbody>
              @if(!empty($data))
              @foreach($data as $key => $row)
              <tr>
                  <td>{{ $data->firstItem() + $key }}</td>
                  <td>{{ $row->name ?? '-'  }}</td>
                {{--<td>
                       <img alt="avatar" class="rounded-circle avatar-md mr-2" src="{{ $row->thumbnail_url }}"> 
                  </td> --}} 
                  <td>{{ $row->email  }}</td>
                  <td>{{ $row->mobile  }}</td>
                  <td> {{ $row->created_at  }} </td>


                
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>

        </div>
        {{ $data->links() }}
       
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
    
        <form class="form-horizontal" action="{{url('admin/events')}}">
              <div class="form-group">
                <input type="text" name="name" value="{{request('name')}}" class="form-control" placeholder="Event Name">
              </div>
              <div class="form-group">
                <input type="text" name="venue" value="{{request('venue')}}" class="form-control" placeholder="Event Venue">
              </div>
              <div class="form-group mb-0 mt-3 justify-content-end">
                <div>
                  
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href={{url('admin/events')}} class="btn btn-secondary float-right">Reset</a>
                </div>
              </div>
            </form>
    </div>
  </div>
</div>
<!--/Sidebar-right-->
@endsection
