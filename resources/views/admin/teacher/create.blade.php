@extends('layouts.master')
@section('title') Admin | Teacher | Create @endsection

@section('css') 

<!-- END: VENDOR CSS-->
<style type="text/css">
  .error{
    color: red !important;position: initial !important;
  }
</style>
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/select2/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/select2/select2-materialize.css') }}">
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
            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Teacher </span></h5>
            <ol class="breadcrumbs mb-0">
              <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}">Admin</a>
              </li>
              <li class="breadcrumb-item">
                <a href="{{ route('admin.teacher.index') }}">Teacher </a>
              </li>
              <li class="breadcrumb-item active">Create </li>
            </ol>
          </div>
          <div class="col s2 m6 l6"><a class="btn waves-effect waves-light breadcrumbs-btn right" href="{{ route('admin.teacher.index') }}" ><i class="material-icons hide-on-med-and-up">settings</i><span class="hide-on-small-onl">Back</span></a>
          </div>
          </div>
        </div>
      </div>
       @include('admin.include.alert_msg')
      <div class="col s12">
        <div class="container">
          <div class="seaction"> 
            <!--Basic Form--> 
            <!-- jQuery Plugin Initialization -->
            <div class="row"> 
              <!-- Form with placeholder -->
              <div class="col s12 m12 l12 l6">
                <div id="placeholder" class="card card card-default scrollspy">
                  <div class="card-content"> 
                    <form method="post" id="add_state_form" action="{{ route('admin.teacher.store') }}" enctype="multipart/form-data">
                      @csrf 
                      <div class="row">
                        <div class="input-field col s6">
                          <input placeholder="Name here..." id="name" name="name" type="text"  value="{{ old('name') }}" >
                          <label for="name">Name</label>
                        </div>
                        <div class="col s6 input-field">
                          <input id="email" name="email" type="email" class="validate" value="{{ old('email') }}"
                          data-error=".errorTxt3">
                          <label for="email">E-mail</label>
                          <small class="errorTxt3"></small>
                        </div>
                      </div>
                     
                      <div class="row">  
                        <div class="col s6 file-field input-field">
                          <div class="btn float-right">
                            <span>Profile Image</span>
                            <input type="file" id="thumbnail" name="thumbnail" accept=".jpg,.png,.jpeg,.gif">
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate valid" type="text">
                          </div>
                        </div> 
                         <div class="col s16 input-field">
                          <input id="mobile" name="mobile" type="text" class="validate" value="{{ old('mobile') }}">
                          <label for="company">Mobile</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s6">   
                          <select name="language_id[]" id="language_id" class="select2 browser-default" multiple> 
                            @if(!empty($listData))
                              @foreach($listData as $key => $row)
                              <option value="{{ $row->id }}">{{ $row->name }}  </option>
                              @endforeach
                            @endif 
                          </select>
                          <!-- <label>Select Profile</label> -->
                        </div>
                        <div class="input-field col s6">   
                          <select name="category_id[]" id="category_id" class="select2 browser-default" multiple> 
                            @if(!empty($category))
                              @foreach($category as $key => $row)
                              <option value="{{ $row->id }}">{{ $row->name }}  </option>
                              @endforeach
                            @endif 
                          </select>
                          <!-- <label>Select Profile</label> -->
                        </div>
                      </div>
                      <div class="row"> 
                        <div class="col s6 input-field">
                          <input id="full_address" name="full_address" type="text" class="validate" value= "{{ old('full_address') }}">
                          <label for="company">Address</label>
                        </div>
                      </div>
                      <div class="row">

                        <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                          </button>
                        </div>
                      </div> 
                      </form>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
    <!-- END: Page Main--> 
    <a
    href="#"
    data-target="theme-cutomizer-out"
    class="btn btn-customizer pink accent-2 white-text sidenav-trigger theme-cutomizer-trigger"
    ><i class="material-icons">settings</i></a
    > 
    @endsection
    @section('script')  
    <script src="{{ asset('app-assets/vendors/jquery-validation/jquery.validate.min.js') }}">   </script> 
    <script src="{{ asset('app-assets/js/scripts/ui-alerts.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/select2/select2.full.min.js') }}"></script>

    <script type="text/javascript">
      $(document).ready(function(){
      $('#add_state_form').validate({ // initialize the plugin
        rules: { 
          name: {
            required: true,               
          },
          email: {
            required: true,   
            email: true,              
          }, 
          mobile: {
            required: true,            
            number: true,   
            maxlength: 10,          
          },  
          "category_id[]": {
            required: true,             
          }, 
          "language_id[]": {
            required: true,             
          },
        }, 
      });
      $('#add_state_form').on('focus', ':input', function(){
          $(this).attr('autocomplete', 'off' );
      });
    });
  function convertToSlug(str)
  {
    //replace all special characters | symbols with a space
    str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();
    
    // trim spaces at start and end of string
    str = str.replace(/^\s+|\s+$/gm,'');
    
    // replace space with dash/hyphen
    str = str.replace(/\s+/g, '-'); 
    document.getElementById("url").innerHTML= str;
    $('#slug').val(str); 
  }
  // Basic Select2 select
  $(".select2").select2({
      dropdownAutoWidth: true,
      placeholder: 'Select one...',
      width: '100%'
  });
  </script>
  @endsection