@extends('web.welcome')

@section('title','Focus Group')


@section('content')
<style type="text/css">
    .mb-b{ margin-bottom: 0px; text-align: right}
    .invitation { margin: 20px; border:1px solid #d3d3d3; padding: 20px; }
    .peer { margin: 20px 0px; }
</style>

<div class="wrap-height">
    <br/>

    @if(@$_GET['u'] == 3)

    <div class="form-group" style="width: 47%;
    margin-left: 266px;
    position: absolute;
    top: 25%;">
      
      <div class="alert alert-success" role="alert">

      Your request has been successfully submitted. We will get back to you with more information.

</div>
</div>

@else

      <div class="text-right form-group">
            <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>

        <form method="post" action="{{ route('focusRegistration') }}" enctype="multipart/form-data">
                                @csrf()

    <input type="hidden" name="finalSubmit" value="1" class="form-control" placeholder="" required>
    <input type="hidden" name="uid" value="<?php echo @$_GET['uid']; ?>" class="form-control" placeholder="" required>


        <div class="card" style="box-shadow: 0px 0px 7px -1px #ccc;">
            <div class="card-body">


                <div class="row">


                <!-- <div class="col-md-12 col-xs-12 form-group">
                        <img class="img-responsive form-logo" src="http://54.153.36.130/assets/img/internship.png" width="100%" style="margin: 0 auto; display: block">
                    </div>-->

                 <div class="col-md-12 col-xs-12 form-group">
                    <div class="invitation">
                        <h2>Focus Group Invitation</h2>
                        <p class="">You Are Invited!</p>
                        <p style="text-align: justify;">We respectfully inquire of your noble assistance in serving as a member of Busking with Talent’s
(BWT™) focus group. We need a viable team of peers who have high regard for Artists and Artisans in
our industry to join us in selecting the best busker performers (a/k/a ‘street performer’) in perspective
states. You will be participating in an online audition video focus group from ages thirteen and over.
Those selected by you will continue their performance at the next state level in the competition and/or be selected to showcase on our weekly busker performances platform. We will be honored to have you work
with us in discovering the Number #1 Busking Performance of all times. Will you kindly go online to
<a href="https://www.bwtstudio.com/">www.bwtstudio.com</a>/join our community and click focus group? Once we have received your online
questionnaire as subscribed below, we will follow up with you to complete it for the selected state focus
group team.</p>
                    <p class="mb-b">Respectfully,</p>
                       <p class="mb-b"> BWT™</p>
                        <p class="mb-b">Management Team</p>
                    </div>
                    </div>
                    <div class="row" style="width: 100%;margin-left: -2px;">
    <!-- <div class="col-md-4  form-group">
    <label>First Name <sup style="color:#ff0000;">*</sup></label>
   <input type="text"  name="first_name"  value="{{ @$data['first_name'] }}" disabled class="form-control" placeholder="" required>
                 
    </div>
    <div class="col-md-4  form-group">
    <label>Middle Name <sup style="color:#ff0000;"></sup></label>
   <input type="text"  name="mid_name"  value="{{ @$data['mid_name'] }}" disabled class="form-control" placeholder="" >
       
    </div>
    <div class="col-md-4 form-group">
    <label>Last Name <sup style="color:#ff0000;">*</sup></label>
   <input type="text"  name="last_name"  value="{{ @$data['last_name'] }}" disabled class="form-control" placeholder="" required>
       
    </div>
  </div>

                  


                 
                    <div class="col-md-6 col-xs-12 form-group">
                        <label> Phone <sup style="color:#ff0000;">*</sup></label>
                        <input type="text"  value="{{ @$data['phone'] }}" disabled  class="form-control" placeholder="" required>
                    </div>



                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Education <sup style="color:#ff0000;">*</sup></label>

                        <input type="text" name="education" value="{{ @$data['education'] }}" class="form-control" placeholder="" required>

                     
                    </div>

                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Major discipline <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="education_discipline" value="{{ @$data['education_discipline'] }}" class="form-control" placeholder="" required>
                    </div>



                    
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Street/Address <sup style="color:#ff0000;">*</sup></label>
                        <input type="text"  value="{{ @$data['address'] }}" disabled class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Town/City <sup style="color:#ff0000;">*</sup></label>
                        <input type="text"  value="{{ @$data['city'] }}" disabled class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>State <sup style="color:#ff0000;">*</sup></label>
                        <input type="text"  value="{{ @$data['state'] }}" disabled class="form-control"  placeholder="" required>
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Zip <sup style="color:#ff0000;">*</sup></label>
                        <input type="text"  value="{{ @$data['zip'] }}" disabled class="form-control" placeholder="" required>
                    </div>

                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Country <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" value="{{ @$data['country'] }}" name="country" class="form-control" placeholder="" required>
                    </div>

                   
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>DOB <sup style="color:#ff0000;">*</sup></label>
                        <input type="date" name="dob" class="form-control" placeholder="MM/DD/YYYY" required>
                    </div>

                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Email <sup style="color:#ff0000;">*</sup></label>
                        <input type="email"  value="{{ @$data['email'] }}" disabled class="form-control" placeholder="you@example.com" required>
                    </div> -->

                     <div class="col-md-12 col-xs-12 text-center">
                          <h2 class="peer">FOCUS GROUP PEER INTERVIEW QUESTIONS</h2>
                      </div>

                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Briefly tell us about yourself…  </label>
                        <input type="text" name="skills" class="form-control" placeholder="" required>
                    </div>

                    
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What is your greatest accomplishment today?</label>
                        <input type="text" name="talent" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Describe your goals for the next to years?</label>
                        <input type="text" name="achievement" class="form-control" placeholder="" required>
                    </div>




                     <div class="col-md-12 col-xs-12 form-group">
                        <label>Do you prefer to work independently or with others?</label>
                        <input type="text" name="expectation" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Name five adjectives that describe who you are?</label>
                        <input type="text" name="entertainment" class="form-control" placeholder="" required>
                    </div>

                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What is your favorite movie/TV show? </label>
                        <input type="text" name="street_performer" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Name three attributes you feel that a person should have to be on a team.</label>
                        <input type="text" name="best_street_performer" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>How do you deal with the pressure of meeting deadlines?</label>
                        <input type="text" name="last_job" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Where is “busking” origin? Have you heard about “Buskers” or “Busking” before now?</label>
                        <input type="text" name="activity" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Have you ever stopped and watch Street Performers? If so, where? and how often?</label>
                        <input type="text" name="why_include" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Name one or two things that may set you apart within your peer group from other invitees? </label>
                        <input type="text" name="handle_issue" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Your group may be given instructions to complete a specific task a certain way and time. However, a
member of the group finds a way for the task to be done quickly. How would you handle this issue?</label>
                        <input type="text" name="characteristics" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What can you add to the specific position that probably any of the existing focus group invitees do
not offer?</label>
                        <input type="text" name="features" class="form-control" placeholder="" required>
                    </div>  
                   
                    <div class="col-md-12 col-xs-12 form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- <div class="card" id="card">
        <div class="card-body text-center">
            <a href="#" class="like">Like</a>
            <a href="#" class="tweet">Tweet</a>
            <a href="#" class="pin">Pin</a>
            <a href="#" class="gplus">+1</a>
            <a href="#" class="insta">in</a>
        </div>
    </div> -->

    @endif
 </div>

@endsection 
