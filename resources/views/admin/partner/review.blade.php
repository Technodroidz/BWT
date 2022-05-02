@extends('layouts.admin')


@section('title','Partners')


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

                 <!-- <div class="col-md-12 col-xs-12 form-group">
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

                        <input type="text" name="education" disabled value="{{ @$data['education'] }}" class="form-control" placeholder="" required>

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
                        <input type="text" disabled name="education_discipline" value="{{ @$data['education_discipline'] }}" class="form-control" placeholder="" required>
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
                        <input type="text"  value="{{ @$data['dob'] ? (date('Y') - date('Y',strtotime(@$data['dob']))) : 0 }}" disabled class="form-control" required>
                       
                         </div>



                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Email <sup style="color:#ff0000;">*</sup></label>
                        <input type="email"  value="{{ @$data['email'] }}" disabled class="form-control" placeholder="you@example.com" required>
                    </div>

                    <div class="col-md-12 col-xs-12 text-center">
                          <h2 class="peer" style="font-size: 19px;margin-top: 16px;margin-bottom: 16px;">PARTNER’S QUESTIONNAIRE FORM</h2>
                      </div>

                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What skills do you have to make your opportunity with BWT unique? </label>
                        <input type="text" value="{{ @$data['skills'] }}" class="form-control" placeholder="" disabled>
                    </div>

                    
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What kind of partnership are you interested in developing with BWT? </label>
                        <input type="text" value="{{ @$data['talend'] }}" class="form-control" placeholder="" disabled>
                    </div>
                    

                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What is your experience (please check all that may apply)?</label>
                        <br/><br/>
                        <input class="form-check-input" style="margin-left: 0px;" type="checkbox" value="" name="achievement[]" value="Advertising & Marketing" checked>
                        <label class="form-check-label" for="flexCheckDefault" style="margin-left: 18px;">
                         Advertising & Marketing
                        </label>
                        <br/>

                        <input class="form-check-input" style="margin-left: 0px;" type="checkbox" value="" name="achievement[]" value="Branding Ambassador" checked>
                        <label class="form-check-label" for="flexCheckDefault" style="margin-left: 18px;">
                        Branding Ambassador
                        </label>
                        <br/>

                        <input class="form-check-input" style="margin-left: 0px;" type="checkbox" value="" name="achievement[]" value="Entertainment Industry" checked>
                        <label class="form-check-label" for="flexCheckDefault" style="margin-left: 18px;">
                        Entertainment Industry
                        </label>
                        <br/>

                        <input class="form-check-input" style="margin-left: 0px;" type="checkbox" value="" name="achievement[]" value="Financial Interest" checked>
                        <label class="form-check-label" for="flexCheckDefault" style="margin-left: 18px;">
                        Financial Interest
                        </label>
                        <br/>

                        <input class="form-check-input" style="margin-left: 0px;" type="checkbox" value="" name="achievement[]" value="Social Media" checked>
                        <label class="form-check-label" for="flexCheckDefault" style="margin-left: 18px;">
                        Social Media
                        </label>

                    </div>


<div style="text-align: center;">
<button type="button" class="btn btn-danger" onclick="location.href = '{{ url('admin/partner/activation?uid='.$data['user_id'].'&st=3') }}' ">Rejected</button>
<button type="button" class="btn btn-success"  onclick="location.href = '{{ url('admin/partner/activation?uid='.$data['user_id'].'&st=2') }}' ">Approved</button>

</div>

    @endif
 </div>





                </div>
            </div>
        </div>
    <!-- </form> -->


@endsection 
