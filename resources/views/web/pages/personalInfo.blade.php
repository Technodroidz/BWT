@extends('web.welcome')

@section('title','Registration')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    label{font-size: 12px !important;}
    
.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
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
        max-width: 140px;
    }
    .field-inline-block label {
      text-align: center;
    }
</style>
@php
    $audition = optional($user)->audition;
@endphp
<div class="wrap-height">
                        <div class="row" style="margin-top:10px;margin-left:5%;margin-right:5%;">
                            <div class="col-md-12 text-right form-group">
                                <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
                            </div>
                            <form method="post" action="{{url('join-auditions')}}" enctype="multipart/form-data">
                                @csrf()

                                <div>
                                @error('Email')
                <strong class="text-danger">{{$message}}</strong>
                @enderror

                <div>

                          <div class="row" style="margin-top:10px;width:100%; border-style:ridge; padding: 18px;border-width: 5px;border-color: #5f2652;border-radius: 50px;" >
                           <div class="col-md-12" style="padding-top: 15px;">

                           @if(empty(@$_GET['q']))

                               <div class="row">
                                     <div class="col-md-8" style="left: 24%;">
                                <h2 class="text-left">Welcome to BWT Auditions</h2>
                               

                                          </div>
                                    <div class="col-md-4 text-right">
                                <!-- <button onclick="window.location.href='{{url('help')}}'" class="btn btn-success" style="
    padding: 5px 10px !important;
    border-radius: 5px;">Need Help ?</button> -->

                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <!-- <p>All individuals must complete the application fully and enter the required information below, </p>-->
                                            <p>
                                            All individuals must complete the application thoroughly      

                                            </p>
                                            <h4 style="margin-bottom:10px;">Eligibility Requirements:</h4>

                                            </div>

                                        <div class="col-md-12 form-group">
                                            {{-- <div class="checkbox">
                                                <label><input type="checkbox" value="1" name="adult_checkbox" required>
                                                    Proof of 18 years old or over <sup style="color:red;">*</sup>
                                                </label>
                                            </div> --}}
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="1" name="us_citizen" {{$audition?'checked':''}} required>
                                                    A United States Citizen (Passport, Real ID, Birth Certificate) <sup style="color:red;">*</sup>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="1" name="legal_permanent" {{$audition?'checked':''}} required>
                                                    Must be a legal permanent resident of the State which the application was completed and
                                                    submitted by the applicant. * Only one registration per application. <sup style="color:red;">*</sup>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="1" name="proof_of_residence" {{$audition?'checked':''}} required>
                                                    Proof of State’s Residence may be required. (Real ID DL, State ID card) <sup style="color:red;">*</sup>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="1" name="authorization_card" {{$audition?'checked':''}} required>
                                                    Possess a current employment authorization card (EAD card) VISA and / United States legal
                                                    the time of my initial audition. <sup style="color:red;">*</sup>
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="1" name="photo_and_video" {{$audition?'checked':''}} required>
                                                    Have ready the photo and video media files to upload as required by the <a class="create"
                                                        href="{{asset('assets/upload/videoTips_8.pdf')}}" target="_blank"
                                                        style="text-decoration:underline;">Producer’s photo and video submission criteria <sup style="color:red;">*</sup></a>
                                                </label>

                                            </div>
                                            <p class="form-group mt-2"><i>
                                            Please not that you will be required if selected to show proof of a 
                                            legal state’s residence, unrestricted employment authorization, 
                                            or have appropriate visa status in the United State that allows you 
                                            to work and receive Program prizes and enter into contractual agreements
                                            </i></p>

                                        </div>

                                    </div>
                                    <hr><br>
                                <div class="form-head text-center mb-5">
          <h2 class="text-center">YOUR INFORMATION</h2>
      </div>
      @php
          $user = auth()->guard('web_user')->user();
      @endphp

