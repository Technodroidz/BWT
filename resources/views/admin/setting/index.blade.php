{{-- extend layout --}}
@extends('layouts.master')

{{-- page title --}}
@section('title','Account Settings')

{{-- vendor styles --}}
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/select2/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/select2/select2-materialize.css')}}">
 
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/page-account-settings.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
@endsection

{{-- page content --}}
@section('content')
<!-- Account settings -->
 <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before blue-grey lighten-5"></div>
            <div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s10 m6 l6 breadcrumbs-left">
                            <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>Account Settings</span></h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="{{url('admin')}}">Admin</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Account Settings
                                </li>
                            </ol>
                        </div>
                        <div class="col s2 m6 l6"><a class="btn btn-floating dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#!" data-target="dropdown1"><i class="material-icons">expand_more </i><i class="material-icons right">arrow_drop_down</i></a>
                            <ul class="dropdown-content" id="dropdown1" tabindex="0">
                                <li tabindex="0"><a class="grey-text text-darken-2" href="user-profile-page.html">Profile<span class="new badge red">2</span></a></li>
                                <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a></li>
                                <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a></li>
                                <li class="divider" tabindex="-1"></li>
                                <li tabindex="0"><a class="grey-text text-darken-2" href="user-login.html">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <!-- Account settings -->
                    <section class="tabs-vertical mt-1 section">
                        <div class="row">
                            <div class="col l4 s12">
                                <!-- tabs  -->
                                <div class="card-panel">
                                    <ul class="tabs">
                                        <li class="tab">
                                            <a href="#general">
                                                <i class="material-icons">brightness_low</i>
                                                <span>General</span>
                                            </a>
                                        </li>
                                        <li class="tab">
                                            <a href="#change-password">
                                                <i class="material-icons">lock_open</i>
                                                <span>Amazon Details</span>
                                            </a>
                                        </li>
                                        <li class="tab">
                                            <a href="#flipkart__section">
                                                <i class="material-icons">lock_open</i>
                                                <span> Flipkart Details</span>
                                            </a>
                                        </li>
                                        <li class="tab">
                                            <a href="#ebay__section">
                                                <i class="material-icons">lock_open</i>
                                                <span> Ebay Details</span>
                                            </a>
                                        </li>
                                        <!-- <li class="tab">
                                            <a href="#info">
                                                <i class="material-icons">error_outline</i>
                                                <span> Info</span>
                                            </a>
                                        </li> -->
                                        <li class="tab">
                                            <a href="#social-link">
                                                <i class="material-icons">chat_bubble_outline</i>
                                                <span>Social Links</span>
                                            </a>
                                        </li>
                                       <!--  <li class="tab">
                                            <a href="#connections">
                                                <i class="material-icons">link</i>
                                                <span>Connections</span>
                                            </a>
                                        </li>
                                        <li class="tab">
                                            <a href="#notifications">
                                                <i class="material-icons">notifications_none</i>
                                                <span> Notifications</span>
                                            </a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="col l8 s12">
                                <!-- tabs content -->
                               
                                @include('admin.setting.partials.first_tab')
                                @include('admin.setting.partials.amazon')
                                @include('admin.setting.partials.flipkart')
                                @include('admin.setting.partials.ebay') 
                                @include('admin.setting.partials.social_link') 
                                <!-- <div id="connections">
                                    <div class="card-panel">
                                        <div class="row">
                                            <div class="col s12 mt-1 mb-1">
                                                <a href="javascript: void(0);" class="btn cyan waves-effect waves-light">
                                                    Connect to <strong>Twitter</strong>
                                                </a>
                                            </div>
                                            <div class="col s12 mt-1 mb-1">
                                                <button class="btn btn-small waves-effect waves-light btn-light-indigo float-right">edit</button>
                                                <h6>You are connected to facebook.</h6>
                                                <p>Johndoe@gmail.com</p>
                                            </div>
                                            <div class="col s12 mt-1 mb-1">
                                                <a href="javascript: void(0);" class="btn waves-effect waves-light">Connect to
                                                    <strong>Google</strong>
                                                </a>
                                            </div>
                                            <div class="col s12 mt-1 mb-1">
                                                <button class="btn btn-small btn-light-indigo float-right waves-effect waves-light">edit</button>
                                                <h6>You are connected to Instagram.</h6>
                                                <p>Johndoe@gmail.com</p>
                                            </div>
                                            <div class="col s12 display-flex justify-content-end form-action">
                                                <button type="submit" class="btn indigo waves-effect waves-light mr-2">Save
                                                    changes</button>
                                                <button type="button" class="btn btn-light-pink waves-effect waves-light">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div id="notifications">
                                    <div class="card-panel">
                                        <div class="row">
                                            <h6 class="col s12 mb-2">Activity</h6>
                                            <div class="col s12 mb-1">
                                                <div class="switch">
                                                    <label>
                                                        <input type="checkbox" checked id="accountSwitch1">
                                                        <span class="lever"></span>
                                                    </label>
                                                    <span class="switch-label w-100">Email me when someone comments on my article</span>
                                                </div>
                                            </div>
                                            <div class="col s12 mb-1">
                                                <div class="switch">
                                                    <label>
                                                        <input type="checkbox" checked id="accountSwitch2">
                                                        <span class="lever"></span>
                                                    </label>
                                                    <span class="switch-label w-100">
                                                        Email me when someone answers on my form</span>
                                                </div>
                                            </div>
                                            <div class="col s12 mb-1">
                                                <div class="switch">
                                                    <label>
                                                        <input type="checkbox" id="accountSwitch3">
                                                        <span class="lever"></span>
                                                    </label>
                                                    <span class="switch-label w-100">
                                                        Email me hen someone follows me</span>
                                                </div>
                                            </div>
                                            <h6 class="col s12 mb-2 mt-2">Application</h6>
                                            <div class="col s12 mb-1">
                                                <div class="switch">
                                                    <label>
                                                        <input type="checkbox" checked id="accountSwitch4">
                                                        <span class="lever"></span>
                                                    </label>
                                                    <span class="switch-label w-100">News and announcements</span>
                                                </div>
                                            </div>
                                            <div class="col s12 mb-1">
                                                <div class="switch">
                                                    <label>
                                                        <input type="checkbox" id="accountSwitch5">
                                                        <span class="lever"></span>
                                                    </label>
                                                    <span class="switch-label w-100">Weekly product updates</span>
                                                </div>
                                            </div>
                                            <div class="col s12 mb-1">
                                                <div class="switch">
                                                    <label>
                                                        <input type="checkbox" class="custom-control-input" checked id="accountSwitch6">
                                                        <span class="lever"></span>
                                                    </label>
                                                    <span class="switch-label w-100">Weekly blog digest</span>
                                                </div>
                                            </div>
                                            <div class="col s12 display-flex justify-content-end form-action mt-2">
                                                <button type="submit" class="btn indigo waves-light waves-effect mr-sm-1 mr-2">Save
                                                    changes</button>
                                                <button type="button" class="btn btn-light-pink waves-light waves-effect">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </section><!-- START RIGHT SIDEBAR NAV -->
                    
                    <!-- END RIGHT SIDEBAR NAV -->
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>
    <!-- END: Page Main-->
