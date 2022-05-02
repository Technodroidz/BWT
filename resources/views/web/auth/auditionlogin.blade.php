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
      text-align: center;
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


<!--
<div class="container">
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
</div> 
-->
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
                      Click and review the<a class="create" href="public/assets/upload/photo_and_video_criteria.pdf" target="_blank" style="text-decoration:underline;">   Producer's photo and video submission criteria </a> for submitting your media content
                    </p>
                                           <h5 style = "color:fff;">ALREADY REGISTERED?</h5>

                 
                    <button type="submit" class="btn mb-2"  data-toggle="modal" data-target="#addNew" style="border: 1px solid #fff;">SIGN IN</button>
                    
              </div>
          </div>
        
      </div>
      <div class="form-head"style="box-shadow:
    rgb(149 157 165 / 20%) 0px 8px 24px;">
          <h2 class="test-left" >REGISTER TO SUBMIT YOUR AUDITION VIDEO !  </h2>
      </div>
    <form  method="post" action="{{route('storeUser')}}">
        @csrf
           
            <div class="row">
            <div class="col-md-12 form-group">
                <h4 style="margin-bottom:10px;">Eligibility Requirements:</h4>
                <p> All individuals must complete the application fully and enter the required information below, including your full name, email address and select a password. </p>
            </div>
            <div class="col-md-12 form-group">
                <div class="checkbox">
                <label><input type="checkbox" value="1" name="adult_checkbox" required>
                    Proof of 18 years old or over *
                </label>
                </div>
                <div class="checkbox">
                <label><input type="checkbox" value="1" name="us_citizen" required>
                    A United States Citizen (Passport, Real ID, Birth Certificate) *
                </label>
                </div>
                <div class="checkbox">
                <label><input type="checkbox" value="1" name="legal_permanent" required>
                    Must be a legal permanent resident of the State which the application was completed and submitted by the applicant. * Only one registration per application. *
                </label>
                </div>
                <div class="checkbox">
                <label><input type="checkbox" value="1" name="proof_of_residence" required>
                    Proof of State’s Residence may be required. (Real ID DL, State ID card) *
                </label>
                </div>
                <div class="checkbox">
                <label><input type="checkbox" value="1" name="authorization_card" required>
                    Possess a current employment authorization card (EAD card) VISA and / United States legal the time of my initial audition. *
                </label>
                </div>
                <div class="checkbox">
                <label><input type="checkbox" value="1" name="photo_and_video" required>
                    Have ready the photo and video media files to upload as required by the <a class="create" href="{{asset('assets/upload/photo_and_video_criteria.pdf')}}" target="_blank" style="text-decoration:underline;">Producer’s photo and video submission criteria  *</a>
                </label>
                </div>
                <p class="form-group mt-2"><i>Please note that you will be required if selected to show proof of legal state’s residence, unrestricted employment authorization or have appropriate visa status in the United States that allows you to work in connection with Program prizing or the exercise of Program contract options.</i></p>
            </div>
            
            
              <div class="col-md-12 form-group text-center">
              
            </div>
            
            <div class="col-md-12 form-group">
            <!--     <p>-->
            <!--To register, please enter the following information including your full name, email address and select a password:-->
            <!--</p>-->
                <p style="color:#000;margin-bottom:0px;font-weight:600; margin-top:10px;">Which competition would you like to apply to? *</p>
                <div class="checkbox">
                <label><input type="radio" value="1" name="apply_competition" class="apply_type" required>
                    State & National Competition
                </label>
                </div>
                <div class="checkbox">
                <label><input type="radio" value="2" name="apply_competition" class="apply_type" required>
                    Weekly Buskers' Performances Competition
                </label>
                </div>
            </div>
            <script>
                $(document).ready(function(){
                    
                    $('.state_one').hide();
                   $('.apply_typesss').click(function(){
                      var type=$(this).val();
                      
                      if(type==1)
                      {
                          $(".states_ones").prop('required',true);
                          $('.state_one').show();
                      }
                      else if(type==2)
                      {
                          $(".states_ones").prop('required',false);
                          $('.state_one').hide();
                      }
                   }); 
                
                
                
                    $('.state').hide();
                   $('.apply_type').click(function(){
                      var type=$(this).val();
                      if(type==1)
                      {
                          $(".states").prop('required',true);
                          $('.state').show();
                      }
                      else if(type==2)
                      {
                          $(".states").prop('required',false);
                          $('.state').hide();
                      }
                   }); 
                });
            </script>
            
            </div>
            <hr/>
            <div class="row">
                <!--start state-->
                <div class="col-md-12 col-xs-12 form-group state">
                <label style="color:#000;">State competition state:*</label>
                <select name="state" class="form-control states">
                   <option value="">Select...</option>
                   <option value="10">California</option>
                   <option value="20">Illinois</option>
                   <option value="30">Louisiana</option>
                   <option value="40">Massachusetts</option>
                   <option value="50">New York</option>
                   <option value="60">Tennessee</option>
                   <option value="70">Texas</option>
                   <option value="80">Washington</option> 					
                </select>
            </div>
            <!--end state-->
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
                    <input type="text" pattern="[0-9]*" maxlength="2" size="2" name="dob_dd" class="date-field form-control" />
                    <label>DD</label>
                    </div>
                    /
                    <div class="field-inline-block">
                    <input type="text" pattern="[0-9]*" maxlength="2" size="2" name="dob_mm" class="date-field form-control" />
                    <label>MM</label>
                    </div>
                    /
                    <div class="field-inline-block">
                    <input type="text" pattern="[0-9]*" maxlength="4" size="4" name="dob_yy" class="date-field date-field--year form-control" />
                    <label>YYYY</label>
                    </div>
                </fieldset>
                </section>
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
                <input type="password" title="Password" class="form-control" placeholder="Password" name="password" value="{{ old('password')}}" required  id="password-field" />
                 <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>
            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Verify Password*</label>
                <input type="password" title="Verify_Password" class="form-control" placeholder="Verify Password" name="verify_password" value="{{ old('verify_password')}}" required  id="password-fields"  />
                 <span toggle="#password-fields" class="fa fa-fw fa-eye field-icon toggle-password"></span>
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
                <p style="color:#000;font-size:16px;">
                <strong>Please now click the Register button and then complete the rest of the form, answering all questions with as much detail as possible.</strong> The form will save every time you hit the ‘Next’ button and you can log out and log back in to complete your form should you need to do so.
                </p>
            </div>

            <div class="col-md-12 form-group">
                <button type="submit" class="btn">REGISTER</button>
                <button type="back" class="btn">CANCEL</button>
            </div>
        </form>
    </div><!--end log form -->
  </div>
  
  
