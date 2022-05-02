@extends('layouts.admin')


@section('title','Internship')


@section('content')

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

<div class="text-center form-group">
          @if(!empty(@$data['src']))
          <img src="{{ url('uploads/'.@$data['src']) }}" style="width: 14%;">
          @else
          <img src="https://demo.dj-extensions.com/dj-classifieds-demo-2021/components/com_djclassifieds/assets/images/default_profile.png" style="width: 14%;">
          @endif
            <!-- <button onclick="goBack()" class="btn btn-success"><i class="fa fa-chevron-left"></i> Go Back</button> -->
        </div>

        <!-- <form method="post" action="{{ route('jobRegistration') }}" enctype="multipart/form-data">
                                @csrf()

    <input type="hidden" name="finalSubmit" value="1" class="form-control" placeholder="" required>
    <input type="hidden" name="uid" value="<?php echo @$_GET['uid']; ?>" class="form-control" placeholder="" required> -->


        <div class="card" style="box-shadow: 0px 0px 7px -1px #ccc;">
            <div class="card-body">


                <div class="row">
<!-- 
                 <div class="col-md-12 col-xs-12 form-group">
                        <img class="img-responsive form-logo" src="http://54.153.36.130/assets/img/internship.png" width="100%" style="margin: 0 auto; display: block">
                    </div> -->

                    <div class="row" style="width: 100%;margin-left: -2px;">
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

                  


                    <!-- <div class="col-md-6 col-xs-12 form-group">
                        <label>Mobile Phone <sup style="color:#ff0000;">*</sup></label>
                        <input type="text"  value="{{ @$data['phone'] }}" disabled  class="form-control" placeholder="" required>
                    </div> -->
                    <div class="col-md-6 col-xs-12 form-group">
                        <label> Phone <sup style="color:#ff0000;">*</sup></label>
                        <input type="text"  value="{{ @$data['phone'] }}" disabled  class="form-control" placeholder="" required>
                    </div>


                    <!-- <div class="col-md-6 col-xs-12 form-group">
                        <label>Name <sup style="color:#ff0000;">*</sup></label>
                        <input type="text"  value="{{ @$data['userName'] }}" disabled class="form-control" placeholder="" required>
                    </div> -->

                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Education <sup style="color:#ff0000;">*</sup></label>

                        <input type="text" name="education" value="{{ @$data['education'] }}" class="form-control" placeholder="" required>

                        <!-- <select class="form-control dropdown" id="education" name="education" >
                        <option value="" selected="selected" disabled="disabled">-- select one --</option>
                        <option value="No formal education">No formal education</option>
                        <option value="Primary education">Primary education</option>
                        <option value="Secondary education">Secondary education or high school</option>
                        <option value="GED">GED</option>
                        <option value="Vocational qualification">Vocational qualification</option>
                        <option value="Bachelor's degree">Bachelor's degree</option>
                        <option value="Master's degree">Master's degree</option>
                        <option value="Doctorate or higher">Doctorate or higher</option>
                    </select> -->
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
                        <input type="date" name="dob"  value="{{ @$data['dob'] }}" disabled class="form-control" placeholder="MM/DD/YYYY" required>
                    </div>

                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Age <sup style="color:#ff0000;">*</sup></label>
                        <input type="text"  value="{{ (date('Y') - date('Y',strtotime(@$data['dob']))) }}" disabled class="form-control" required>
                       
                         </div>



                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Email <sup style="color:#ff0000;">*</sup></label>
                        <input type="email"  value="{{ @$data['email'] }}" disabled class="form-control" placeholder="you@example.com" required>
                    </div>

                    <!-- <div class="col-md-6 col-xs-12 form-group">
                        <label>Verify Email <sup style="color:#ff0000;">*</sup></label>
                        <input type="email"  value="{{ @$data['email'] }}" disabled class="form-control" placeholder="you@example.com" required>
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Password <sup style="color:#ff0000;">*</sup></label>
                        <input type="password" value="" name="country" class="form-control" placeholder="" required>
                    </div>

                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Verify Password <sup style="color:#ff0000;">*</sup></label>
                        <input type="password" value="" name="country" class="form-control" placeholder="" required>
                    </div> -->


                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What skills do you have to make your opportunity with BWT unique?  </label>
                        <input type="text" name="skills" value="{{ @$data['skills'] }}" disabled class="form-control" placeholder="" required>
                    </div>

                    
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What is your gifts and/or talent in dealing with people?</label>
                        <input type="text" name="talent" value="{{ @$data['talent'] }}" disabled class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What kind of working environment that you succeed in the best?</label>
                        <input type="text" name="achievement" value="{{ @$data['achievement'] }}" disabled class="form-control" placeholder="" required>
                    </div>


                    <!-- <div class="col-md-12 col-xs-12 form-group">
                        <label>Have you ever worked in any of the industries or areas below?  If so, tell us what your experience (please be specified)</label>
                        <div>
                        <input type="checkbox" checked disabled id="vehicle1" name="experience[]" value="Entertainment">
