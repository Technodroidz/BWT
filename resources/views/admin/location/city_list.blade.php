
@extends('layouts.master')
@section('title') Admin | City @endsection

@section('css')  
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-users.css') }}">
<!-- END: VENDOR CSS-->

<link rel="stylesheet" href="{{ asset('app-assets/vendors/select2/select2-materialize.css') }}" type="text/css">

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/form-select2.css') }}">
@endsection

@section('content')  
<!-- BEGIN: Page Main-->
<div id="main">
  <div class="row">
    <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
    <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
      <!-- Search for small screen-->
      <div class="container">
        <div class="row">
          <div class="col s10 m6 l6">
            <h5 class="breadcrumbs-title mt-0 mb-0"><span>City List</span></h5>
            <ol class="breadcrumbs mb-0">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a>
              </li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">City</a>
              </li>
              <li class="breadcrumb-item active">City List
              </li>
            </ol>
          </div>
          <div class="col s2 m6 l6"><a class="btn waves-effect waves-light breadcrumbs-btn right" href="{{ route('admin.city.create')}}" id="add_edit_button"><i class="material-icons hide-on-med-and-up">settings</i><span class="hide-on-small-onl">Add New</span>
            <!-- <i class="material-icons right">arrow_drop_down</i> -->
          </a>
          
        </div>
      </div>
    </div>
  </div>
  <div class="col s12">
    <div class="container">
      <!-- users list start -->
      <section class="users-list-wrapper section"> 
        <div class="users-list-table">
          <div class="card">
            <div class="card-content">
              @if($message=Session::get('success'))
              <div class="card-alert card green">
                <div class="card-content white-text">
                  <span class="card-title white-text darken-1"><i class="material-icons"></i>Success</span>
                  <p>{{ $message }}</p>
                </div> 
                <button type="button" class="close pink-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div> 
              @endif

              @if($errormessage=Session::get('errormsg'))
              <div class="card-alert card pink lighten-5">
                <div class="card-content pink-text darken-1">
                  <span class="card-title pink-text darken-1">Error</span>
                  <p>{{ $errormessage }}</p>
                </div> 
                <button type="button" class="close pink-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div> 
              @endif
              <div class="responsive-table">
                <table id="state_list" class="table">
                  <thead>
                    <tr>
                      <th></th>
                      <th>id</th>
                      <th>Hindi Name</th>
                      <th>English Name</th> 
                      <th>Description</th> 
                      <th>Status</th> 
                      <th>Action</th>
                      <th>Created At</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(!empty($listData))
                    @foreach($listData as $key => $row )
                    <tr>
                      <td></td>
                      <td>{{ $key+1 }}</td>
                      <td><a href="javascript:void(0)">{{ $row->hindi_name ?? '-' }}</a>
                      </td>
                      <td>{{ $row->english_name ?? '-' }}</td>
                      <td>{{ $row->description ?? '-' }}</td>  
                      <td><span class="chip green lighten-5">
                        <span class="green-text">Active</span>
                      </span>
                    </td>
                    <td>
                      <a href="{{ route('admin.city.edit',$row->id)}}"><i class="material-icons">edit</i></a><a href="{{ url('/admin/city/delete/'.$row->id) }}" onclick="return confirm('Are you sure to delete this item?')"><i class="material-icons dp48">delete_forever</i></a>
                    </td>
                    <td>{{ changeDateFormat($row->created_at, 'M-d-Y') }}</td>
                  </tr> 
                  @endforeach
                  @endif 
                </tbody>
              </table>
            </div>
            <!-- datatable ends -->
          </div>
        </div>
      </div>
    </section>
    <!-- users list ends -->  
    <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
      <ul>
        <li><a href="css-helpers.html" class="btn-floating blue"><i class="material-icons">help_outline</i></a></li>
        <li><a href="cards-extended.html" class="btn-floating green"><i class="material-icons">widgets</i></a></li>
        <li><a href="app-calendar.html" class="btn-floating amber"><i class="material-icons">today</i></a></li>
        <li><a href="app-email.html" class="btn-floating red"><i class="material-icons">mail_outline</i></a></li>
      </ul>
    </div>
  </div>
  <div class="content-overlay"></div>
</div>
</div>
</div>
<!-- END: Page Main-->

<!-- Theme Customizer -->

<a
href="#"
data-target="theme-cutomizer-out"
class="btn btn-customizer pink accent-2 white-text sidenav-trigger theme-cutomizer-trigger"
><i class="material-icons">settings</i></a
>


<!-- <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a> -->
<!-- Modal Structure -->
 <!--  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat btn btn-success">Agree</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat btn btn-success">Agree</a>
    </div>
  </div>
-->
@endsection
@section('script')  
<script src="{{ asset('app-assets/js/scripts/page-users.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/ui-alerts.js') }}"></script>

<script type="text/javascript">
  $(document).ready(function(){
      // $('.modal').modal();
      // $(document).on('click','#add_edit_button', function(){
      //   $('#modal1').modal('open');
      // })
    });
  </script>
  @endsection