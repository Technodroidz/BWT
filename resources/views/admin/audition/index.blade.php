@extends('layouts.admin')
@section('title',"Admin | Audition")

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-users.css') }}">
<!-- END: VENDOR CSS-->
@endsection

@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
  <div class="left-content">
    <div>
      <h4 class="main-content-title tx-22 mg-b-1 mg-b-lg-1">Audition List</h4>

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
    <div class="card" style="box-shadow: none;">
      <div class="card-body">
        <form class="form-horizontal" action="#">
          <div class="row row-sm">
              <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
              <div class="form-group" style="margin-bottom: 0px;">
                <input type="text" name="title" value="" class="form-control" placeholder=" Audition Title">
              </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
              <div class="form-group mb-0 justify-content-end" style="margin-bottom: 0px;">
                <div>

                  <button type="submit" class="btn btn-primary">Submit</button>

                </div>
              </div>
            </div>
          </div>
            </form>
      </div>
    </div>
  </div>
</div>


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
                <th class="wd-lg-20p"><span>State</span></th>
                <!-- <th class="wd-lg-20p"><span>Category</span></th>
                <th class="wd-lg-20p"><span>Sub Category</span></th> -->
                <th class="wd-lg-20p"><span>Email</span></th>
                <th class="wd-lg-20p"><span>Phone</span></th>
                <!-- <th class="wd-lg-20p"><span>Position/Rank</span></th> -->
                <th class="wd-lg-20p"><span>Created At</span></th>
                <th class="wd-lg-20p"><span>Status</span></th>

                <th class="wd-lg-20p">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($auditions as $key => $row )
              @php
              $checked = '';
              if ($row->active == 1) {
                $checked = 'checked';
              }
            @endphp

              <tr>
                <td>{{ $key+1 }}</td>
                  <td><a href="{{route('admin.user.show',$row->user_id)}}">{{ $row->name ?? '-' }}</a></td>
                  <td>{{ $row->state ?? '-' }}</td>
                  <!-- <td>{{ $row->category_name ?? '-' }}</td>
                  <td>{{ $row->sub_category_name ?? '-' }}</td> -->
                  <td>{{ $row->Email ?? '-' }}</td>
                  <td>{{ $row->CellPhone ?? '-' }}</td>
                  <!-- <td>{{ $row->position ?? '-' }}</td> -->

                  <td>{{ changeDateFormat($row->created_at, 'M-d-Y') }}</td>
                  <td>{{ $row->status ?? '-' }}</td>

                  <td>
                  <!-- <a  href="javascript:void(0)"
                    data-target="#model-{{$row->id}}" data-toggle="modal"><i class="fa fa-eye"></i></a> -->

                    @if($row['Email'] == 'abhinavkansal001@gmail.com' || $row['Email'] == 'shanknagar190@gmail.com' || $row['Email'] == 'vikash27hbk@gmail.com')
                    --
                    @else
                    <a href="{{ url('admin/audition/delete/'.base64_encode($row['user_id'])) }}" onclick="return confirm('Are you sure to delete this item?')">
                          <i class="fas fa-trash text-danger"></i>
                      </a>
                    @endif
                  </td>
              </tr>
              <div class="modal" id="model-{{$row->id}}">
                  <div class="modal-dialog modal-xl" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h6 class="modal-title">{{ $row->name ?? '-' }} Audition</h6>
                              <button aria-label="Close" class="close"
                                  data-dismiss="modal" type="button">
                                  <span aria-hidden="true">&times;</span></button>
                          </div>

                          <form action="{{route('admin.audition.update',$row)}}" class="form-horizontal" method="post">
                          <div class="modal-body">
                                    @csrf()
                                    @method('PUT')
                                  <div class="row">
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="Name"
                                                  disabled="disabled" value="{{$row->name}}" value="{{$row->name}}">
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="Age"
                                                  disabled="disabled" value="{{$row->age}}">
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="Street Address"
                                                  disabled="disabled" value="{{$row->StreetAddress}}">
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="Town/City"
                                                  disabled="disabled" value="{{$row->TownCity}}">
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="State"
                                                  disabled="disabled" value="{{$row->state}}">
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="Zip Code"
                                                  disabled="disabled" value="{{$row->ZipCode}}">
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="Country"
                                                  disabled="disabled" value="{{$row->country}}">
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="email" class="form-control" placeholder="Email"
                                                  disabled="disabled" value="{{$row->Email}}">
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="Cellphone"
                                                  disabled="disabled" value="{{$row->CellPhone}}">
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="HomePhone"
                                                  disabled="disabled" value="{{$row->HomePhone}}">
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="CmbActType"
                                                  disabled="disabled" value="{{$row->cmbActType}}">
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="CmbActMembers"
                                                  disabled="disabled" value="{{$row->cmbActMembers}}">
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="TxtProPerformerName"
                                                  disabled="disabled" value="{{$row->txtProPerformerName}}">
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="CmbHoursPerMonth"
                                                  disabled="disabled" value="{{$row->cmbHoursPerMonth}}">
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control"
                                                  placeholder="TxtHoursPerMonthOther" disabled="disabled" value="{{$row->txtHoursPerMonthOther}}">
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="CmbPerformanceType"
                                                  disabled="disabled" value="{{$row->cmbPerformanceType}}">
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="CmbBuskingLength"
                                                  disabled="disabled" value="{{$row->cmbBuskingLength}}">
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control"
                                                  placeholder="TxtBuskingLengthOther" disabled="disabled" value="{{$row->txtBuskingLengthOther}}">
                                          </div>

                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="mbPrivateEvents"
                                                  disabled="disabled" value="{{$row->cmbPrivateEvents}}">
                                          </div>

                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control"
                                                  placeholder="TxtPrivateEventsDetails" disabled="disabled" value="{{$row->txtPrivateEventsDetails}}">
                                          </div>

                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="Anniversaries"
                                                  disabled="disabled" value="{{$row->Anniversaries}}">
                                          </div>

                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="Birthdays Parties"
                                                  disabled="disabled" value="{{$row->Birthdays_Parties}}">
                                          </div>

                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control"
                                                  placeholder="Companies and Organizations Events" disabled="disabled" value="{{$row->Companies_and_Organizations_Events}}">
                                          </div>

                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control"
                                                  placeholder="Galleries and Restaurants" disabled="disabled" value="{{$row->Galleries_and_Restaurants}}">
                                          </div>

                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="Special Venues"
                                                  disabled="disabled" value="{{$row->Special_Venues}}">
                                          </div>

                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="Sports Events"
                                                  disabled="disabled" value="{{$row->Sports_Events}}">
                                          </div>

                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="Weddings"
                                                  disabled="disabled" value="{{$row->Weddings}}">
                                          </div>

                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control"
                                                  placeholder="Other Special Occasions" disabled="disabled" value="{{$row->Other_Special_Occasions}}">
                                          </div>

                                      </div>
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="Score" name="score" value="{{$row->score}}">
                                          </div>

                                      </div>
                                      {{-- <div class="col-sm-4">
                                          <div class="form-group">
                                              <input type="text" class="form-control" placeholder="Position/Rank" name="position" value="{{$row->position}}">
                                          </div>
                                      </div> --}}
                                  </div>
                                  <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <h6 class="card-title mb-1">Photo</h6>
                                           <img src="{{$row->image_url}}" alt="" width="200">
                                        </div>

                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <h6 class="card-title mb-1">Video</h6>
                                            @include('video',['src'=>$row->video_url,'height'=>150])
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-primary" type="submit">Submit</button>
                                    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                                </div>
                            </form>
                      </div>
                  </div>
              </div>
              @endforeach
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

        <form class="form-horizontal" action="{{url('admin/audition')}}">
              <div class="form-group">
                <input type="text" name="title" value="{{request('title')}}" class="form-control" placeholder=" Audition Title">
              </div>
              <div class="form-group mb-0 mt-3 justify-content-end">
                <div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href={{url('admin/audition')}} class="btn btn-secondary float-right">Reset</a>
                </div>
              </div>
            </form>
    </div>
  </div>
</div>
<!--/Sidebar-right-->
@endsection
