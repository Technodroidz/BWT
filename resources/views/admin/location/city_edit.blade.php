@extends('layouts.master')
@section('title') Admin | City | Edit @endsection
@section('css') 
<!-- END: VENDOR CSS-->
<style type="text/css">
  .error{
    color: red !important;    position: initial !important;
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
            <h5 class="breadcrumbs-title mt-0 mb-0"><span>City</span></h5>
            <ol class="breadcrumbs mb-0">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a>
              </li>
              <li class="breadcrumb-item"><a href="{{ route('admin.city.index') }}">City</a>
              </li>
              <li class="breadcrumb-item active">Create
              </li>
            </ol>
          </div>
            <div class="col s2 m6 l6"><a class="btn waves-effect waves-light breadcrumbs-btn right" href="{{ route('admin.city.index') }}" ><i class="material-icons hide-on-med-and-up">settings</i><span class="hide-on-small-onl">Back</span></a> 
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
                    <form method="post" id="add_state_form" action="{{ route('admin.city.update',$city->id) }}">
                      @method('PUT')
                      @csrf
                      <div class="row">
                        <div class="input-field col s12">   
                          <select name="state_id" id="state_id" class="select2 browser-default">
                            <option value="" disabled selected>Select State</option>
                            @if(!empty($listData))
                              @foreach($listData as $key => $row)
                              <option value="{{ $row->id }}"  @if($city->state_id == $row->id) {{ 'selected' }} @endif >{{ $row->english_name }} - {{ $row->hindi_name }}</option>
                              @endforeach
                            @endif 
                          </select>
                          <!-- <label>Select Profile</label> -->
                        </div>
                        <div class="input-field col s12">
                          <input placeholder="City Hindi Name here..." id="hindi_name" name="hindi_name" type="text" value="{{ $city->hindi_name }}">
                          <label for="name2">Hindi Name</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input placeholder="English Name here..." id="english_name" name="english_name" type="text"  value="{{ $city->hindi_name }}">
                          <label for="email">English Name</label>
                        </div>
                      </div> 
                        <div class="row">
                          <div class="input-field col s12">
                            <textarea placeholder="Description here..." id="description" name="description"
                            class="materialize-textarea">{{ $city->description }}</textarea>
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

    <script type="text/javascript">
      $(document).ready(function(){
      $('#add_state_form').validate({ // initialize the plugin
        rules: { 
          city_id: {
            required: true,               
          },
          hindi_name: {
            required: true,               
          },
          english_name: {
            required: true,            
          }, 
        }, 
      });
      $(".select2").select2({
        dropdownAutoWidth: true,
        width: '100%'
      });
      $('#add_state_form').on( 'focus', ':input', function(){
          $(this).attr( 'autocomplete', 'off' );
      });
    });
  </script>
  @endsection