<div class="row" style="margin-bottom: 30px">
              <p class="col-sm-12 mb-1" style="color:#000;font-weight:200;"><i>I am registering for  </i></p>
              <p></p>
                            <div class="col-sm-6">
                            
  <input class="form-check-input" type="radio" value="STATE & NATIONAL COMPETITION" name="user_type" checked>
  <label for="a" style="font-weight: normal;margin-left: 20px;margin-top: 3px;">STATE & NATIONAL COMPETITION <sup style="color:red;">*</sup></label>

                <!-- <input type="radio" id="artist" name="main_category" onclick="show_subcat('artist')">
                <label for="artist" style="font-weight: normal">Artist</label> -->
              </div>
                            <div class="col-sm-6">
                            <input class="form-check-input" type="radio" value="WEEKLY BUSKERS’ PERFORMANCES" name="user_type">
  <label for="a" style="font-weight: normal;margin-left: 20px;margin-top: 3px;">WEEKLY BUSKERS’ PERFORMANCES </label>

                    </div>
                           
          
              
                          </div>

                           
            <div class="row mb-5">
                <!--start state-->
            <!--end state-->
            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">First Name<sup style="color:red;">*</sup></label>
                <input type="text" title="Name" class="form-control" placeholder="Name" name="name"
                value="{{old('name')??$audition->name??$user->name??null}}" required="">
            </div>
             <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Last Name<sup style="color:red;">*</sup></label>
                <input type="text" title="lname" class="form-control" placeholder="Last Name" value="{{ old('last_name')??$audition->name??$user->name??null}}"  name="last_name" required />
            </div>



            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Cell Number<sup style="color:red;">*</sup></label>
                <input type="text" title="Cell Phone" class="form-control" placeholder="Cell Phone" name="CellPhone"
                value="{{$audition->mobile??$user->mobile??old('mobile')??null}}" required="">
            </div>

            <div class="col-md-6 col-xs-12 form-group">
                        <label>DOB <sup style="color:red;">*</sup></label>
                        <input type="text"  class="form-control" placeholder="DD/MM/YYYY" required>
                    </div>
