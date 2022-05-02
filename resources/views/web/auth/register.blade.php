@extends('web.layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style type="text/css">

    .log-form {
      width: 100%;
      min-width: 320px;
      max-width: 100%;
      background: #fff;
      border: 4px solid #773067f7;
      border-radius: 20px;
      margin:20px auto;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
    }
    @media (max-width: 40em) {
      .log-form {
        width: 95%;
        position: relative;
        margin: 2.5% auto 0 auto;
        left: 0%;
        -webkit-transform: translate(0%, 0%);
        -moz-transform: translate(0%, 0%);
        -o-transform: translate(0%, 0%);
        -ms-transform: translate(0%, 0%);
        transform: translate(0%, 0%);
      }
    }
    .log-form form {
      display: block;
      width: 100%;
      padding: 2em;
    }
    .log-form h2 {
     color: #000;
    font-family: 'open sans condensed';
    font-size: 18px;
    display: block;
    background: #fff;
    width: 100%;
    padding: 20px;

    letter-spacing: 4.8px;
    border-radius: 0px 0px 16px 16px;
    text-align: center;
    text-transform: uppercase;

    border: 1px solid #fff;
    margin: 0;
    font-weight: 200;
    }
    /*.log-form input {
      display: block;
      margin: auto auto;
      width: 100%;
      margin-bottom: 2em;
      padding: 0.5em;
      border: none;
      border: 1px solid #eaeaea;
      color: #000;
    }*/
    .log-form input:focus {
      outline: none;
    }
    .log-form .btn {
      display: inline-block;
      background: #5F2652;
      border: 1px solid #5F2652;
      padding: 0.5em 2em;
      color: white;
      margin-right: 0.5em;
      box-shadow: inset 0px 1px 0px rgba(255, 255, 255, 0.2);
    }
    .log-form .btn:hover {
      background: #23cad5;
      border-color:#23cad5;
    }
    .log-form .btn:active {
      background: #1fb5bf;
      border-color:#1fb5bf;
      box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.1);
    }
    .log-form .btn:focus {
      outline: none;
    }
    .log-form .forgot {
      color: #0b2fe2;
      line-height: 0.5em;
      position: relative;
      font-weight: 600;
      top: 1.5em;
      text-decoration: none;
      font-size: 1rem;
      margin: 0;
      padding: 0;
      float: right;
    }
    .create{
      color: #ffc107;
      font-weight:600;
    }
    .log-form .forgot:hover {
      color: #1ba0a9;
    }
    .log-form p {
        font-size: 14px;
        margin: 0 0 16px 0;
    }
    .rel{
      position:relative;
      /*height:100vh;*/
    }
    .important-note {
        padding: 16px 20px;
        background: #5F2652;
        border-radius:16px 16px 0px 0px;
    }
    .important-note h4{
      font-size:18px;
      color:#ffffff;
      font-weight:600;
    }
    .important-note p{
      color:#ffffff;
      text-decoration:underline;
    }
    .log-form input.inl{
      display: inline-block!important;
      width: auto!important;
    }
    .inFlex{
      display:inline-flex;
    }
    .date-field {
      /*width: 30px;*/
     /* text-align: center;*/
    }
    /*.date-field--year {
      width: 60px;
    }*/

    .single-date-field {
      width: 120px;
    }

    .field-inline-block {
      display: inline-block;
      margin-right: 5px;
      margin-left: 5px;
      width: 20%;
    }
    .field-inline-block:last-child{
        width: 100%;
        max-width: 241px;
    }
    .field-inline-block label {
      text-align: center;
    }
    .log-form .d-flex{
      align-items: center;
      justify-content: center;
    }
    h4{
          font-size: 18px;
        color: #000;
        font-weight: 600;
    }
    .login-logo{max-width:240px;width:100%;margin-right:32px;margin-top:12px;}
    .log-form .d-flex span{
      display:block;
      padding:22px 0px;
    }
    .form-group .checkbox label{
      font-size:14px;
      font-weight:normal;
    }

.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
      </style>



