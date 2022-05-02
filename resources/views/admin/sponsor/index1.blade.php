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
                <th class="wd-lg-20p"><span>image</span></th>
                <th class="wd-lg-20p"><span>Status</span></th>
                <th class="wd-lg-20p"><span>Created At</span></th>
                <th class="wd-lg-20p"><span>action</span></th>
              </tr>
            </thead>
            <tbody>
              @if(!empty($sponsors))
              @foreach($sponsors as $key => $row )              
              <tr>
                <td>{{ $key+1 }}</td>
                  <td>
                 <img alt="avatar" class="rounded-circle avatar-md mr-2" src="{{$row->image_url}}">
                  </td>
                <td>
                  <label for="{{ $row->id }}">
                    <input id="{{ $row->id }}" data-url="{{ route('admin.advertiser.changestatus')}}" name="onoffswitch" type="checkbox" data-id="{{ $row->id }}" <?= $row->status=='1' ? 'checked':'' ?> value="{{ $row->status }}">
                    <span class="lever"></span>
                    </label>

                </td>
                  <td>{{ changeDateFormat($row->created_at, 'M-d-Y') }}</td>
                  <td>                    
                      <a href="{{ route('admin.sponsor.edit',$row->id)}}">
                          <i class="far fa-pencil"></i>
                      </a>
                      <a href="{{ url('/admin/sponsor/delete/'.$row->id)}}" onclick="return confirm('Are you sure to delete this item?')">
                          <i class="fas fa-trash text-danger"></i>
                      </a>

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
<!--/Sidebar-right-->
@endsection