<label for="vehicle1"> Entertainment</label><br>
<input type="checkbox" checked disabled id="vehicle6" name="experience[]" value="Technology">
<label for="vehicle6"> Technology</label><br>
<input type="checkbox" checked disabled id="vehicle2" name="experience[]" value="Social Media">
<label for="vehicle2"> Social Media</label><br>
<input type="checkbox" checked disabled id="vehicle3" name="experience[]" value="Marketing and/or Advertising">
<label for="vehicle3"> Marketing and/or Advertising</label><br>
<input type="checkbox" checked disabled id="vehicle4" name="experience[]" value="Video Live Streaming">
<label for="vehicle4"> Video Live Streaming </label><br>
<input type="checkbox" checked disabled id="vehicle5" name="experience[]" value="Photographer">
<label for="vehicle5"> Photographer</label><br>
<input type="checkbox" checked disabled id="vehicle7" name="experience[]" value="Digital Equipment">
<label for="vehicle7"> Digital Equipment</label>
</div> -->

<div class="col-md-12 col-xs-12 form-group">
                        <label>Have you ever worked in any of the trades and/or experiences below?</label>
                        <div>
                        <input type="checkbox" checked disabled id="vehicle1" name="experience[]" value="Camera worker">
<label for="vehicle1"> Camera worker</label><br>
<input type="checkbox" checked disabled id="vehicle6" name="experience[]" value="Content Writer">
<label for="vehicle6"> Content Writer</label><br>

<input type="checkbox" checked disabled id="vehicle6" name="experience[]" value="Digital Media">
<label for="vehicle6"> Digital Media</label><br>

<input type="checkbox" checked disabled id="vehicle6" name="experience[]" value="Entertainment">
<label for="vehicle6"> Entertainment</label><br>

<input type="checkbox" checked disabled id="vehicle6" name="experience[]" value="Host Producers">
<label for="vehicle6"> Host Producers</label><br>

<input type="checkbox" checked disabled id="vehicle3" name="experience[]" value="Marketing/Advertising">
<label for="vehicle3"> Marketing/Advertising</label><br>

<input type="checkbox" checked disabled id="vehicle4" name="experience[]" value="Producers">
<label for="vehicle4"> Producers </label><br>
<input type="checkbox" checked disabled id="vehicle5" name="experience[]" value="Photographer">
<label for="vehicle5"> Photographer</label><br>
<input type="checkbox" checked disabled id="vehicle2" name="experience[]" value="Social Media">
<label for="vehicle2"> Social Media</label><br>

<input type="checkbox" checked disabled id="vehicle7" name="experience[]" value="Technology">
<label for="vehicle7"> Technology</label><br>

<input type="checkbox" checked disabled id="vehicle7" name="experience[]" value="Technician/Crew">
<label for="vehicle7"> Technician/Crew</label><br>

<input type="checkbox" checked disabled id="vehicle7" name="experience[]" value="Video Production">
<label for="vehicle7"> Video Production</label><br>

<input type="checkbox" checked disabled id="vehicle7" name="experience[]" value="other">
<label for="vehicle7"> Other</label><br>


</div>


