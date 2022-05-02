@extends('layouts.admin')
@section('title') Admin | Sponsors @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-users.css') }}">
<!-- END: VENDOR CSS-->
@endsection

@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
  <div class="left-content">
    <div>
      <h4 class="main-content-title tx-22 mg-b-1 mg-b-lg-1">Sponsors</h4>

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
            <th>Business Name</th>
            <th>Requested</th>
            <th>status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

    @foreach($sponsors as $k=>$data)
        <tr>
            <td>{{ $k+1 }}</td>
            <td>{{ $data['userName'] }}</td>
            <td>{{ $data['state'] }}</td>
            <td>{{ $data['city'] }}</td>
            <td>{{ $data['business_name'] }}</td>
            <td>{{ date('d-m-Y', strtotime($data['created_at'])) }}</td>
            <td>
              @if($data['status'] == 1)
            <h6 style="color:black">Pending </h6>
            @endif

            @if($data['status'] == 2)
            <h6 style="color:blue">Approved </h6>
            @endif

            @if($data['status'] == 3)
            <h6 style="color:red">Rejected </h6>
            @endif

            </td>

            <td>
              <!-- <a href="#">Review</a> -->
              <a href="{{ url('admin/sponsor/reviewing/'.$data['user_id']) }}">Review</a>

              <a href="{{ url('admin/sponsor/delete/'.base64_encode($data['user_id'])) }}" onclick="return confirm('Are you sure to delete this item?')">
                          <i class="fas fa-trash text-danger"></i>
                      </a>
            </td>
        </tr>
        @endforeach 
    </tbody>
</table>
        </div>
      </div>
    </div>
  </div><!-- COL END -->
</div>
<!-- Sidebar-right-->
<!--/Sidebar-right-->
@endsection