<!-- 
            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Date of Birth*</label>
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
            </div> -->

            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Street<sup style="color:red;">*</sup></label>
                <input type="text" title="Street Address" class="form-control" placeholder="Street Address"
                value="{{old('StreetAddress')??$audition->StreetAddress??null}}" name="StreetAddress" required="">
            </div>

            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Town/City<sup style="color:red;">*</sup></label>
                <input type="text" title="Town/City" class="form-control" placeholder="Town/City"
                value="{{old('TownCity')??$audition->TownCity??null}}" name="TownCity" required="">
            </div>


            <div class="col-md-6 col-xs-12 form-group state">
                <label style="color:#000;"> state:<sup style="color:red;">*</sup></label>
                <select name="state" class="form-control states" required="">
                    <option value="">Select State</option>
                   <option value="N/A" {{(old('state')??$audition->state??null)=='N/A'?'selected':''}} >N/A</option>
                   <option value="Alabama" {{(old('state')??$audition->state??null)=='Alabama'?'selected':''}} >Alabama</option>
                   <option value="Alaska" {{(old('state')??$audition->state??null)=='Alaska'?'selected':''}} >Alaska</option>
                   <option value="American Samoa" {{(old('state')??$audition->state??null)=='American Samoa'?'selected':''}} >American Samoa</option>
                   <option value="Arizona" {{(old('state')??$audition->state??null)=='Arizona'?'selected':''}} >Arizona</option>
                   <option value="Arkansas" {{(old('state')??$audition->state??null)=='Arkansas'?'selected':''}} >Arkansas</option>
                   <option value="California" {{(old('state')??$audition->state??null)=='California'?'selected':''}} >California</option>
                   <option value="Colorado" {{(old('state')??$audition->state??null)=='Colorado'?'selected':''}} >Colorado</option>
                   <option value="Connecticut" {{(old('state')??$audition->state??null)=='Connecticut'?'selected':''}} >Connecticut</option>
                   <option value="Delaware" {{(old('state')??$audition->state??null)=='Delaware'?'selected':''}} >Delaware</option>
                   <option value="District of Columbia" {{(old('state')??$audition->state??null)=='District of Columbia'?'selected':''}} >District of Columbia</option>
                   <option value="Florida" {{(old('state')??$audition->state??null)=='Florida'?'selected':''}} >Florida</option>
                   <option value="Georgia" {{(old('state')??$audition->state??null)=='Georgia'?'selected':''}} >Georgia</option>
                   <option value="Guam" {{(old('state')??$audition->state??null)=='Guam'?'selected':''}} >Guam</option>
                   <option value="Hawaii" {{(old('state')??$audition->state??null)=='Hawaii'?'selected':''}} >Hawaii</option>
                   <option value="Idaho" {{(old('state')??$audition->state??null)=='Idaho'?'selected':''}} >Idaho</option>
                   <option value="Illinois" {{(old('state')??$audition->state??null)=='Illinois'?'selected':''}} >Illinois</option>
                   <option value="Indiana" {{(old('state')??$audition->state??null)=='Indiana'?'selected':''}} >Indiana</option>
                   <option value="Iowa" {{(old('state')??$audition->state??null)=='Iowa'?'selected':''}} >Iowa</option>
                   <option value="Kansas" {{(old('state')??$audition->state??null)=='Kansas'?'selected':''}} >Kansas</option>
                   <option value="Kentucky" {{(old('state')??$audition->state??null)=='Kentucky'?'selected':''}} >Kentucky</option>
                   <option value="Louisiana" {{(old('state')??$audition->state??null)=='Louisiana'?'selected':''}} >Louisiana</option>
                   <option value="Maine" {{(old('state')??$audition->state??null)=='Maine'?'selected':''}} >Maine</option>
                   <option value="Maryland" {{(old('state')??$audition->state??null)=='Maryland'?'selected':''}} >Maryland</option>
                   <option value="Massachusetts" {{(old('state')??$audition->state??null)=='Massachusetts'?'selected':''}} >Massachusetts</option>
                   <option value="Michigan" {{(old('state')??$audition->state??null)=='Michigan'?'selected':''}} >Michigan</option>
                   <option value="Minnesota" {{(old('state')??$audition->state??null)=='Minnesota'?'selected':''}} >Minnesota</option>
                   <option value="Mississippi" {{(old('state')??$audition->state??null)=='Mississippi'?'selected':''}} >Mississippi</option>
                   <option value="Missouri" {{(old('state')??$audition->state??null)=='Missouri'?'selected':''}} >Missouri</option>
                   <option value="Montana" {{(old('state')??$audition->state??null)=='Montana'?'selected':''}} >Montana</option>
                   <option value="Nebraska" {{(old('state')??$audition->state??null)=='Nebraska'?'selected':''}} >Nebraska</option>
                   <option value="Nevada" {{(old('state')??$audition->state??null)=='Nevada'?'selected':''}} >Nevada</option>
                   <option value="New Hampshire" {{(old('state')??$audition->state??null)=='New Hampshire'?'selected':''}} >New Hampshire</option>
                   <option value="New Jersey" {{(old('state')??$audition->state??null)=='New Jersey'?'selected':''}} >New Jersey</option>
                   <option value="New Mexico" {{(old('state')??$audition->state??null)=='New Mexico'?'selected':''}} >New Mexico</option>
                   <option value="New York" {{(old('state')??$audition->state??null)=='New York'?'selected':''}} >New York</option>
                   <option value="North Carolina" {{(old('state')??$audition->state??null)=='North Carolina'?'selected':''}} >North Carolina</option>
                   <option value="North Dakota" {{(old('state')??$audition->state??null)=='North Dakota'?'selected':''}} >North Dakota</option>
                   <option value="Northern Marianas Islands" {{(old('state')??$audition->state??null)=='Northern Marianas Islands'?'selected':''}} >Northern Marianas Islands</option>
                   <option value="Ohio" {{(old('state')??$audition->state??null)=='Ohio'?'selected':''}} >Ohio</option>
                   <option value="Oklahoma" {{(old('state')??$audition->state??null)=='Oklahoma'?'selected':''}} >Oklahoma</option>
                   <option value="Oregon" {{(old('state')??$audition->state??null)=='Oregon'?'selected':''}} >Oregon</option>
                   <option value="Pennsylvania" {{(old('state')??$audition->state??null)=='Pennsylvania'?'selected':''}} >Pennsylvania</option>
                   <option value="Puerto Rico" {{(old('state')??$audition->state??null)=='Puerto Rico'?'selected':''}} >Puerto Rico</option>
                   <option value="Rhode Island" {{(old('state')??$audition->state??null)=='Rhode Island'?'selected':''}} >Rhode Island</option>
                   <option value="South Carolina" {{(old('state')??$audition->state??null)=='South Carolina'?'selected':''}} >South Carolina</option>
                   <option value="South Dakota" {{(old('state')??$audition->state??null)=='South Dakota'?'selected':''}} >South Dakota</option>
                   <option value="Tennessee" {{(old('state')??$audition->state??null)=='Tennessee'?'selected':''}} >Tennessee</option>
                   <option value="Texas" {{(old('state')??$audition->state??null)=='Texas'?'selected':''}} >Texas</option>
                   <option value="Utah" {{(old('state')??$audition->state??null)=='Utah'?'selected':''}} >Utah</option>
                   <option value="Vermont" {{(old('state')??$audition->state??null)=='Vermont'?'selected':''}} >Vermont</option>
                   <option value="Virginia" {{(old('state')??$audition->state??null)=='Virginia'?'selected':''}} >Virginia</option>
                   <option value="Virgin Islands" {{(old('state')??$audition->state??null)=='Virgin Islands'?'selected':''}} >Virgin Islands</option>
                   <option value="Washington" {{(old('state')??$audition->state??null)=='Washington'?'selected':''}} >Washington</option>
                   <option value="West Virginia" {{(old('state')??$audition->state??null)=='West Virginia'?'selected':''}} >West Virginia</option>
                   <option value="Wisconsin" {{(old('state')??$audition->state??null)=='Wisconsin'?'selected':''}} >Wisconsin</option>
                   <option value="Wyoming" {{(old('state')??$audition->state??null)=='Wyoming'?'selected':''}} >Wyoming</option>
                </select>
            </div>

            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Zip Code<sup style="color:red;">*</sup></label>
                <input type="text" title="Zip Code" class="form-control" placeholder="Zip Code" name="ZipCode"
                value="{{old('ZipCode')??$audition->ZipCode??null}}"  required="">
            </div>

               <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Email<sup style="color:red;">*</sup></label>
                <input type="text" title="Email" class="form-control" placeholder="Email" name="Email"
                value="{{$audition->email??$user->email??old('Email')??null}}" {{optional($user)->email?'readonly':''}}>
                @error('Email')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>


            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Verify Email<sup style="color:red;">*</sup></label>
                <input type="email" title="Verify_Email" class="form-control" placeholder="Verify Email" value="{{ old('verify_email')}}" name="verify_email" required />
            </div>


            <!--<div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Age*</label>
                <input type="text" title="Age" class="form-control" placeholder="Age" name="age"
                value="{{old('age')??$audition->age??null}}">
            </div>-->
            
            @if (!$user)
            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Password<sup style="color:red;">*</sup></label>
                <input type="password" title="Password" class="form-control" placeholder="Password" name="password" required="" id="password-fieldss">
              <span toggle="#password-fieldss" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>
            @endif

            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Verify Password<sup style="color:red;">*</sup></label>
                <input type="password" title="Verify_Password" class="form-control" placeholder="Verify Password" name="verify_password" value="{{ old('verify_password')}}" required id="password-fields" />
              <span toggle="#password-fields" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>

                 <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Studio Name</label>
                <input type="text" title="Studio Name" class="form-control" placeholder="Studio Name"
                value="{{old('ChannelName')??$audition->ChannelName??null}}" name="ChannelName">
            </div>


            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;"></label>
                
            </div>
            <h2 class="text-center" style="margin-top: 37px;margin-left: 307px;">MEDIA UPLOAD</h2>