<textarea name="experience_details" class="form-control"></textarea>
                    </div>

             <div class="col-md-6 col-xs-12 form-group">
                        <label>What is the area you are applying for?  <sup style="color:#ff0000;">*</sup></label>
                   
                        <input type="text" value="{{ @$data['position'] }}" disabled  class="form-control" placeholder="" required>

                <!-- <select class="form-control dropdown" id="state" name="position">

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
                        <input type="text" name="best"  value="{{ @$data['best'] }}" disabled class="form-control" placeholder="" required>
                       </div>
                   </div>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <div class="row">
                             <div class="col-md-3 col-xs-12 form-group">
                        <label> I am at my worse when </label>
                            </div>
                             <div class="col-md-9 col-xs-12 form-group">
                        <input type="text" name="worse"  value="{{ @$data['worse'] }}" disabled class="form-control" placeholder="" required>
                       </div>
                   </div>
                    </div>

                     <div class="col-md-12 col-xs-12 form-group">
                        <label> What do you expect from being an employee of BWT?</label>
                        <input type="text" name="expectation"  value="{{ @$data['expectation'] }}" disabled class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label> What do you do for entertainment? </label>
                        <input type="text" name="entertainment"  value="{{ @$data['entertainment'] }}" disabled class="form-control" placeholder="" required>
                    </div>

                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Have you ever stopped to listen to street performers? If so, where?  and how often? </label>
                        <input type="text" name="street_performer"  value="{{ @$data['street_performer'] }}" disabled class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What did you like the best about street performers? What did you like the least?</label>
                        <input type="text" name="best_street_performer"  value="{{ @$data['best_street_performer'] }}" disabled class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What did you like about your last job?  What was the least that you liked about your last job?</label>
                        <input type="text" name="last_job"  value="{{ @$data['last_job'] }}" disabled class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What is your favorite activity to do?</label>
                        <input type="text" name="activity"  value="{{ @$data['activity'] }}" disabled class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Why?</label>
                        <input type="text" name="why_include"  value="{{ @$data['why_include'] }}" disabled class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>How do you handle the following conflicts among peers, colleagues, and supervisors? Gossiping? </label>
                        <input type="text" name="handle_issue"  value="{{ @$data['handle_issue'] }}" disabled class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>List five characteristics of a job that you desire.</label>
                        <input type="text" name="characteristics"  value="{{ @$data['characteristics'] }}" disabled class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What are the best features in a job you have ever had? (e.g., team/group, computer desk, telecommunicating,
traveling, etc.)</label>
                        <input type="text" name="features"  value="{{ @$data['features'] }}" disabled class="form-control" placeholder="" required>
                    </div>  
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>When are you available? <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="availability"  value="{{ @$data['availability'] }}" disabled class="form-control" placeholder="" required>
                   
                <!-- <select class="form-control dropdown" id="state" name="availability">

                <option value="" selected="selected" disabled>Select a availability</option>
                <option value="Immediate">Immediate</option>
                <option value="1 week">1 week</option>
                <option value="2 week">2 week</option>
                <option value="3 week">3 week</option>
                <option value="4 week">4 week</option>          
             
                </select> -->
                    </div>
                    <!-- <div class="col-md-12 col-xs-12 form-group">
                        <label>Please submit a resume (one page only) or profile that will help us to know you better. </label>
                        <input type="file" name="image" class="form-control" style="width: 49%;">
                    </div> -->







                    <div class="col-md-12 col-xs-12 form-group">
@if(!empty($data['image'])))
<a href="{{ url('uploads/'.$data['image']) }}" class="like" target="_blank" download>Attachment - Resume/CV</a>
@else
No File uploaded
@endif
</div>

</div>

<div style="text-align: center;">
<button type="button" class="btn btn-danger" onclick="location.href = '{{ url('admin/employee/activation?uid='.$data['user_id'].'&st=3') }}' ">Rejected</button>
<button type="button" class="btn btn-success"  onclick="location.href = '{{ url('admin/employee/activation?uid='.$data['user_id'].'&st=2') }}' ">Approved</button>

</div>

    @endif
 </div>






                     <!--<div class="col-md-12 col-xs-12 form-group">
                       
                        <label>  If you have a chance to sell a story for all the money that you need for the next five years, would you? </label>
                        <input type="text" name="" class="form-control" placeholder="" required style="margin-bottom: 10px;"> 
                       
                        <div style="margin-bottom: 10px;">
                             <input type="radio" id="yes" name="7a" value="yes">
                              <label for="yes">Yes</label>
                              <input type="radio" id="no" name="7a" value="no">
                              <label for="no">No</label>
                             
                        </div>

                        <div style="margin-bottom: 10px;">
                             <label> How much money would that need to be? </label>
                        <input type="text" name="7b" class="form-control" placeholder="" required>
                        </div>
                        <div>
                             <label> Why not?</label>
                        <input type="text" name="7c" class="form-control" placeholder="" required>
                        </div>

                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label> What do you expect from the Internship Program with BWT?</label>
                        <input type="text" name="expectation" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What is the creative energy that you feel that you have?  How do you channel that energy?</label>
                        <input type="text" name="creative_energy" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Why should we include you in our community’s internship program?</label>
                        <input type="text" name="why_include" class="form-control" placeholder="" required>
                    </div>

                  


                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Do you like traveling? Yes, What will be the most days that you would want to be away from home? </sup></label>
                        <input type="text" name="about_traveling" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What is your goal after you complete your internship?</sup></label>
                        <input type="text" name="goal" class="form-control" placeholder="" required>
                    </div> -->
                    <!-- <div class="col-md-12 col-xs-12 form-group">
                        <button type="submit" class="btn btn-success" style="width:100%;">Submit</button>
                    </div> -->
                </div>
            </div>
        </div>
    <!-- </form> -->


@endsection 
