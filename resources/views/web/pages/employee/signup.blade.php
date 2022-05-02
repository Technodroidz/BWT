@extends('web.layouts.app')
@section('title','Employement Registration')


@section('content')

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
    .log-form .btn {
    display: inline-block;
    background: #5F2652;
    border: 1px solid #5F2652;
    padding: 0.5em 2em;
    color: white;
    margin-right: 0.5em;
    box-shadow: inset 0px 1px 0px rgb(255 255 255 / 20%);
}
.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}

</style>         

<div class="wrap-height">
    <br/>
    @if(@$_GET['u'] == 2)

    <div class="form-group" style="width: 47%;margin-left: 266px;">
      
      <div class="alert alert-success" role="alert">
      We've sent an email to activate your account !
</div>
</div>

@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

    <div class="log-form">

      <div class="important-note">
          <div class="row">
              <div class="col-md-12 col-xs-12">
                  <img class="img-responsive login-logo" src="{{asset('assets/img/use/smalllogo.png')}}">
              </div>
              
          </div>

      </div>
<div class="form-head" style="box-shadow:
    rgb(149 157 165 / 20%) 0px 8px 24px;">
          <h2>LOOKING FOR EMPLOYMENT? REGISTER HERE!</h2>
      </div>
      <!-- <div class="text-right form-group">
            <button onclick="goBack()" class="btn btn-success"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div> -->
        <form method="post" action="{{ route('jobRegistration') }}" enctype="multipart/form-data">
                                @csrf()
        <div class="card" id="card">
            <div class="card-body">
                <div class="row">
                    
                  
                    <!-- <div class="col-md-6 col-xs-12 form-group">
                        <label>First Name <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="first_name" class="form-control" placeholder="" required>
                    </div>

                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Last Name <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="last_name" class="form-control" placeholder="" required>
                    </div> -->

                    <div class="row" style="width: 100%;margin-left: -2px;">
    <div class="col-md-4  form-group">
    <label>First Name <sup style="color:#ff0000;">*</sup></label>
   <input type="text" name="first_name"  value=""  class="form-control" placeholder="" required>
                 
    </div>
    <div class="col-md-4  form-group">
    <label>Middle Name <sup style="color:#ff0000;"></sup></label>
   <input type="text" name="mid_name"  value=""  class="form-control" placeholder="" >
       
    </div>
    <div class="col-md-4 form-group">
    <label>Last Name <sup style="color:#ff0000;">*</sup></label>
   <input type="text" name="last_name"  value=""  class="form-control" placeholder="" required>
       
    </div>
  </div>


                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Email <sup style="color:#ff0000;">*</sup></label>
                        <input type="email" name="email" class="form-control" placeholder="" required>
                    </div>

                    
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Phone <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="phone" class="form-control" placeholder="" required>
                    </div>


                    @if(@$_GET['u'] == 1)
                    <div style="margin-left: 15px;font-size: 10px;">                
                <p class="text-danger">Email address is already registered with us !</p>            

                        </div>
                     @endif
                   

                     <div class="col-md-6 col-xs-12 form-group">
                        <label>Education <sup style="color:#ff0000;">*</sup></label>
                        <select class="form-control dropdown" id="education" name="education">
                        <option value="" selected="selected" disabled="disabled">-- select one --</option>
                        <option value="No formal education">No formal education</option>
                        <option value="Primary education">Primary education</option>
                        <option value="Secondary education">Secondary education or high school</option>
                        <option value="GED">GED</option>
                        <option value="Vocational qualification">Vocational qualification</option>
                        <option value="Bachelor's degree">Bachelor's degree</option>
                        <option value="Master's degree">Master's degree</option>
                        <option value="Doctorate or higher">Doctorate or higher</option>
                    </select>
                    </div>

                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Trade/discipline <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="education_discipline" class="form-control" placeholder="" required>
                    </div>

                    <div class="col-md-6 col-xs-12 form-group">
                        <label>DOB <sup style="color:#ff0000;">*</sup></label>
                        <input type="text"  class="form-control" placeholder="DD/MM/YYYY" required>
                    </div>

                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Street/Address <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="address" class="form-control" placeholder="" required>
                    </div>
                    
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>City <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="city" class="form-control" placeholder="" required>
                    </div>   

                    <div class="col-md-6 col-xs-12 form-group">
                        <label>State <sup style="color:#ff0000;">*</sup></label>
                   
                <select class="form-control dropdown" id="state" name="state">

                <option value="" selected="selected" disabled>Select a State</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
                </select>
                    </div>

                                  
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Zip <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="zip" class="form-control" placeholder="" required>
                    </div>

                    

                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Country <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="country" class="form-control" placeholder="" required>
                    </div>

                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Password <sup style="color:#ff0000;">*</sup></label>                       
                         <input id="password-field" type="password" class="form-control" name="password" value="">
              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>

                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Verify Password <sup style="color:#ff0000;">*</sup></label>                       
                         <input id="password-field" type="password" class="form-control"  value="">
              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>


   <div class="col-md-12 form-group">
                <div class="checkbox">
                <label><input type="checkbox" value="1" name="term_and_condition" required>
                    By submitting this Application Form, you agree to be bound by the
                    <a class="create" href="public/assets/upload/tnc_16.pdf" target="_blank" style="text-decoration:underline;">Terms & Conditions</a>
                    and <a class="create" href="assets/upload/privacyPolicy_5.pdf" target="_blank" style="text-decoration:underline;"> Privacy Policy *</a></label>
                </div>
                <!--<div class="checkbox">
                <label><input type="checkbox" value="1" name="content_permission" required>
                    By submitting this Application Form, you agree to be bound by the
                    <a class="create" href="public/assets/upload/constent_form.pdf" target="_blank" style="text-decoration:underline;">
                    Video Consent and Release, Photo/Video Permission and Release, and Participant’s Involvement Release *
                    </a>
                </label>
                </div>-->
            </div>

            <h2 class="text-center" style="margin-top: 37px;">MEDIA UPLOAD</h2>