<ul>
    <li>Photo upload is limited to 5MB per image.</li>
    <li>Photos of common image formats: JPG, GIF or PNG. Please make sure that the image you are uploading are in one of these formats.</li>
    <li>Video upload is limited to 500 MB per video.</li>
    <li>The video formats are accepted and supported for upload: MP4, M4V, MOV, AVI, WMV, FLV, MPG, MPEG</li>
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

<div class="col-md-4 col-xs-12 form-group">
    <label style="color:#000;">Video of your performance: ?</label>
    <input type="file" title="Video of your performance" id="vid" accept="video/mp4,video/x-m4v,video/*" class="form-control" placeholder="" name="video">
</div>

 <div class="col-md-12 form-group">
<div class="checkbox">
<label><input type="checkbox" value="1" name="term_and_condition" >
    By submitting this Application Form, you agree to be bound by the
    <a class="create" href="assets/upload/Terms-and-Conditions.pdf" target="_blank" style="text-decoration:underline;
color: #ffc107;
font-weight: 600;">Terms & Conditions</a>
    and <a class="create" href="assets/upload/privacyPolicy_5.pdf" target="_blank" style="text-decoration:underline;
color: #ffc107;
font-weight: 600;"> Privacy Policy *</a></label>
</div>
<div class="checkbox">
<label><input type="checkbox" value="1" name="content_permission" >
    By submitting this Application Form, you agree to be bound by the
    <a class="create" href="assets/upload/VIDEO-RELEASE CONSENT-FORM.pdf" target="_blank" style="text-decoration:underline;
