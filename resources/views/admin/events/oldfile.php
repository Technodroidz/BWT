@extends('layouts.master')
@section('title') Admin | Events | Create @endsection

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
            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Events</span></h5>
            <ol class="breadcrumbs mb-0">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a>
              </li>
              <li class="breadcrumb-item"><a href="{{ route('admin.events') }}">Events</a>
              </li>
              <li class="breadcrumb-item active">Create
              </li>
            </ol>
          </div>
          <div class="col s2 m6 l6">
              <a class="btn waves-effect waves-light breadcrumbs-btn right"
              href="{{ route('admin.events') }}" ><i class="material-icons hide-on-med-and-up">settings</i><span class="hide-on-small-onl">Back</span></a>

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
                    <form method="post" id="add_state_form" action="{{ route('admin.events.store') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="input-field col s12">
                          <input placeholder="Name here..." id="name" name="name" type="text" onkeyup="convertToSlug(this.value)" >
                          <label for="name"> Event Name</label>
                          <p class="small">{{url('/')}}/<span id="url"></span></p>
                        <input type="hidden" class="form-control" id="slug" value="" name="slug" ></div>
                      </div>

                      <div class="row">
                          <div class="input-field col s6">
                            <input type="text" name="event_from" class="datepicker">
                            <label for="event_from">From</label>
                          </div>

                          <div class="input-field col s6">
                            <input type="text" name="event_to" class="datepicker">
                            <label for="event_to">To</label>
                          </div>
                      </div>


                      <div class="row">
                        <div class="input-field col s12">
                          <label for="name"> Event Description</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea class="ckeditor form-control" name="event_description" required></textarea>
                        </div>
                      </div>

                        <div class="row">

                          {{-- <input type="hidden" name="position" id="position" value=""> --}}
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit">Submit
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
          name: {
            required: true,
          },
          parent_id: {
            required: true,
          },
        },
      });
      $('#add_state_form').on('focus', ':input', function(){
          $(this).attr('autocomplete', 'off' );
      });

      $('#parent_id').on('change',function(){
        var pos = $('option:selected', this).attr('labelVal');
        $('#position').val(pos);
      })
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


  </script>
  @endsection
