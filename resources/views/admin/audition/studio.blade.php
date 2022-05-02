@extends('layouts.admin')
@section('title',"Admin | Studio")

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-users.css') }}">
<!-- END: VENDOR CSS-->
@endsection

@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
  <div class="left-content">
    <div>
      <h4 class="main-content-title tx-22 mg-b-1 mg-b-lg-1">Studio List</h4>

    </div>
  </div>

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
                 <th class="wd-lg-20p"><span>Studio Name</span></th>
                <th class="wd-lg-20p"><span>Username</span></th>
                <th class="wd-lg-20p"><span>Usertype</span></th>
                <th class="wd-lg-20p"><span>Status</span></th>

                <th class="wd-lg-20p">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($channels as $key => $row )
              @php
              $checked = '';
              if ($row->status == 1) {
                $checked = 'Active';
              }else{
                $checked = 'Deactive';
             }
            @endphp

              <tr>
                <td>{{ $key+1 }}</td>
                  <td>{{ $row->name ?? '-' }}</td>
                  <td>{{ $row->username ?? '-' }}</td>
                  <td>{{ $row->user_type ?? '-' }}</td>
                  <td>{{ $checked }}</td>

                  <td>
                    <a href="{{ url('admin/audition/eradicate/'.base64_encode($row['id'])) }}" onclick="return confirm('Are you sure to delete this item?')">
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
@endsection
