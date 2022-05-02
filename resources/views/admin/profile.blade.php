@extends('layouts.master')
@section('title') Admin | Profile @endsection

@section('css')      
<link rel="stylesheet" href="{{ asset('app-assets/vendors/select2/select2.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('app-assets/vendors/select2/select2-materialize.css') }}" type="text/css">

<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-users.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/plugin/Lobibox.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/loader_spin.css') }}">
<!-- END: Page Level CSS-->
<style type="text/css">
  .error{
    color: red !important;    position: initial !important;
  }
</style>
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
            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Admin Profile</span></h5>
            <ol class="breadcrumbs mb-0">
              <li class="breadcrumb-item"><a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Admin</a>
              </li>
              <li class="breadcrumb-item active">Profile Edit
              </li>
            </ol>
          </div>
         <!--  <div class="col s2 m6 l6"><a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#!" data-target="dropdown1"><i class="material-icons hide-on-med-and-up">settings</i><span class="hide-on-small-onl">Settings</span><i class="material-icons right">arrow_drop_down</i></a>
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
    <div class="col s12">
      <div class="container">
        <!-- users edit start -->
        <div class="section users-edit">
          <div class="card">
            <div class="card-content">
              @if($message=Session::get('success'))
              <div class="card-alert card green">
                  <div class="card-content white-text">
                      <span class="card-title white-text darken-1"><i class="material-icons"></i>Success</span>
                      <p>{{ $message }}</p>
                  </div>
                  <!-- <div class="card-action pink lighten-4">
                      <a href="#" class="pink-text">Ok</a>
                      <a href="#" class="pink-text">Cancel</a>
                  </div> -->
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
              @if(count($errors) > 0 )
                <div class="card-alert card gradient-45deg-red-pink">
                  <div class="card-content white-text">
                      <!-- <p> <i class="material-icons">error</i> DANGER : The daily report has failed</p> -->
                      <ul class="p-0 m-0" style="list-style: none;">
                        @foreach($errors->all() as $error)
                          <li>{{$error}}</li>
                        @endforeach
                      </ul>
                  </div>
                  <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
                </div> 
              @endif
              <!-- <div class="card-body"> -->
                <ul class="tabs mb-2 row">
                  <li class="tab">
                    <a class="display-flex align-items-center active" id="account-tab" href="#account">
                      <i class="material-icons mr-1">person_outline</i><span>Account</span>
                    </a>
                  </li>
                  <li class="tab">
                    <a class="display-flex align-items-center" id="information-tab" href="#information">
                      <i class="material-icons mr-2">error_outline</i><span><strong>Security</strong> Settings</span>
                    </a>
                  </li>
                </ul>
                <div class="divider mb-3"></div>
                <div class="row">

                  <div class="col s12" id="account">
                    <!-- users edit media object start -->
                    <div class="media display-flex align-items-center mb-2">
                      <a class="mr-2" href="#">
                        <img src="@if(!empty(Auth::user()->thumbnail)){{ Auth::user()->thumbnail}} @else {{ asset('app-assets/images/avatar/avatar-11.png') }} @endif" alt="users avatar" class="z-depth-4 circle"
                        height="64" width="64">
                      </a>
                      <div class="media-body">
                        <!-- <h5 class="media-heading mt-0">Avatar</h5>
                        <div class="user-edit-btns display-flex">
                          <a href="#" class="btn-small indigo">Change</a>
                          <a href="#" class="btn-small btn-light-pink">Reset</a>
                        </div> -->
                      </div>
                    </div>
                    <!-- users edit media object ends -->
                    <!-- users edit account form start -->
                    <form id="accountForm" action="{{ route('admin.saveProfile') }}" enctype="multipart/form-data" method="post">
                      @csrf
                      <div class="row">
                        <div class="col s12 m6">
                          <div class="row">
                            <!-- <div class="col s12 input-field">
                              <input id="username" name="username" type="text" class="validate" value="dean3004"
                              data-error=".errorTxt1">
                              <label for="username">Username</label>
                              <small class="errorTxt1"></small>
                            </div> -->
                            <div class="col s12 input-field">
                              <input id="name" name="name" type="text" class="validate" value="{{ Auth::user()->name }}"
                              data-error=".errorTxt2">
                              <label for="name">Name</label>
                              <small class="errorTxt2"></small>
                            </div>
                            <div class="col s12 input-field">
                              <input id="email" name="email" type="email" class="validate" value="{{ Auth::user()->email }}"
                              data-error=".errorTxt3">
                              <label for="email">E-mail</label>
                              <small class="errorTxt3"></small>
                            </div>
                            <div class="col s12 input-field">
                              <input id="datepicker" name="dob" type="text" class="birthdate-picker datepicker"
                              placeholder="Pick a birthday" value="{{ Auth::user()->dob }}" data-error=".errorTxt4">
                              <label for="datepicker">Birth date</label>
                              <small class="errorTxt3"></small>
                            </div> 

                            <div class="col s12 file-field input-field">
                              <div class="btn float-right">
                                <span>Profile Image</span>
                                <input type="file" id="thumbnail" name="thumbnail" accept=".jpg,.png,.jpeg,.gif">
                              </div>
                              <div class="file-path-wrapper">
                                <input class="file-path validate valid" type="text">
                              </div>
                            </div>                          
                          </div>
                        </div>
                        <div class="col s12 m6">
                          <div class="row">
                            <div class="col s12 input-field">
                              <select disabled>
                                <option>Admin</option>
                                <option>Staff</option>
                              </select>
                              <label>Role</label>
                            </div>
                            <div class="col s12 input-field">
                              <select disabled>
                                <option>Active</option>
                                <option>Banned</option>
                                <option>Close</option>
                              </select>
                              <label>Status</label>
                            </div>
                            <div class="col s12 input-field">
                              <input id="mobile" name="mobile" type="number" class="validate" value="{{ Auth::user()->mobile }}">
                              <label for="company">PhoneNo</label>
                            </div>
                            <div class="col s12 input-field">
                              <input id="address" name="address" type="text" class="validate" value="{{ Auth::user()->address }}">
                              <label for="company">Address</label>
                            </div>
                          </div>
                        </div>
                        <!-- <div class="col s12">
                          <table class="mt-1">
                            <thead>
                              <tr>
                                <th>Module Permission</th>
                                <th>Read</th>
                                <th>Write</th>
                                <th>Create</th>
                                <th>Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Users</td>
                                <td>
                                  <label>
                                    <input type="checkbox" checked />
                                    <span></span>
                                  </label>
                                </td>
                                <td>
                                  <label>
                                    <input type="checkbox" />
                                    <span></span>
                                  </label>
                                </td>
                                <td>
                                  <label>
                                    <input type="checkbox" />
                                    <span></span>
                                  </label>
                                </td>
                                <td>
                                  <label>
                                    <input type="checkbox" checked />
                                    <span></span>
                                  </label>
                                </td>
                              </tr>
                              <tr>
                                <td>Articles</td>
                                <td>
                                  <label>
                                    <input type="checkbox" />
                                    <span></span>
                                  </label>
                                </td>
                                <td>
                                  <label>
                                    <input type="checkbox" checked />
                                    <span></span>
                                  </label>
                                </td>
                                <td>
                                  <label>
                                    <input type="checkbox" />
                                    <span></span>
                                  </label>
                                </td>
                                <td>
                                  <label>
                                    <input type="checkbox" checked />
                                    <span></span>
                                  </label>
                                </td>
                              </tr>
                              <tr>
                                <td>Staff</td>
                                <td>
                                  <label>
                                    <input type="checkbox" checked />
                                    <span></span>
                                  </label>
                                </td>
                                <td>
                                  <label>
                                    <input type="checkbox" checked />
                                    <span></span>
                                  </label>
                                </td>
                                <td>
                                  <label>
                                    <input type="checkbox" />
                                    <span></span>
                                  </label>
                                </td>
                                <td>
                                  <label>
                                    <input type="checkbox" />
                                    <span></span>
                                  </label>
                                </td>
                              </tr>
                            </tbody>
                          </table> 
                        </div> -->
                        <div class="col s12 display-flex justify-content-end mt-3">
                          <button type="submit" class="btn indigo">
                          Save changes</button>
                          <a href="{{ route('admin.dashboard') }}" class="btn btn-light">Cancel</a>
                        </div>
                      </div>
                    </form>
                    <!-- users edit account form ends -->
                  </div>
                  <div class="col s12" id="information">
                    <!-- users edit Info form start -->
                    <form id="change_password_form" method="post" action="{{ route('admin.change-password') }}">
                      @csrf
                      <div class="row">
                       <!--  <div class="col s12 m6">
                          <div class="row">
                            <div class="col s12">
                              <h6 class="mb-2"><i class="material-icons mr-1">link</i>Social Links</h6>
                            </div>
                            <div class="col s12 input-field">
                              <input class="validate" type="text" value="https://www.twitter.com/">
                              <label>Twitter</label>
                            </div>
                            <div class="col s12 input-field">
                              <input class="validate" type="text" value="https://www.facebook.com/">
                              <label>Facebook</label>
                            </div>
                            <div class="col s12 input-field">
                              <input class="validate" type="text">
                              <label>Google+</label>
                            </div>
                            <div class="col s12 input-field">
                              <input id="linkedin" name="linkedin" class="validate" type="text">
                              <label for="linkedin">LinkedIn</label>
                            </div>
                            <div class="col s12 input-field">
                              <input class="validate" type="text" value="https://www.instagram.com/">
                              <label>Instagram</label>
                            </div>
                          </div>
                        </div> -->
                        <div class="col s12 m12">
                          <div class="row">
                            <div class="col s12">
                              <h6 class="mb-4"><i class="material-icons mr-1">person_outline</i>Change Password</h6>
                            </div>
                            <!-- <div class="col s12 input-field">
                              <input id="datepicker" name="datepicker" type="text" class="birthdate-picker datepicker"
                              placeholder="Pick a birthday" data-error=".errorTxt4">
                              <label for="datepicker">Birth date</label>
                              <small class="errorTxt4"></small>
                            </div>
                            <div class="col s12 input-field">
                              <select id="accountSelect">
                                <option>USA</option>
                                <option>India</option>
                                <option>Canada</option>
                              </select>
                              <label>Country</label>
                            </div> -->
                            <!-- <div class="col s12">
                              <label>Languages</label>
                              <select class="browser-default" id="users-language-select2" multiple="multiple">
                                <option value="English" selected>English</option>
                                <option value="Spanish">Spanish</option>
                                <option value="French">French</option>
                                <option value="Russian">Russian</option>
                                <option value="German">German</option>
                                <option value="Arabic" selected>Arabic</option>
                                <option value="Sanskrit">Sanskrit</option>
                              </select>
                            </div> -->
                            <div class="col s12 input-field">
                              <input id="current_password" name="current_password" type="password" class="validate" placeholder="Please enter you current password...." value="{{ old('current_password') }}">
                              <label for="phonenumber">Current Password</label>
                            </div>
                            <div class="col s12 input-field">
                              <input id="new_password" name="new_password" type="password" class="validate" data-error=".errorTxt5" placeholder="New Password.." value="{{ old('new_password') }}">
                              <label for="address">New Password</label>
                              <small class="errorTxt5"></small>
                            </div>
                            <div class="col s12 input-field">
                              <input id="confirm_password" name="confirm_password" type="text" class="validate" data-error=".errorTxt5" placeholder="Confirm Password.."  value="{{ old('confirm_password') }}">
                              <label for="address">Confirm Password</label>
                              <small class="errorTxt5"></small>
                            </div>
                          </div>
                        </div>
                        <!-- <div class="col s12">
                          <div class="input-field">
                            <input id="websitelink" name="websitelink" type="text" class="validate">
                            <label for="websitelink">Website</label>
                          </div>
                          <label>Favourite Music</label>
                          <div class="input-field">
                            <select class="browser-default" id="users-music-select2" multiple="multiple">
                              <option value="Rock">Rock</option>
                              <option value="Jazz" selected>Jazz</option>
                              <option value="Disco">Disco</option>
                              <option value="Pop">Pop</option>
                              <option value="Techno">Techno</option>
                              <option value="Folk" selected>Folk</option>
                              <option value="Hip hop">Hip hop</option>
                            </select>
                          </div>
                        </div> -->
                       <!--  <div class="col s12">
                          <label>Favourite movies</label>
                          <div class="input-field">
                            <select class="browser-default" id="users-movies-select2" multiple="multiple">
                              <option value="The Dark Knight" selected>The Dark Knight
                              </option>
                              <option value="Harry Potter" selected>Harry Potter</option>
                              <option value="Airplane!">Airplane!</option>
                              <option value="Perl Harbour">Perl Harbour</option>
                              <option value="Spider Man">Spider Man</option>
                              <option value="Iron Man" selected>Iron Man</option>
                              <option value="Avatar">Avatar</option>
                            </select>
                          </div>
                        </div> -->
                        <div class="col s12 display-flex justify-content-end mt-1">
                          <button type="submit" id="change_password_button" style="margin-right:20px; " class="btn indigo">
                          Save changes</button>
                          <a href="{{ route('admin.dashboard') }}" class="btn btn-light">Cancel</a>
                        </div>
                      </div>
                    </form>
                    <!-- users edit Info form ends -->
                  </div>
                </div>
                <!-- </div> -->
              </div>
            </div>
          </div>
          <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
            <ul>
              <li><a href="javascript:void(0)" class="btn-floating blue"><i class="material-icons">help_outline</i></a></li>
              <li><a href="javascript:void(0)" class="btn-floating green"><i class="material-icons">widgets</i></a></li>
              <li><a href="javascript:void(0)" class="btn-floating amber"><i class="material-icons">today</i></a></li>
              <li><a href="javascript:void(0)" class="btn-floating red"><i class="material-icons">mail_outline</i></a></li>
            </ul>
          </div>
        </div>
        <div class="content-overlay"></div>
      </div>
    </div>
  </div>
  <div id="cover-spin" style="display: none;"></div>
  <!-- END: Page Main-->
  @endsection

  @section('script')
  <script type="text/javascript"></script>  
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{ asset('app-assets/vendors/select2/select2.full.min.js') }}"></script>
  <script src="{{ asset('app-assets/vendors/jquery-validation/jquery.validate.min.js') }}">   </script>
  <!-- END PAGE VENDOR JS-->   
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{ asset('app-assets/js/scripts/page-users.js') }}"></script>
  <script src="{{ asset('app-assets/plugin/Lobibox.js') }}"></script>

  <script type="text/javascript">
    $(document).ready(function(){
         $('#change_password_form').validate({ // initialize the plugin
            rules: { 
              current_password: {
                  required: true,               
              },
              new_password: {
                  required: true,
                  minlength: 8               
              },
              confirm_password: {
                  required: true,    
                  equalTo:new_password           
              }, 
            },
            messages: {
              confirm_password:{
                  equalTo: "Confirm password should be same as password", 
              } 
            } 
        });
        $(document).on('click', '#change_password_btn', function(){
            if (!$("#change_password_form").valid()) { // Not Valid
                return true;
            } else {
                url = '/admin/change-password';
                saveAjaxData('#change_password_form', url, '#change_password_btn')
            }
        }); 
    });
  </script>
  @endsection 

  