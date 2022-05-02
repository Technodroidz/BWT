@extends('layouts.master')
@section('title') Admin | Course | Edit @endsection
@section('css') 
<!-- END: VENDOR CSS-->
<style type="text/css">
  .error{
    color: red !important; position: initial !important;
  }
</style>
@endsection
@section('content') 

<!-- BEGIN: Page Main-->
<!-- BEGIN: Page Main-->
<div id="main">
  <div class="row">
    <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
    <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
      <!-- Search for small screen-->
      <div class="container">
        <div class="row">
          <div class="col s10 m6 l6">
            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Course</span></h5>
            <ol class="breadcrumbs mb-0">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a>
              </li>
              <li class="breadcrumb-item"><a href="{{ route('admin.course.index') }}">Course</a>
              </li>
              <li class="breadcrumb-item active">Edit
              </li>
            </ol>
          </div>
            <div class="col s2 m6 l6"><a class="btn waves-effect waves-light breadcrumbs-btn right" href="{{ route('admin.course.index') }}" ><i class="material-icons hide-on-med-and-up">settings</i><span class="hide-on-small-onl">Back</span></a> 
            </div>
          </div>
        </div>
      </div>
      <div class="col s12">
        <div class="container">
          <div class="seaction"> 
            <div class="card">
              <div class="card-content">
                <p class="caption mb-0">Edit</p>
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
              </div>
            </div>

            <!--Basic Form-->

            <!-- jQuery Plugin Initialization -->
            <div class="row"> 
              <!-- Form with placeholder -->
              <div class="col s12 m12 l12 l6">
                <div id="placeholder" class="card card card-default scrollspy">
                  <div class="card-content">
                    <h4 class="card-title">Please fill carefully</h4>
                    <form method="post" id="add_state_form" action="{{ route('admin.course.update',$admissionClass->id) }}">
                      @method('PUT')
                      @csrf
                      <div class="row">
                        <div class="input-field col s12">
                          <input placeholder="Course Name here..." id="hindi_name" name="hindi_name" type="text" value="{{ $admissionClass->hindi_name }}">
                          <label for="name2">Hindi Name</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input placeholder="English Name here..." id="english_name" name="english_name" type="text"  value="{{ $admissionClass->english_name }}">
                          <label for="email">English Name</label>
                        </div>
                      </div> 
                        <div class="row">
                          <div class="input-field col s12">
                            <textarea placeholder="Description here..." id="description" name="description"
                            class="materialize-textarea">{{ $admissionClass->description }}</textarea>
                            <label for="message">Description</label>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                <i class="material-icons right">send</i>
                              </button>
                            </div>
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

    <script type="text/javascript">
      $(document).ready(function(){
      $('#add_state_form').validate({ // initialize the plugin
        rules: { 
          hindi_name: {
            required: true,               
          },
          english_name: {
            required: true,            
          }, 
        }, 
      });
     $('#add_state_form').on( 'focus', ':input', function(){
          $(this).attr( 'autocomplete', 'off' );
      });
    });
  </script>
  @endsection