<ul>
    <li>Photo upload is limited to 5MB per image.</li>
    <li>Photos of common image formats: JPG, GIF or PNG. Please make sure that the image you are uploading are in one of these formats.</li>
  </ul>
<p style="margin-left:20px">See our <a href="https://d3vq5ea7z6ebbn.cloudfront.net/res/1642/a5114b/videoTips_8.pdf" target="_blank">Producer’s photo and video submission criteria</a> for more helpful tips before submitting your video audition.</p>
<div class="row">
<div class="col-md-4 col-xs-12 form-group">
<label style="color:#000;">Recent headshot photo of yourself: </label>
<input type="file" title="" id="img" Recent headshot photo of yourself:" accept="image/png, image/jpeg" onchange="readURL(this);" class="form-control" placeholder="" name="photo">

<script type="text/javascript">
 function readURL(input) {
 if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
        $('#image').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
    $('#image').show();
 }
}

  


</script>


<img id="image" src="#" alt="your image" style="height:150px;width:150px;display:none">
</div>

<!-- <div class="col-md-4 col-xs-12 form-group">
    <label style="color:#000;">Video of your performance: ?</label>
    <input type="file" title="Video of your performance" id="vid" accept="video/mp4,video/x-m4v,video/*" class="form-control" placeholder="" name="video">
</div> -->

 <div class="col-md-12 form-group">
<div class="checkbox">
<label><input type="checkbox" value="1" name="term_and_condition" >
    By submitting this Application Form, you agree to be bound by the
    <a class="create" href="{{ url('assets/upload/Terms-and-Conditions.pdf') }}" target="_blank" style="text-decoration:underline;
color: #ffc107;
font-weight: 600;">Terms & Conditions</a>
    and <a class="create" href="{{ url('assets/upload/privacyPolicy_5.pdf') }}" target="_blank" style="text-decoration:underline;
color: #ffc107;
font-weight: 600;"> Privacy Policy *</a></label>
</div>
<div class="checkbox">
<label><input type="checkbox" value="1" name="content_permission" >
    By submitting this Application Form, you agree to be bound by the
    <a class="create" href="{{ url('assets/upload/VIDEO-RELEASE CONSENT-FORM.pdf') }}" target="_blank" style="text-decoration:underline;
color: #ffc107;
font-weight: 600;">
    Video Consent and Release, Photo/Video Permission and Release, and Participant’s Involvement Release *
    </a>
</label>
</div>
</div>
</div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <button type="submit" class="btn btn-success" id="register">Submit</button>
                    </div>
                   
                </div>
            </div>
        </div>
    </form>
</div>
  
 </div>
</div>
</div>
</div>

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

$("#register").click(function() {

if(document.getElementById("img").files.length == 0 ){
    alert( "Please upload Recent headshot photo of yourself" );
    return false;
}

return true;

});
</script>

@endsection 