{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <img class="img-responsive" src="http://bwt.tec24.in/public/assets/img/use/smalllogo.png">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container rel">

    <!---->
      @foreach (['danger', 'warning', 'success', 'info'] as $key)
                @if(Session::has($key))
                    <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
                @endif
            @endforeach
    <!---->
    <div class="log-form">

      <div class="important-note">
          <div class="row">
              <div class="col-md-3 col-xs-12">
                  <img class="img-responsive login-logo" src="{{asset('assets/img/use/smalllogo.png')}}">
              </div>
              <div class="col-md-9 col-xs-12  text-right">
                  <h4>IMPORTANT NOTICE</h4>
                    <p>
                      DO NOT fill this form out if you DO NOT have a completed video<br>
                      and photo for submission at time of registration.<br>
                      Your application will be DENIED.
                    </p>
                    <p style="text-decoration:none;">
                      Click and review the<a class="create" href="assets/upload/videoTips_8.pdf" target="_blank" style="text-decoration:underline;">   Producer's photo and video submission criteria </a> for submitting your media content
                    </p>
              </div>
          </div>

      </div>
      <div class="form-head" style="box-shadow:
    rgb(149 157 165 / 20%) 0px 8px 24px;">
          <h2>REGISTERFOR AN ACCOUNT</h2>
      </div>
    <form  method="post" action="{{route('storeUser')}}">
        @csrf
            
            <div class="row">
              <p class="col-sm-12 mb-1" style="color:#000;font-weight:600;">You want to register as</p>
              @foreach ($categories as $category)
              <div class="col-sm-6">
                <input type="radio" id="{{$category->slug}}" name="main_category" onclick="show_subcat('{{$category->slug}}')">
                <label for="{{$category->slug}}">{{$category->name}}</label>
              </div>
              @endforeach
              @foreach ($categories as $category)
                <div class="col-sm-12 mt-4 sub-cat {{$category->slug}}" style="display: none;">
                  <select name="" class="form-control select select-{{$category->slug}}">
                    <option value="">Select Category</option>
                    @foreach ($category->categories as $item)
                    <option value="{{$item->id}}">
                      @if ($item->categories->count())
                      <strong>{{$item->name}}</strong>
                      @else
                      {{$item->name}}
                      @endif
                    </option>
                    @foreach ($item->categories as $c)
                    <option value="{{$c->id}}">&nbsp;&nbsp;&nbsp;{{$c->name}}</option>
                    @endforeach
                    @endforeach
                  </select>
                </div>
              @endforeach
            </div>
            <hr>
            <div class="row">

            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">First Name*</label>
                <input type="text" title="fname" class="form-control" placeholder="First Name" value="{{ old('first_name')}}" name="first_name" required />
            </div>
            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Last Name*</label>
                <input type="text" title="lname" class="form-control" placeholder="Last Name" value="{{ old('last_name')}}"  name="last_name" required />
            </div>

                 <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Cell Number*</label>
                <input type="text" title="Phone" class="form-control" placeholder="Cell Number" name="phone" required />
            </div>
            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Date of Birth*</label>
                <!-- <input type="password" title="password" class="form-control" placeholder="password" required/> -->
                <section id="date-of-birth-example-1">
                <fieldset>
                    <div class="field-inline-block">
                    <input type="text" pattern="[0-9]*" maxlength="2" size="2" name="dob_dd" class="date-field form-control" placeholder="DD" />
                    </div>
                    /
                    <div class="field-inline-block">
                    <input type="text" pattern="[0-9]*" maxlength="2" size="2" name="dob_mm" class="date-field form-control" placeholder="MM" />
                    </div>
                    /
                    <div class="field-inline-block">
                    <input type="text" pattern="[0-9]*" maxlength="4" size="4" name="dob_yy" class="date-field date-field--year form-control" placeholder="YYYY" />
                    </div>
                </fieldset>
                </section>
            </div>

             <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Street*</label>
                <input type="text" title="Street" class="form-control" placeholder="Street" name="Street" required />
            </div>



             <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">City*</label>
                <input type="text" title="City" class="form-control" placeholder="City" name="city" required />
            </div>



             <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">State*</label>
                <input type="text" title="State" class="form-control" placeholder="State" name="State" required />
            </div>



             <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Zip Code*</label>
                <input type="text" title="Zip Code" class="form-control" placeholder="Zip Code" name="Zip Code" required />
            </div>



            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Email*</label>
                <input type="email" title="Email" class="form-control" placeholder="Email" name="email" value="{{ old('email')}}" required />
            </div>
            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Verify Email*</label>
                <input type="email" title="Verify_Email" class="form-control" placeholder="Verify Email" value="{{ old('verify_email')}}" name="verify_email" required />
            </div>
            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Password*</label>
                <input type="password" title="Password" class="form-control" placeholder="Password" name="password" value="{{ old('password')}}" required id="password-field" />

              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>
            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Verify Password*</label>
                <input type="password" title="Verify_Password" class="form-control" placeholder="Verify Password" name="verify_password" value="{{ old('verify_password')}}" required id="password-fields" />
              <span toggle="#password-fields" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>

            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Channel Name*</label>
                <input type="text" title="ChannelName" class="form-control" placeholder="Channel Name" name="ChannelName" value="{{ old('ChannelName')}}" required />
            </div>

            <div class="col-md-12 form-group">
                <div class="checkbox">
                <label><input type="checkbox" value="1" name="term_and_condition" required>
                    By submitting this Application Form, you agree to be bound by the
                    <a class="create" href="public/assets/upload/tnc_16.pdf" target="_blank" style="text-decoration:underline;">Terms & Conditions</a>
                    and <a class="create" href="assets/upload/privacyPolicy_5.pdf" target="_blank" style="text-decoration:underline;"> Privacy Policy *</a></label>
                </div>
                <div class="checkbox">
                <label><input type="checkbox" value="1" name="content_permission" required>
                    By submitting this Application Form, you agree to be bound by the
                    <a class="create" href="public/assets/upload/constent_form.pdf" target="_blank" style="text-decoration:underline;">
                    Video Consent and Release, Photo/Video Permission and Release, and Participant’s Involvement Release *
                    </a>
                </label>
                </div>
            </div>
            </div>
            <div class="col-md-12 form-group">
                <div class="form-group">
                <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LcDS3AaAAAAAB0mnwaoQN5mN7S2sl-TtzGS7UT_"></div>
                <span id="error-captcha"></span>
                </div>
            </div>
             <div class="col-md-12">
                <!--<p class="form-group"><i>Please note that you will be required if selected to show proof of legal state’s residence, unrestricted employment authorization or have appropriate visa status in the United States that allows you to work in connection with Program prizing or the exercise of Program contract options.</i></p>-->
                <p style="color:#000;font-size:16px;">
                <strong>Please now click the Register button and then complete the rest of the form, answering all questions with as much detail as possible.</strong> The form will save every time you hit the ‘Next’ button and you can log out and log back in to complete your form should you need to do so.
                </p>
            </div>
              <input type="hidden" name="channel_name" value="{{session('channel_name')}}" id="channel_name" />
            <div class="col-md-12 form-group">
                <button type="submit" class="btn">REGISTER</button>
                <button type="submit" class="btn">CANCEL</button>

            </div>
        </form>
    </div><!--end log form -->
  </div>

  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-autotab/1.9.2/js/jquery.autotab.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/picker.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/picker.date.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script type="text/javascript">
      function show_subcat(slug){
        $('.sub-cat').hide();
        $('.'+slug).show();
        $('.select').attr('name','');
        $('.select-'+slug).attr('name','category');
      }
    $(document).ready(function() {
      $('.datepicker').pickadate({
        formatSubmit: 'dd-mm-yyyy',
        min: [2016,12,17],
        max: [2017,01,15],
        closeOnSelect: false,
        closeOnClear: false,
      });

      // Autotab
      $('.date-field').autotab('number');

      $('.single-date-field').mask('00/00/0000',
        {placeholder: "_ _ /_ _ /_ _ _ _"});
    });
  </script>
<script>
  $(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>

@endsection
