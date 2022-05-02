@extends('layouts.admin')
@section('title') Admin | Judges @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-users.css') }}">
<!-- END: VENDOR CSS-->
@endsection

@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
  <div class="left-content">
    <div>
      <h4 class="main-content-title tx-22 mg-b-1 mg-b-lg-1">Judges</h4>

    </div>
  </div>

  @if(@$_GET['st'] == 1)
      <div class="alert alert-success" role="alert">
        You have successfully account Pending.
      </div>
     @endif

     @if(@$_GET['st'] == 2)
      <div class="alert alert-success" role="alert">
      You have successfully account Apporved.

      </div>
     @endif

     @if(@$_GET['st'] == 3)
      <div class="alert alert-success" role="alert">
      You have successfully account Rejected.

      </div>
     @endif

     @if(@$_GET['u'] == 4)
      <div class="alert alert-danger" role="alert">
      You have successfully account deleted.

      </div>
     @endif

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
        <table id="myTable" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>State</th>
            <th>City</th>
            <th>Education</th>
            <th>Requested</th>
            <!-- <th>status</th> -->
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

    @foreach($employees as $k=>$data)
        <tr>
            <td>{{ $k+1 }}</td>
            <td>{{ $data['userName'] }}</td>
            <td>{{ $data['state'] }}</td>
            <td>{{ $data['city'] }}</td>
            <td>{{ $data['education'] }}</td>
            <td>{{ date('d-m-Y', strtotime($data['created_at'])) }}</td>
            <!-- <td>
              @if($data['status'] == 1)
            <h6 style="color:black">Pending </h6>
            @endif

            @if($data['status'] == 2)
            <h6 style="color:blue">Approved </h6>
            @endif

            @if($data['status'] == 3)
            <h6 style="color:red">Rejected </h6>
            @endif

            </td> -->

            <td>
              <!-- <a href="#">Review</a> -->
              <!-- <a href="{{ url('admin/judges/reviewing/'.$data['user_id']) }}">Review</a> -->
              <a href="{{ url('admin/judges/reviewing/'.$data['user_id']) }}">View</a>
              <a href="{{ url('admin/judges/delete/'.base64_encode($data['user_id'])) }}" onclick="return confirm('Are you sure to delete this item?')">
                          <i class="fas fa-trash text-danger"></i>
                      </a>
            </td>
        </tr>
        @endforeach 
    </tbody>
</table>
        </div>
        <div class="m-2">
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

        <form class="form-horizontal" action="{{url('admin/judges')}}">
              <div class="form-group">
                <input type="text" name="name" value="{{request('name')}}" class="form-control" placeholder="Intern Name">
              </div>
              <div class="form-group">
                <input type="text" name="position" value="{{request('position')}}" class="form-control" placeholder="Intern Position">
              </div>
              <div class="form-group mb-0 mt-3 justify-content-end">
                <div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href={{url('admin/judges')}} class="btn btn-secondary float-right">Reset</a>
                </div>
              </div>
            </form>
    </div>
  </div>
</div>
<!--/Sidebar-right-->
@endsection
