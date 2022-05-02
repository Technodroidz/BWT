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
                            <form method="post" action="{!! route('subscriber.store') !!}" enctype="multipart/form-data">
                                @csrf()

                                @if($errors->any())
  <div class="alert alert-success" role="alert">
    {{$errors->first()}}
</div>
@endif

                          <div class="row" style="margin-top:10px;width:100%; border-style:ridge; padding: 18px;border-width: 5px;border-color: #5f2652;border-radius: 50px;" >
                           <div class="col-md-12" style="padding-top: 15px;">

                        

                              

                           
            <div class="row mb-5">
                <!--start state-->
            <!--end state-->
            <div class="row" style="width: 100%;margin-left: -2px;">
    <div class="col-md-4  form-group">
    <label>First Name <sup style="color:#ff0000;">*</sup></label>
   <input type="text" name="f_name" value="" class="form-control" placeholder="" required="">
                 
    </div>
    <div class="col-md-4  form-group">
    <label>Middle Name <sup style="color:#ff0000;"></sup></label>
   <input type="text" name="m_name" value="" class="form-control" placeholder="">
       
    </div>
    <div class="col-md-4 form-group">
    <label>Last Name <sup style="color:#ff0000;">*</sup></label>
   <input type="text" name="l_name" value="" class="form-control" placeholder="" >
       
    </div>
  </div>

            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Phone Number*</label>
                <input type="text" title="Phone Phone" class="form-control" placeholder="Phone Phone" name="phone"
                value="{{$audition->mobile??$user->mobile??old('mobile')??null}}" required="">
            </div>


            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Country*</label>
                <input type="text" title="country" class="form-control" placeholder="country"
                value="USA" name="country" required="">
            </div>

            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Address*</label>
                <input type="text" title="Street Address" class="form-control" placeholder="Address"
                value="{{old('StreetAddress')??$audition->StreetAddress??null}}" name="address" required="">
            </div>

            <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Town/City*</label>
                <input type="text" title="Town/City" class="form-control" placeholder="City"
                value="{{old('TownCity')??$audition->TownCity??null}}" name="city" required="">
            </div>


            <div class="col-md-6 col-xs-12 form-group state">
                <label style="color:#000;"> state:*</label>
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
                <label style="color:#000;">Zip Code*</label>
                <input type="text" title="Zip Code" class="form-control" placeholder="Zip Code" name="zip"
                value="{{old('ZipCode')??$audition->ZipCode??null}}"  required="">
            </div>

               <div class="col-md-6 col-xs-12 form-group">
                <label style="color:#000;">Email*</label>
                <input type="text" title="Email" class="form-control" placeholder="Email" name="email"
                value="{{$audition->email??$user->email??old('Email')??null}}" {{optional($user)->email?'readonly':''}}>
                @error('Email')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>

            <div class="col-md-6 col-xs-12 form-group">
                        <label>Password <sup style="color:#ff0000;">*</sup></label>
                        <input type="text"  class="form-control" placeholder="" required>
                    </div>

                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Verify Password <sup style="color:#ff0000;">*</sup></label>                       
                         <input id="password-field" type="password" class="form-control"  value="">
              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>



       

            </div>
          

            <div class="col-md-12 form-group text-center mt-5">
                <!-- <button type="submit" class="btn btn-success">FINISH</button> -->

                  <button type="submit" class="btn btn-success" value="1" name="iscontinue">Submit</button>
            </div>


           
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
