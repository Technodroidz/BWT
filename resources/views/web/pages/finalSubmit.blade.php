@extends('web.welcome')

@section('title','Personal-Info')

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
                                <input type="hidden" value="{{ @$_GET['a'] }}" name="user_id" >
                                <div>
                                @error('Email')
                <strong class="text-danger">{{$message}}</strong>
                @enderror

                <div>

                          <div class="row" style="margin-top:10px;width:100%; border-style:ridge; padding: 18px;border-width: 5px;border-color: #5f2652;border-radius: 50px;" >
                           <div class="col-md-12" style="padding-top: 15px;">

                        

                               <div class="row">
                                     <div class="col-md-8">
                            
                        @if(@$_GET['b'] == 0)

                        <h5 class="text-center" style="    margin-top: -49px;
    margin-left: -256px;
    position: absolute;
    left: 36%;
    top: 59%;
    width: 170%;">

                      <p>  Thank you for submission of your information.</p>
                      <p>  A email verification link is sent to you, please check inbox.</p>
                      </h5>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
                        @else
            <h2 class="text-center" style="margin-top:10px;margin-left:10px">MEDIA UPLOAD</h2>

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
                <input type="file" title=" Recent headshot photo of yourself:" accept="image/png, image/jpeg" onchange="readURL(this);" class="form-control" placeholder="" name="photo">

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
                    <input type="file" title="Video of your performance" accept="video/mp4,video/x-m4v,video/*" class="form-control" placeholder="" name="video">
                </div>

                 <div class="col-md-12 form-group">
                <div class="checkbox">
                <label><input type="checkbox" value="1" name="term_and_condition" required>
                    By submitting this Application Form, you agree to be bound by the
                    <a class="create" href="assets/upload/Terms-and-Conditions.pdf" target="_blank" style="text-decoration:underline;
    color: #ffc107;
    font-weight: 600;">Terms & Conditions</a>
                    and <a class="create" href="assets/upload/privacyPolicy_5.pdf" target="_blank" style="text-decoration:underline;
    color: #ffc107;
    font-weight: 600;"> Privacy Policy *</a></label>
                </div>
                <div class="checkbox">
                <label><input type="checkbox" value="1" name="content_permission" required>
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
                <!-- <button type="submit" class="btn btn-success">FINISH</button> -->

                  <button type="submit" class="btn btn-success" value="1" name="isFinish">FINISH</button>
            </div>

@endif
<br/>
<br/>
<br/>
<br/>
<br/><br/>
<br/>
<br/>
<br/>
<br/><br/>
<br/>


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
</script>
@endsection
