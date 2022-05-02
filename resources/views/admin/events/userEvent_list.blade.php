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
      <h4 class="main-content-title tx-22 mg-b-1 mg-b-lg-1">Event</h4>
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
                <th class="wd-lg-20p"><span>Event Name</span></th>
                <th class="wd-lg-20p"><span>From</span></th>
                <th class="wd-lg-20p"><span>To</span></th>
                <th class="wd-lg-20p"><span>Venue</span></th>
                <th class="wd-lg-20p"><span>Status</span></th>
                <!-- <th class="wd-lg-20p"><span>Created At</span></th> -->
                <th class="wd-lg-20p"><span>Action</span></th>
                <!-- <th class="wd-lg-20p">Action</th> -->
              </tr>
            </thead>
            <tbody>
              @if(!empty($events))
              @foreach($events as $key => $row)
              <tr>
                  <td>{{ $events->firstItem() + $key }}</td>
                  <td>{{ $row->name ?? '-'  }}</td>
                {{--<td>
                       <img alt="avatar" class="rounded-circle avatar-md mr-2" src="{{ $row->thumbnail_url }}"> 
                  </td> --}} 
                  <td>{{ $row->from  }}</td>
                  <td>{{ $row->to  }}</td>
                  <td>{{ $row->venue  }}</td>
                  <td>

                                   @if($row->request_status==1)
                                      <span type="button" class="btns btn-primary">Pending</span>
                                    @elseif($row->request_status==2)
                                      <span class="badge badge-success">Accepted</span>
                                      @elseif($row->request_status==3)
                                     <span class="badge badge-danger">Rejected</span>
                                    @else
                                    
                                    @endif
                  
                
                </td>


                  <td>

                                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Action
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{route('admin.event.request-approve',$row->id)}}" onclick="return confirm('Are you sure?')">Approve</a>
                  <a class="dropdown-item" href="{{route('admin.event.request-reject',$row->id)}}" onclick="return confirm('Are you sure?')">Reject</a>
                  <!-- <a class="dropdown-item" href="{{ route('admin.events.edit',$row->id)}}" onclick="return confirm('Are you sure?')">Edit</a>
                  <a class="dropdown-item" href="{{ url('/admin/events/delete/'.$row->id) }}" onclick="return confirm('Are you sure?')">Delete</a>
                -->
                </div>
              </div>

               </td>
                
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>

        </div>
        {{ $events->links() }}
       
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
