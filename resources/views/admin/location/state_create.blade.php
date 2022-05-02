@extends('layouts.master')
@section('title') Admin | State | Create @endsection

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
            <h5 class="breadcrumbs-title mt-0 mb-0"><span>State</span></h5>
            <ol class="breadcrumbs mb-0">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a>
              </li>
              <li class="breadcrumb-item"><a href="{{ route('admin.state.index') }}">State</a>
              </li>
              <li class="breadcrumb-item active">Create
              </li>
            </ol>
          </div>
          <div class="col s2 m6 l6"><a class="btn waves-effect waves-light breadcrumbs-btn right" href="{{ route('admin.state.index') }}" ><i class="material-icons hide-on-med-and-up">settings</i><span class="hide-on-small-onl">Back</span></a>
                 <!-- <div class="col s2 m6 l6"><a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#!" data-target="dropdown1"><i class="material-icons hide-on-med-and-up">settings</i><span class="hide-on-small-onl">Settings</span><i class="material-icons right">arrow_drop_down</i></a>
                <ul class="dropdown-content" id="dropdown1" tabindex="0">
                  <li tabindex="0"><a class="grey-text text-darken-2" href="user-profile-page.html">Profile<span class="new badge red">2</span></a></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a></li>
                  <li class="divider" tabindex="-1"></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="user-login.html">Logout</a></li>
                </ul>
              </div> -->

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
                    <h4 class="card-title">Please fill carefully</h4>
                    <form method="post" id="add_state_form" action="{{ route('admin.state.store') }}">
                      @csrf
                      <!-- <div class="row">
                        <div class="input-field col s12">
                          <input placeholder="State Name here..." id="hindi_name" name="hindi_name" type="text">
                          <label for="name2">Hindi Name</label>
                        </div>
                      </div> -->
                      <div class="row">
                        <div class="input-field col s12">
                          <input placeholder=" Name here..." id="english_name" name="english_name" type="text">
                          <label for="email"> Name</label>
                        </div>
                      </div>
                        <!-- <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="Description here" id="description" name="description" type="text">
                            <label for="password">Password</label>
                          </div>
                        </div> -->
                        <div class="row">
                          <div class="input-field col s12">
                            <textarea placeholder="Description here..." id="description" name="description"
                            class="materialize-textarea"></textarea>
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