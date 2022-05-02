@extends('web.welcome')

@section('title','Judges')


@section('content')

<style type="text/css">
    .mb-b{ margin-bottom: 0px; text-align: right}
    .invitation { margin: 20px; border:1px solid #d3d3d3; padding: 20px; }
    .peer { margin: 30px 0px; display: block; }
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

        <form method="post" action="{{ route('judgesRegistration') }}" enctype="multipart/form-data">
                                @csrf()

    <input type="hidden" name="finalSubmit" value="1" class="form-control" placeholder="" required>
    <input type="hidden" name="uid" value="<?php echo @$_GET['uid']; ?>" class="form-control" placeholder="" required>


        <div class="card" style="box-shadow: 0px 0px 7px -1px #ccc;">
            <div class="card-body">

                <div class="col-md-12 col-xs-12 form-group">
                    <div class="invitation">
                        <h2>State Judge Invitation</h2>
                        <p class="">You Are Invited!</p>
                        <p style="text-align: justify;">Busking With Talent® is a digital stage showcasing talent and performance, a unique dais that will attract
thousands of people from the convenience of their homes. For the BWT’s Audition Competition Series to
run smoothly, we need qualified State Judges to evaluate each busker’s performance. Interested
candidates should reside in the respective state the competition will take place. Everyone with a passion
for the Arts is welcome to become a state-level judge. We hope you or a representative of your
organization will join us as one of BWT’s judges for its state competitions.</p>
                    <p class="mb-b">Respectfully,</p>
                       <p class="mb-b"> BWT™</p>
                        <p class="mb-b">Management Team</p>
                    </div>
                    </div>


                <div class="row">

                    <div class="col-md-12 col-xs-12 text-center">
                    <strong class="peer">Kindly fill out our inquiry form. Once we’ve received your confirmation, we will gladly match you<br>
with other qualified State judges and assign you with the perfect team.</strong>
                    </div>

                <!-- <div class="col-md-12 col-xs-12 form-group">
                        <img class="img-responsive form-logo" src="http://54.153.36.130/assets/img/internship.png" width="100%" style="margin: 0 auto; display: block">
                    </div>-->

                    <!-- <div class="row" style="width: 100%;margin-left: -2px;">
    <div class="col-md-4  form-group">
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

                 


                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What skills do you have to make your opportunity with BWT unique?  </label>
                        <input type="text" name="skills" class="form-control" placeholder="" required>
                    </div>

                    
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What is your gifts and/or talent in dealing with people?</label>
                        <input type="text" name="talent" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What kind of working environment that you succeed in the best?</label>
                        <input type="text" name="achievement" class="form-control" placeholder="" required>
                    </div>


<div class="col-md-12 col-xs-12 form-group">
                        <label>Have you ever worked in any of the industries below? If so, tell us what your experience (please be
specified and check all that may apply)</label>
                        <div>
                        <input type="checkbox" id="vehicle1" name="experience[]" value="Advertising">
<label for="vehicle1"> Advertising</label><br>
<input type="checkbox" id="vehicle6" name="experience[]" value="Digital Equipment">
<label for="vehicle6"> Digital Equipment</label><br>


<input type="checkbox" id="vehicle6" name="experience[]" value="Entertainment">
<label for="vehicle6"> Entertainment</label><br>

<input type="checkbox" id="vehicle2" name="experience[]" value="Social Media">
<label for="vehicle2"> Social Media</label><br>

<input type="checkbox" id="vehicle6" name="experience[]" value="Stage Set">
<label for="vehicle6"> Stage Set</label><br>

<input type="checkbox" id="vehicle3" name="experience[]" value="Marketing">
<label for="vehicle3"> Marketing</label><br>

<input type="checkbox" id="vehicle4" name="experience[]" value="Production">
<label for="vehicle4"> Production </label><br>
<input type="checkbox" id="vehicle5" name="experience[]" value="Photographer">
<label for="vehicle5"> Photographer</label><br>


<input type="checkbox" id="vehicle7" name="experience[]" value="Technology">
<label for="vehicle7"> Technology</label><br>

<input type="checkbox" id="vehicle7" name="experience[]" value="Television">
<label for="vehicle7"> Television</label><br>

<input type="checkbox" id="vehicle7" name="experience[]" value="Theater">
<label for="vehicle7">Theater</label><br>

<input type="checkbox" id="vehicle7" name="experience[]" value="Video">
<label for="vehicle7"> Video</label><br>


</div>


<!-- <textarea name="experience_details" class="form-control"></textarea> -->
                    </div>

             <!-- <div class="col-md-6 col-xs-12 form-group">
                        <label>What is the area you are applying for?  <sup style="color:#ff0000;">*</sup></label>
                   
                <select class="form-control dropdown" id="state" name="position">

                <option value="" selected="selected" disabled>Select a position</option>
                <option value="Camera worker">Camera worker</option>
                <option value="Content Writer">Content Writer</option>
                <option value="Digital Media">Digital Media</option>
                <option value="Entertainment">Entertainment</option>
                <option value="Host Producers">Host Producers</option>          
                <option value="Marketing/Advertising">Marketing/Advertising</option>          
                <option value="Producers">Producers</option>          
                <option value="Photographer">Photographer</option>          
                <option value="Social Media">Social Media</option>          
                <option value="Technology">Technology</option>          
                <option value="Technician/Crew">Technician/Crew</option>          
                <option value="Video Production">Video Production</option>          
                     
             
                </select> -->
                    </div>


                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Please finish the following sentences</label>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <div class="row">
                             <div class="col-md-3 col-xs-12 form-group">
                        <label> I function at my best when </label>
                            </div>
                             <div class="col-md-9 col-xs-12 form-group">
                        <input type="text" name="best" class="form-control" placeholder="" required>
                       </div>
                   </div>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <div class="row">
                             <div class="col-md-3 col-xs-12 form-group">
                        <label> I am at my worse when </label>
                            </div>
                             <div class="col-md-9 col-xs-12 form-group">
                        <input type="text" name="worse" class="form-control" placeholder="" required>
                       </div>
                   </div>
                    </div>

                     <div class="col-md-12 col-xs-12 form-group">
                        <label> What do you expect from being an employee of BWT?</label>
                        <input type="text" name="expectation" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label> What do you do for entertainment? </label>
                        <input type="text" name="entertainment" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Have you ever competed in a competition? If so, what was it, and how did you do?</label>
                        <input type="text" name="last_job" class="form-control" placeholder="" required>
                    </div>

                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Have you ever stopped to listen to street performers? If so, where?  and how often? </label>
                        <input type="text" name="street_performer" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What did you like the best about street performers? What did you like the least?</label>
                        <input type="text" name="best_street_performer" class="form-control" placeholder="" required>
                    </div>
                   
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What is your favorite activity to do & Why?</label>
                        <input type="text" name="activity" class="form-control" placeholder="" required>
                    </div>
                    <!-- <div class="col-md-12 col-xs-12 form-group">
                        <label>Why?</label>
                        <input type="text" name="why_include" class="form-control" placeholder="" required>
                    </div> -->
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>How do you handle the following conflicts among peers, colleagues, and supervisors? Gossiping? </label>
                        <input type="text" name="handle_issue" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>List five characteristics of a job that you desire.</label>
                        <input type="text" name="characteristics" class="form-control" placeholder="" required>
                    </div>
                    
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>When are you available? <sup style="color:#ff0000;">*</sup></label>
                   
                <select class="form-control dropdown" id="state" name="availability">

                <option value="" selected="selected" disabled>Select a availability</option>
                <option value="Immediate">Immediate</option>
                <option value="1 week">1 week</option>
                <option value="2 week">2 week</option>
                <option value="3 week">3 week</option>
                <option value="4 week">4 week</option>          
             
                </select>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Please submit a resume (one page only) or profile that will help us to know you better. </label>
                        <input type="file" name="image" class="form-control" style="width: 49%;">
                    </div>



                     <div class="col-md-12 col-xs-12 form-group">
                       
                   

                        <div style="margin-bottom: 10px;">
                             <label>As a prospective judge, what do you consider your greatest strengths? Weaknesses?</label>
                        <input type="text" name="7b" class="form-control" placeholder="" required>
                        </div>
                        <div>
                             <label> Please describe a situation where you took a controversial position that angered or offended people and
explain how you handled it.</label>
                        <input type="text" name="7c" class="form-control" placeholder="" required>
                        </div>

                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label> Please describe your administrative experience. What are your primary strengths as a supervisor? As
an administrator?</label>
                        <input type="text" name="expectation" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Please describe your first-hand experience dealing with socially, economically, or politically people
different from you.</label>
                        <input type="text" name="creative_energy" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What or who the major influences in your life are? Why?</label>
                        <input type="text" name="why_include" class="form-control" placeholder="" required>
                    </div>

                  


                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Why should we select you as a State Judge?</sup></label>
                        <input type="text" name="about_traveling" class="form-control" placeholder="" required>
                    </div>
                    <!-- <div class="col-md-12 col-xs-12 form-group">
                        <label>What is your goal after you complete your internship?</sup></label>
                        <input type="text" name="goal" class="form-control" placeholder="" required>
                    </div> -->
                    <div class="col-md-12 col-xs-12 form-group">
                        <button type="submit" class="btn btn-success" style="width:100%;">Submit</button>
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