@endsection

{{-- page scripts --}}
@section('script')
<script src="{{asset('app-assets/vendors/select2/select2.full.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/jquery-validation/jquery.validate.min.js')}}"></script>
 
<script src="{{asset('app-assets/js/scripts/page-account-settings.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
<script type="text/javascript"> 
  var CSRF_TOKEN = '{{ csrf_token() }}';
  var errors = false;
  Dropzone.options.dropzoneForm = {
    autoProcessQueue : false,
    acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",
    addRemoveLinks: true,
    uploadMultiple: false,
    parallelUploads: 1,
    maxFiles: 1,
    url : "{{ route('admin.settings.save') }}",
    headers: {
          'x-csrf-token': CSRF_TOKEN,
    },

    
    
     
    init:function(){
      var submitButton = document.querySelector("#submit-all");
      myDropzone = this;

      submitButton.addEventListener('click', function(){ 
        myDropzone.processQueue();
      });
      this.on('sending', function(data, xhr, formData){
      //         // formData.append('fieldname', 'value');
      //    // if (file.name=='') { 
      //    //    alert("Filename cant have more than 12 characters ");
      //    //    this.removeFile(file);
                
      //    //  }
          $('#saveSetting1 input[type="text"],#saveSetting1 input[type="email"],#saveSetting1 textarea').each(function(){
            formData.append($(this).attr('name'),$(this).val());
          })
      });
      this.on("maxfilesexceeded", function(file){
        alert("No more files please!");
      });
      this.on("complete", function(){
        if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
        {
          var _this = this;
          _this.removeAllFiles();
        }
        // load_images();
      });
        this.on("success", function(file, responseText) {
            alert('We are done');
            $('#saveSetting1').submit();
        });

    }


  }; 
    
</script>
@endsection