color: #ffc107;
font-weight: 600;">
    Video Consent and Release, Photo/Video Permission and Release, and Participant’s Involvement Release *
    </a>
</label>
</div>
</div>
</div>

            <div class="col-md-12 form-group text-center mt-5">
                <button type="submit" id="register" class="btn btn-success" style="margin-right: 453px;" value="3" name="iscontinue">REGISTER</button>

                  <button type="submit" id="continue" class="btn btn-success" value="1" name="iscontinue">CONTINUE LATER</button>
            </div>

@else
            </div>
           <!-- <h2 class="text-center" style="">ABOUT YOUR BUSKING</h2> -->
           <div class="col-md-8" style="left: 29%;margin-bottom: 20px;">
                                <h2 class="text-left">ABOUT YOUR BUSKING</h2>
                               </div>
            <div class="row" style="
    margin-top: 10px;
">
            <div class="col-md-4 col-xs-12 form-group state">
                <label style="color:#000;"> Do you perform solo or as part of<br> a group? <sup style="color:red;">*</sup></label>
                <select name="cmbActType" class="form-control cmbActType" required="">
                   <option value="">Select...</option>
                   <option value="1" {{(old('cmbActType')??$audition->cmbActType??null)=='1'?'selected':''}} >Solo</option>
                   <option value="2" {{(old('cmbActType')??$audition->cmbActType??null)=='2'?'selected':''}} >Group</option>
                </select>
            </div>

            <script>
                $(document).ready(function(){
                   $('.cmbActType').change(function(){
                      var id=$(this).val();
                          if(id==1)
                          {
                            $('.cmbActMemberse').prop('required',false);
                            $('.cmbActMembers').hide();
                          }
                          else if(id==2)
                          {
                              $('.cmbActMemberse').prop('required',true);
                              $('.cmbActMembers').show();
                          }
                          else
                          {
                            $('.cmbActMemberse').prop('required',false);
                            $('.cmbActMembers').hide();
                          }
                   });


              

                });

            </script>

            <div class="col-md-4 col-xs-12 form-group cmbActMembers" style="display:none">
                <label style="color:#000;"> How many group members? <sup style="color:red;">*</sup></label>
                <select name="cmbActMembers" class="form-control cmbActMemberse">
                   <option value="">Select...</option>
                   <option value="1" {{(old('cmbActMembers')??$audition->cmbActMembers??null)=='1'?'selected':''}} >1</option>
                   <option value="2" {{(old('cmbActMembers')??$audition->cmbActMembers??null)=='2'?'selected':''}} >2</option>
                   <option value="3" {{(old('cmbActMembers')??$audition->cmbActMembers??null)=='3'?'selected':''}} >3</option>
                   <option value="4" {{(old('cmbActMembers')??$audition->cmbActMembers??null)=='4'?'selected':''}} >4</option>
                   <option value="5" {{(old('cmbActMembers')??$audition->cmbActMembers??null)=='5'?'selected':''}} >5</option>
                   <option value="6" {{(old('cmbActMembers')??$audition->cmbActMembers??null)=='6'?'selected':''}} >6+</option>
                </select>
            </div>

            <div class="col-md-4 col-xs-12 form-group" style="">
                <label style="color:#000;">Do you have a professional performance name?<sup style="color:red;">*</sup></label>
                <input type="text" title="Do you have a professional performance name? if so, what is it?" class="form-control" placeholder=""
                name="txtProPerformerName" value="{{old('txtProPerformerName')??$audition->txtProPerformerName??null}}" required="">
            </div>

            <div class="col-md-4 col-xs-12 form-group">
                <label style="color:#000;">How many hours do you perform per month?<sup style="color:red;">*</sup></label>
                <select name="cmbHoursPerMonth" class="form-control cmbHoursPerMonth" required="">
                   <option value="">Select...</option>
                   <option value="1" {{(old('cmbHoursPerMonth')??$audition->cmbHoursPerMonth??null)=='1'?'selected':''}}>1</option>
                   <option value="2" {{(old('cmbHoursPerMonth')??$audition->cmbHoursPerMonth??null)=='2'?'selected':''}}>2</option>
                   <option value="3" {{(old('cmbHoursPerMonth')??$audition->cmbHoursPerMonth??null)=='3'?'selected':''}}>3</option>
                   <option value="4" {{(old('cmbHoursPerMonth')??$audition->cmbHoursPerMonth??null)=='4'?'selected':''}}>4</option>
                   <option value="5" {{(old('cmbHoursPerMonth')??$audition->cmbHoursPerMonth??null)=='5'?'selected':''}}>5</option>
                   <option value="6" {{(old('cmbHoursPerMonth')??$audition->cmbHoursPerMonth??null)=='6'?'selected':''}}>6</option>
                   <option value="7" {{(old('cmbHoursPerMonth')??$audition->cmbHoursPerMonth??null)=='7'?'selected':''}}>7</option>
                   <option value="8" {{(old('cmbHoursPerMonth')??$audition->cmbHoursPerMonth??null)=='8'?'selected':''}}>8</option>
                   <option value="8" {{(old('cmbHoursPerMonth')??$audition->cmbHoursPerMonth??null)=='8'?'selected':''}}>8</option>
                   <option value="10" {{(old('cmbHoursPerMonth')??$audition->cmbHoursPerMonth??null)=='10'?'selected':''}}>10</option>
                   <option value="11" {{(old('cmbHoursPerMonth')??$audition->cmbHoursPerMonth??null)=='11'?'selected':''}}>other</option>
                </select>
            </div>

            <script>
                $(document).ready(function(){
                   $('.cmbHoursPerMonth').change(function(){
                      var id=$(this).val();
                          if(id==11)
                          {
                            $('.Othere').prop('required',true);
                            $('.Other').show();
                          }
                          else
                          {
                            $('.Othere').prop('required',false);
                            $('.Other').hide();
                          }
                   });
                });
            </script>

            <div class="col-md-4 col-xs-12 form-group Other" style="display:none">
                <label style="color:#000;">Other: <sup style="color:red;">*</sup></label>
                <input type="text" title="Other" class="form-control Othere" placeholder="Other" name="txtHoursPerMonthOther">
            </div>

            <div class="col-md-4 col-xs-12 form-group state">
                <label style="color:#000;">What is your type of performance?<sup style="color:red;">*</sup></label>
                <select name="cmbPerformanceType" class="form-control" required="">
                   <option value="">Select...</option>
                    <option value="10" {{(old('cmbPerformanceType')??$audition->cmbPerformanceType??null)=='10'?'selected':''}}>Singing</option>
                    <option value="20" {{(old('cmbPerformanceType')??$audition->cmbPerformanceType??null)=='20'?'selected':''}}>Dancing</option>
                    <option value="30" {{(old('cmbPerformanceType')??$audition->cmbPerformanceType??null)=='30'?'selected':''}}>Acrobatic</option>
                    <option value="40" {{(old('cmbPerformanceType')??$audition->cmbPerformanceType??null)=='40'?'selected':''}}>Magician</option>
                    <option value="50" {{(old('cmbPerformanceType')??$audition->cmbPerformanceType??null)=='50'?'selected':''}}>Comedian</option>
                    <option value="60" {{(old('cmbPerformanceType')??$audition->cmbPerformanceType??null)=='60'?'selected':''}}>Musicians</option>
                    <option value="70" {{(old('cmbPerformanceType')??$audition->cmbPerformanceType??null)=='70'?'selected':''}}>Circus Performing</option>
                    <option value="80" {{(old('cmbPerformanceType')??$audition->cmbPerformanceType??null)=='80'?'selected':''}}>Storytelling</option>
                    <option value="90" {{(old('cmbPerformanceType')??$audition->cmbPerformanceType??null)=='90'?'selected':''}}>Free-Style Performing</option>
                    <option value="other" {{(old('cmbPerformanceType')??$audition->cmbPerformanceType??null)=='other'?'selected':''}}>other</option>
                </select>
            </div>

            <div class="col-md-4 col-xs-12 form-group state">
                <label style="color:#000;">How many years have you been busking?<sup style="color:red;">*</sup></label>
                <select name="cmbBuskingLength" class="form-control cmbBuskingLength" required="">
                   <option value="">Select...</option>
                   <option value="1" {{(old('cmbBuskingLength')??$audition->cmbBuskingLength??null)=='1'?'selected':''}} >1</option>
                   <option value="2" {{(old('cmbBuskingLength')??$audition->cmbBuskingLength??null)=='2'?'selected':''}} >2</option>
                   <option value="3" {{(old('cmbBuskingLength')??$audition->cmbBuskingLength??null)=='3'?'selected':''}} >3</option>
                   <option value="4" {{(old('cmbBuskingLength')??$audition->cmbBuskingLength??null)=='4'?'selected':''}} >4</option>
                   <option value="5" {{(old('cmbBuskingLength')??$audition->cmbBuskingLength??null)=='5'?'selected':''}} >5</option>
                   <option value="6" {{(old('cmbBuskingLength')??$audition->cmbBuskingLength??null)=='6'?'selected':''}} >6</option>
                   <option value="7" {{(old('cmbBuskingLength')??$audition->cmbBuskingLength??null)=='7'?'selected':''}} >7</option>
                   <option value="8" {{(old('cmbBuskingLength')??$audition->cmbBuskingLength??null)=='8'?'selected':''}} >8</option>
                   <option value="9" {{(old('cmbBuskingLength')??$audition->cmbBuskingLength??null)=='9'?'selected':''}} >9</option>
                   <option value="10" {{(old('cmbBuskingLength')??$audition->cmbBuskingLength??null)=='10'?'selected':''}}>10</option>
                   <option value="11" {{(old('cmbBuskingLength')??$audition->cmbBuskingLength??null)=='11'?'selected':''}}>other</option>
                </select>
            </div>

            <script>
                $(document).ready(function(){
                   $('.cmbBuskingLength').change(function(){
                      var id=$(this).val();
                          if(id==11)
                          {
                            $('.txtBuskingLengthOthere').prop('required',true);
                            $('.txtBuskingLengthOther').show();
                          }
                          else
                          {
                            $('.txtBuskingLengthOthere').prop('required',false);
                            $('.txtBuskingLengthOther').hide();
                          }
                   });
                });
            </script>

            <div class="col-md-4 col-xs-12 form-group txtBuskingLengthOther" style="display:none">
                <label style="color:#000;">Other: *</label>
                <input type="text" title="Other" class="form-control txtBuskingLengthOthere" placeholder="Other"
                value="{{old('txtBuskingLengthOther')??$audition->txtBuskingLengthOther??null}}" name="txtBuskingLengthOther">
            </div>

            <div class="col-md-4 col-xs-12 form-group">
                <label style="color:#000;">Where is your main location of busking?<sup style="color:red;">*</sup></label>
                <input type="text" title="Where is your main location of busking?" class="form-control" placeholder=""
                value="{{old('txtProPerformerName')??$audition->txtProPerformerName??null}}" name="txtProPerformerName" required="">
            </div>

             <div class="col-md-4 col-xs-12 form-group">
                <label style="color:#000;">Do you perform at Public or Private Events? <sup style="color:red;">*</sup></label>
                <select name="cmbPrivateEvents" class="form-control cmbPrivateEvents" required="">
                   <option value="">Select...</option>
                   <option value="Yes"  {{(old('cmbPrivateEvents')??$audition->cmbPrivateEvents??null)=='Yes'?'selected':''}} >Yes</option>
                   <option value="No" {{(old('cmbPrivateEvents')??$audition->cmbPrivateEvents??null)=='No'?'selected':''}} >No</option>
                </select>
            </div>

            <script>
                $(document).ready(function(){
                   $('.cmbPrivateEvents').change(function(){
                      var id=$(this).val();
                          if(id=='Yes')
                          {
                            $('.txtPrivateEventsDetailse').prop('required',true);
                            $('.adult_checkboxe').attr('checked',true);
                            $('.txtPrivateEventsDetails').show();
                          }
                          else
                          {
                            $('.txtPrivateEventsDetailse').prop('required',false);
                            $('.adult_checkboxe').attr('checked',false);
                            $('.txtPrivateEventsDetails').hide();
                          }
                   });
                });
            </script>

            <div class="col-md-4 col-xs-12 form-group txtPrivateEventsDetails">
                <label style="color:#000;"> How often do you perform?</label>
                <input type="text" title=" How often do you perform?" class="form-control txtPrivateEventsDetailse" placeholder=""
                value="{{old('txtPrivateEventsDetails')??$audition->txtPrivateEventsDetails??null}}" name="txtPrivateEventsDetails" style="margin-top: 16px;">
            </div>

            <hr>

