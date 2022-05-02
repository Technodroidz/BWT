@extends('web.welcome')

@section('title','SponsorShip')


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


      <div class="text-right form-group">
            <button onclick="goBack()" class="btn btn-success"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
        <form method="post" action="{{ route('sponsorRegistration') }}" enctype="multipart/form-data">
                                @csrf()

                                <input type="hidden" name="finalSubmit" value="1" class="form-control" placeholder="" required>
                        <input type="hidden" name="uid" value="<?php echo @$_GET['uid']; ?>" class="form-control" placeholder="" required>


        <div class="card" style="box-shadow: 0px 0px 7px -1px #ccc;">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 text-center">
                       <h2> Sponsorship</h2>
                       <strong style="margin-bottom:5px;">What does a SponsorShip mean with BWT?</strong>
                       <p style="margin-bottom: 2px;">If you have clicked on this page it means that you are interested in how to get involved with BWT as a Sponsor. 

</p>
                       <p>BWT is a unique platform that is a hybrid between entertainment, technology, and social media.

</p>
                    </div>
                </div>
                <div class="row">

                 <div class="col-md-12 col-xs-12 form-group">
                        <img class="img-responsive form-logo" src="http://54.153.36.130/assets/img/sponsor.png" width="100%" style="margin: 0 auto; display: block">
                    </div>
                    <!-- <div class="col-md-12 col-xs-12 form-group">
                        <label>Individual Name <sup style="color:#ff0000;">*</sup></label>
                        <input type="text"  value="{{ $data['userName'] }}" disabled class="form-control" placeholder="" required>
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


                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Address <sup style="color:#ff0000;">*</sup></label>
                        <input type="text"  value="{{ $data['address'] }}" disabled class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>City <sup style="color:#ff0000;">*</sup></label>
                        <input type="text"  value="{{ $data['city'] }}" disabled class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>State <sup style="color:#ff0000;">*</sup></label>
                        <input type="text"  value="{{ $data['state'] }}" disabled class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Zip <sup style="color:#ff0000;">*</sup></label>
                        <input type="text"  value="{{ $data['zip'] }}" disabled class="form-control" placeholder="" required>
                    </div>

                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Country <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="country" value="{{ $data['country'] }}" disabled class="form-control" placeholder="" required>
                    </div>

                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Business Name <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="business_name" value="{{ $data['business_name'] }}" disabled class="form-control" placeholder="" required>
                    </div>

                     <div class="col-md-6 col-xs-12 form-group">
                        <label>Title <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="title" class="form-control" placeholder="" required>
                    </div>
                     <div class="col-md-6 col-xs-12 form-group">
                        <label>Position <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="position" class="form-control" placeholder="" required>
                    </div>

                     <div class="col-md-6 col-xs-12 form-group">
                        <label>what kind or type of business? <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="type_of_business" class="form-control" placeholder="" required>
                    </div>
                     <!-- <div class="col-md-6 col-xs-12 form-group">
                        <label>Address <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>City <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>State <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Zip <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="" class="form-control" placeholder="" required>
                    </div>

                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Email <sup style="color:#ff0000;">*</sup></label>
                        <input type="email" name="" class="form-control" placeholder="you@example.com" required>
                    </div> -->
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Phone <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="phone" value="{{ @$data['phone'] }}" class="form-control" placeholder="" required>
                    </div>

                    <div class="col-md-6 col-xs-12 form-group">
                        <label>  Is this an individual sponsorship or business? <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="sponsor_type" class="form-control" placeholder="" required>
                    </div>


                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What do you want to achieve in being a sponsor with BWT? <sup style="color:#ff0000;">*</sup></label>
                        <textarea name="achievement" class="form-control"></textarea>
                    </div>


                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Have you ever had sponsorship in any of the industries below?  If so, tell us what your experience and accomplishments (please be specified and check all that apply) <sup style="color:#ff0000;">*</sup></label>
                        <div>

                        <input type="checkbox" id="vehicle1" name="experience[]" value="Advertising/Marketing">
                            <label for="vehicle1"> Advertising/Marketing</label><br>
                        <input type="checkbox" id="vehicle1" name="experience[]" value="Entertainment">
                            <label for="vehicle1"> Entertainment</label><br>
                            <input type="checkbox" id="vehicle2" name="experience[]" value="Social Media">
                            <label for="vehicle2"> Social Media</label><br>
                            <input type="checkbox" id="vehicle3" name="experience[]" value="Retail/Merchandising">
                            <label for="vehicle3"> Retail/Merchandising</label><br>
                          
                           
                            </div>
                        <textarea class="form-control" name="experience_details"></textarea>
                    </div>

                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What do you like about BWT’s concept? <sup style="color:#ff0000;">*</sup></label>
                        <textarea name="like_concept" class="form-control"></textarea>
                    </div>

                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What are your areas of interest in BWT? Check all that applies below: * <sup style="color:#ff0000;">*</sup></label>
                     
                        <input type="checkbox" id="vehicle1" name="area_of_interest[]" value="Busking Board Metric Ranking">
                            <label for="vehicle1"> Busking Board Metric Ranking</label><br>
                        <input type="checkbox" id="vehicle1" name="area_of_interest[]" value="Boutique Shopping">
                            <label for="vehicle1"> Boutique Shopping</label><br>
                            <input type="checkbox" id="vehicle2" name="area_of_interest[]" value="Digital Media">
                            <label for="vehicle2"> Digital Media</label><br>
                            <input type="checkbox" id="vehicle3" name="area_of_interest[]" value="OTTS Technology Platform">
                            <label for="vehicle3"> OTTS Technology Platform</label><br>

                            <input type="checkbox" id="vehicle3" name="area_of_interest[]" value="Performing Artists">
                            <label for="vehicle3"> Performing Artists</label><br>
                            <input type="checkbox" id="vehicle3" name="area_of_interest[]" value="Social Media">
                            <label for="vehicle3"> Social Media</label><br>
                            <input type="checkbox" id="vehicle3" name="area_of_interest[]" value="State & National Competition">
                            <label for="vehicle3"> State & National Competition</label><br>
                            <input type="checkbox" id="vehicle3" name="area_of_interest[]" value="Weekly Busking Performances">
                            <label for="vehicle3"> Weekly Busking Performances</label><br>
                
                    </div>
                    <!-- <div class="col-md-12 col-xs-12 form-group">
                          <label>Which components in BWT would you be interested in sponsoring? <sup style="color:#ff0000;">*</sup></label>
                          <select class="form-control" name="component">
                              <option>State & National Competition</option>
                              <option> Weekly Busking Performances

</option>
                              <option>Busking Board Metric Ranking

</option>
                              <option>Studio Channels: Artisans Performances and Artists Performing

</option>
                              <option>BWT’s Store     

</option>
                          </select>
                </div>
                    -->

                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Please upload a business logo or card. </label>
                        <input type="file" name="image" class="form-control" style="width: 49%;">
                    </div>

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