<div id="addNew" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      
<div class="container">
    
	<div class="log-form">
	      @foreach (['danger', 'warning', 'success', 'info'] as $key)
                @if(Session::has($key))
                    <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
                @endif
            @endforeach

	  <h2 class="d-flex">ALREADY REGISTERED? <br> SIGN IN TO COMPLETE YOUR APPLICATION</h2>
	  
	 <form method="post" action="{{ route('weblogin')}}" >
        @csrf
	  	 <p style="color:#000;margin-bottom:0px;font-weight:600; margin-top:10px;">Which competition would you like to apply to? *</p>
                <div class="checkbox">
                <label><input type="radio" value="1" name="apply_competition" class="apply_typesss" required>
                    State & National Competition
                </label>
                </div>
                <div class="checkbox">
                <label><input type="radio" value="2" name="apply_competition" class="apply_typesss" required >
                    Weekly Buskers' Performances Competition
                </label>
                </div>
	  	
            <div class="col-md-12 col-xs-12 form-group state_one">
                <label style="color:#000;">State competition state:*</label>
                <select name="state" class="form-control states_ones">
                   <option value="">Select...</option>
                   <option value="10">California</option>
                   <option value="20">Illinois</option>
                   <option value="30">Louisiana</option>
                   <option value="40">Massachusetts</option>
                   <option value="50">New York</option>
                   <option value="60">Tennessee</option>
                   <option value="70">Texas</option>
                   <option value="80">Washington</option> 					
                </select>
            </div>
	  	<hr/>
	  	<div class="row">
	  		<!--<div class="col-md-12">-->
	  		<!--	<label style="color:#000;">Email*</label>-->
	    <!--		<input type="email" title="email" placeholder="Email" name="email" value="{{ old('email')}}"  required />-->
	  		<!--</div>-->
	  		<div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Email*</label>
                <input type="email" title="Email" class="form-control" placeholder="Email" name="email" value="" required="">
            </div>
	  		<!--<div class="col-md-12 form-group">-->
	  		<!--	<label style="color:#000;">Password*</label>-->
	    <!--		<input type="password" title="password" placeholder="password" name="password" value="{{old('password')}}" required/>-->
	  		<!--</div>-->
	  		<div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Password*</label>
                <input type="password" title="Password" class="form-control" placeholder="Password" name="password" value="" required="">
            </div>
	  		<div class="col-md-12 form-group">
			    <button type="submit" class="btn">SIGN IN</button>
			    <a class="forgot" href="#">Forgotten my password</a>
	  		</div>
	  	</div>
	  </form>
	</div><!--end log form -->
</div>
     
    </div>

  </div>
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



	
            