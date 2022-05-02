@extends('web.welcome')

@section('title','Help')

@section('content')
<style type="text/css">
  
  .listing li {
    box-shadow: none;
    border: none;
    background: transparent;
    margin-bottom: 9px;
    padding: 0px; border-bottom: none;  border-right: none}
    .d-table { width: 100%; border:1px solid #d3d3d3; }
    .d-table td, .d-table th { padding: 2px 10px; border-bottom: 1px solid #d3d3d3;
     border-right: 1px solid #d3d3d3 }
     
     @media screen and (max-width: 767px) {
 .table {overflow-x: scroll;}

}
</style>

<div class="wrap-height">
                        <div class="row">
                         @if(@$_GET['u'] == 'a1')
                        <div class="alert alert-success" role="alert" style="position: absolute;top: 10px;left: 28px;">
                        Thank you for feddback!
                         </div>
                        @endif
                            <div class="col-md-12 text-right form-group">
                                <button onclick="goBack()" class="btn btn-success back-btn" style="margin-top: 20px"><i class="fa fa-chevron-left"></i> Go Back</button>
                            </div>
                          <div class="col-md-12 col-xs-12 form-group">
                            <div class="tabs-card">
                              <ul class="leftUl">
                                <li class="active" id="first">
                                  <a href="javascript:void(0);" class="leftLink">
                                    Video Submission Tips
                                  </a>
                                </li>
                                <li id="two">
                                  <a href="javascript:void(0);" class="leftLink">
                                    FAQ (Frequently Asked Questions)
                                  </a>
                                </li>
                                <!-- <li id="three">
                                  <a href="javascript:void(0);" class="leftLink">
                                    AdChoices
                                  </a>
                                </li> 
                                <li id="four">
                                  <a href="javascript:void(0);" class="leftLink">
                                    Site Map
                                  </a>
                                </li>-->
                                <li id="five">
                                  <a href="javascript:void(0);" class="leftLink">
                                    Feedback
                                  </a>
                                </li>
                              </ul>
                              <div id="content">
                                <div class="active" id="video-submit">
                                  <strong>VIDEO AND PHOTO SUBMISSION TIPS </strong>
                                     <p class="mar-all-0" style="
    padding: 10px 15px;
    display: block;
    margin: 10px;">Below are some helpful tips to review before submitting your photo and video audition:</p>


                                      <ul class="listing">
                                        <li>Video Audition must be originally uploaded, please no social media and any other links such as
Dropbox, iCloud, Google Drive, etc.</li>
                                        <li>A four (4) minute video is the maximum time allowed, including your introduction which we
encourage you to do. </li>
                                        <li>Choose a specific theme and idea (e.g., dance, music, an act performance)</li>
                                        <li>Do not forget to check your video audio to make sure we can hear you clearly</li>
                                        <li>Make sure your performance’s area is always well-lit to ensure a highest quality video.</li>
                                        <li>Make sure we can hear you and it is the right music, if you are using a backing track, remember
it is your voice we want to hear. You must be sure others understand you to follow along. </li>
                                        <li>Do not submit a highly processed vocals, edited or reel video.</li>
                                        <li>Do not use any Karaoke apps (e.g., Star Maker, Smule, Vocal Ease, etc.).</li>
                                        <li>Do make sure you are fun, energetic, inspiring, and entertaining.</li>
                                      </ul>

<br>

                             <strong>Media Upload</strong>
                                                                 <p class="mar-all-0" style="
                                padding: 10px 15px;
                                display: block;
                                margin: 10px; color: red; font-weight: 600">*Please note that failure to comply with the following criteria below your application will be denied.</p>
                                <p style="
                                padding: 10px 15px;
                                display: block;
                                margin: 10px;">The acceptable sizes of the audition video below:
</p><div class="table">
                                <table class="d-table">
                                  <tr>
                                    <th>Video Size</th>
                                    <th>Dimensions</th>
                                    <th>Video Length</th>
                                    <th>File Size Limit</th>
                                  </tr>
                                  <tr>
                                    <td>720p</td>
                                    <td>1280 x 720</td>
                                    <td>4 minutes</td>
                                    <td>500 MB</td>
                                  </tr>
                                  <tr>
                                    <td>1080p</td>
                                    <td>1920 X 1080</td>
                                    <td>4 minutes</td>
                                    <td>500 MB</td>
                                  </tr>
                                  </table>
</div>
                                   <p style="
                                padding: 10px 15px;
                                display: block;
                                margin:30px 10px 10px 10px;">The acceptable profile of the photo headshot below:
</p>
<div class="table">
                                <table class="d-table">
                                  <tr>
                                    <th>Photo Size</th>
                                    <th>Position</th>
                                    <th>Size Limit</th>
                                    <th>Format</th>
                                    <th>Type</th>
                                  </tr>
                                  <tr>
                                    <td>8 x 10</td>
                                    <td>Portrait/ Vertical</td>
                                    <td>5MB</td>
                                    <td>JPEG</td>
                                    <td>Serious Theatrical shot or
Smiling Commercial Shot</td>
                                  </tr>
                                  </table>

                                </div>
                                <div class="row">
                                  <div class="col-md-2">
                                    <img src="http://54.153.36.130/uploads/1-user.jpg" style="width: 100%">
                                    <p>Theatrical Shot (More Serious Look)</p>
                                  </div>
                                  <div class="col-md-2">
                                    <img src="http://54.153.36.130/uploads/2-user.jpg" style="width: 100%">
                                    <p>Smilling Commercial Shot (Showing Teeth)</p>
                                  </div>
                                </div>
                                </div>
                                <div id="faq-div">
                                  <h3>Frequently Asked Questions</h3>
                                  <p>
                                    The following list contains common questions regarding registration with the eTribez platform. The answers given here should solve most of the issues registrants may face during registration.
                                  </p>
                                  <h3>Registration and Sign In</h3>
                                  <ul class="accordion">
                                    <li>
                                      <a class="active"><strong>Q. I try to register and see the following message: "Email address already exists".</strong></a>
                                      <p class="mar-all-0" style="display: block;">A: This happens when a user is already registered with their email address but tries to register again. Simply enter the system using the <strong>Sign In</strong> window instead of <strong>Register</strong>.</p>
                                    </li>
                                    <li>
                                      <a>Q: I am already registered to the system. Now I try to sign in and I get the following message: "Incorrect email or password".</a>
                                      <p class="mar-all-0">A: This can happen for two possible reasons:
                                        1. You may have <strong>forgotten your password</strong>. Simply click on Forgotten my password and a new password will be sent to your email address<br/>
                                        2. You may have used a different email address or made a typo when you first registered. For example, typing <strong>user@gamil.com</strong> instead of <strong>user@gmail.com</strong>. In such case, please contact us and provide your name and email address.
                                      </p>
                                    </li>
                                    <li>
                                      <a>Q: I get a message telling me that my session has expired, or that my browser blocks cookies.</a>
                                      <p class="mar-all-0">A: A session expires after several hours of inactivity. Simply <strong>sign in</strong> again using the Sign In window. If it happens again after you signed in, make sure that cookies are enabled in your browser.</p>
                                    </li>
                                    <li>
                                      <a>Q: What browsers can I use to register?</a>
                                      <p class="mar-all-0">A: The registration system works best on <strong>Chrome</strong> browser. It also supports <strong>Firefox</strong> (version 3.5 and newer) and <strong>Internet Explorer</strong> (version 10 and newer), <strong>Safari</strong> and <strong>Edge</strong>.</p>
                                    </li>
                                  </ul>                                  
                                  <h3>Completing the Application Form</h3>
                                  <ul class="accordion">
                                    <li>
                                      <a>Q: I click on the Next button to go to the next page, but the system won't let me.</a>
                                      <p class="mar-all-0">A: The system allows you to progress to the next page only after all required questions (marked with a red star) have been completed. Scroll up to find the missing answer, which will be marked with a red message such as: <i><span style="color:#ff0000">This field is required.</span></i></p>
                                    </li>
                                    <li>
                                      <a>Q: I haven’t finished answering all the questions. Can I save my work and continue later?</a>
                                      <p class="mar-all-0">A: Yes. Simply click on the <strong>Continue Later</strong> button and the system will save your progress. You will be able to return and complete your application at any time using the <strong>Sign In</strong> panel. Use your email address and the password you chose to sign in.</p>
                                    </li>
                                  </ul>
                                  <h3>Media Upload</h3>
                                  <ul class="accordion">
                                    <li>
                                      <a>Q: I am trying to upload photos but I get the following message: "Max file size 5MB".</a>
                                      <p class="mar-all-0">A: Photo upload is limited to 5MB per image.</p>
                                    </li>
                                    <li>
                                      <a>Q: My photos are smaller than 5MB but I still get an error message.</a>
                                      <p class="mar-all-0">A: Supported formats are common image formats: <strong>JPG, GIF</strong> or <strong>PNG</strong> Please verify that the images you upload are in one of these formats.</p>
                                    </li>
                                  </ul>
                                </div>
                                <!-- <div id="ad-choices">
                                  <ul class="accordion">
                                    <li>
                                      <a class="active">Lorem ipsum</a>
                                      <p style="display: block;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, ipsum, fuga, in, obcaecati magni ullam nobis voluptas fugiat tenetur voluptatum quas tempora maxime rerum neque deserunt suscipit provident cumque et mollitia ex aspernatur porro minus sapiente voluptatibus eos at perferendis repellat odit aliquid harum molestias ratione pariatur adipisci. Aliquid, iure.</p>
                                    </li>
                                    <li>
                                      <a>Repellat Odit Aliquid</a>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, ipsum, fuga, in, obcaecati magni ullam nobis voluptas fugiat tenetur voluptatum quas tempora maxime rerum neque deserunt suscipit provident cumque et mollitia ex aspernatur porro minus sapiente voluptatibus eos at perferendis repellat odit aliquid harum molestias ratione pariatur adipisci. Aliquid, iure.</p>
                                    </li>
                                    <li>
                                      <a>Dolor sit Amet</a>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, ipsum, fuga, in, obcaecati magni ullam nobis voluptas fugiat tenetur voluptatum quas tempora maxime rerum neque deserunt suscipit provident cumque et mollitia ex aspernatur porro minus sapiente voluptatibus eos at perferendis repellat odit aliquid harum molestias ratione pariatur adipisci. Aliquid, iure.</p>
                                    </li>
                                  </ul>
                                </div> 
                                <div id="site-map">
                                  Site Map
                                </div>-->
                                <div id="feedback">
                                  <div class="form-div">
                                    <form   method="post" action="{{route('feedbackSubmission')}}">
                                      @csrf
                                      <div class="row">
                                        <div class="col-md-12 form-group">
                                          <h5>Your feedback here</h5>
                                        </div>
                                        <div class="col-md-6 col-xs-12 form-group">
                                          <label>First Name</label>
                                          <input type="text" name="first_name" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-xs-12 form-group">
                                          <label>Last Name</label>
                                          <input type="text" name="last_name" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-xs-12 form-group">
                                          <label>Email</label>
                                          <input type="email" name="email" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-xs-12 form-group">
                                          <label>Phone Number</label>
                                          <input type="text" name="phone_no" class="form-control">
                                        </div>
                                        <div class="col-md-12 col-xs-12 form-group">
                                          <label>Subject</label>
                                          <input type="text" name="subject" class="form-control">
                                        </div>
                                        <div class="col-md-12 col-xs-12 form-group">
                                          <label>Feedback</label>
                                          <textarea class="form-control" cols="6" name="message"></textarea>
                                        </div>
                                        <div class="col-md-12 text-right">
                                          <button type="submit" class="btn btn-success">Submit</button>
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
@endsection