<div class="col-md-12 form-group txtPrivateEventsDetails">
                <div class="checkbox">
                <label><input type="checkbox" class="adult_checkboxe" value="1" name="Anniversaries" checked="">
                    Anniversaries
                </label>
                </div>
                <div class="checkbox">
                <label><input type="checkbox" value="1" name="Birthdays_Parties">
                    Birthdays Parties
                </label>
                </div>
                <div class="checkbox">
                <label><input type="checkbox" value="1" name="Companies_and_Organizations_Events">
                    Companies and Organizations Events
                </label>
                </div>
                <div class="checkbox">
                <label><input type="checkbox" value="1" name="Galleries_and_Restaurants">
                    Galleries and Restaurants
                </label>
                </div>
                <div class="checkbox">
                <label><input type="checkbox" value="1" name="Special_Venues">
                  Special Venues
                </label>
                </div>
                <div class="checkbox">
                <label><input type="checkbox" value="1" name="Sports_Events">
                    Sports Events
                </label>
                </div>
                <div class="checkbox">
                <label><input type="checkbox" value="1" name="Weddings">
                    Weddings
                </label>
                </div>
                <div class="checkbox">
                <label><input type="checkbox" value="1" name="Other_Special_Occasions">
                    Other Special Occasions
                </label>
                </div>
            </div>

            </div>
<hr>

<input type="hidden" value="{{ @$_GET['uid'] }}" name="user_id">

            <div class="col-md-12 form-group text-center mt-5">
                <!-- <button type="submit" class="btn btn-success">FINISH</button> -->

                  <button type="submit" class="btn btn-success" value="2" name="iscontinue">FINISH</button>
            </div>

@endif

        </form>
                            </div>

                        </div>
                     </div>


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


$("#register").click(function() {

        if(document.getElementById("img").files.length == 0 ){
            alert( "Please upload Recent headshot photo of yourself" );
            return false;
        }

        if(document.getElementById("vid").files.length == 0 ){
            alert( "Please upload a Video of your performance" );
            return false;

        }
        return true;

        });

</script>
@endsection
