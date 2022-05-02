@extends('web.welcome')

@section('title','Upcoming Events')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="wrap-height top30">
    <div class="row">
        <div class="col-md-6">
            
     <!--       @if (Auth::guard('web_user')->check())
             @php 
             $id=Auth::guard('web_user')->user()->id;
             $data = DB::table('channel')->select('*')->where('user_id',$id)->first();
             @endphp
             @if($data)
          <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addEvent">Create Special Event</a>
             @else
              <a href="#" class="btn btn-success" >Create Special Event</a>
             @endif
             @else
			  <a href="{{route('sign-in')}}" class="btn btn-success" >Create Special Event</a>
             @endif-->
            
        </div>
        <div class="col-md-6 text-right">
            <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="alert alert-primary msg" style="display:none;" role="alert">
  
</div>
      <div class="col-md-12">
            <div class="row"><!--
      <div class="col-md-3">
          <div class="passEvents_section">
              <div class="event_img">
                  <img src="http://creativedzine.co.in/bwt/public/assets/img/shop.png" class="img-responsive"/>
              </div>
              <div class="passEvents_Diss">
                  <h2 class="event-title">
                      WE ARE ACCEPTING AUDITION VIDEOS FOR OUR STATE & NATIONAL COMPETITIONS. 
                  </h2>
                  <p>
                      Catch fireworks and enjoy and watch a one-of-akind virtual festival to welcome in the New Year 2021.
                  </p>
                  <p class="dateEvents">
                      <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Friday, December 31, 2020
                  </p>
                  <p class="eventsTag">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>  Special (Complete)
                  </p>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="passEvents_section">
              <div class="event_img">
                  <img src="http://creativedzine.co.in/bwt/public/assets/img/shop.png" class="img-responsive"/>
              </div>
              <div class="passEvents_Diss">
                  <h2 class="event-title">
                      WE ARE ACCEPTING AUDITION VIDEOS FOR OUR STATE & NATIONAL COMPETITIONS. 
                  </h2>
                  <p>
                      Catch fireworks and enjoy and watch a one-of-akind virtual festival to welcome in the New Year 2021.
                  </p>
                  <p class="dateEvents">
                      <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Friday, December 31, 2020
                  </p>
                  <p class="eventsTag">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>  Private (Complete)
                  </p>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="passEvents_section">
              <div class="event_img">
                  <img src="http://creativedzine.co.in/bwt/public/assets/img/shop.png" class="img-responsive"/>
              </div>
              <div class="passEvents_Diss">
                  <h2 class="event-title">
                      WE ARE ACCEPTING AUDITION VIDEOS FOR OUR STATE & NATIONAL COMPETITIONS. 
                  </h2>
                  <p>
                      Catch fireworks and enjoy and watch a one-of-akind virtual festival to welcome in the New Year 2021.
                  </p>
                  <p class="dateEvents">
                      <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Friday, December 31, 2020
                  </p>
                  <p class="eventsTag">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>  Private (Complete)
                  </p>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="passEvents_section">
              <div class="event_img">
                  <img src="http://creativedzine.co.in/bwt/public/assets/img/shop.png" class="img-responsive"/>
              </div>
              <div class="passEvents_Diss">
                  <h2 class="event-title">
                      WE ARE ACCEPTING AUDITION VIDEOS FOR OUR STATE & NATIONAL COMPETITIONS. 
                  </h2>
                  <p>
                      Catch fireworks and enjoy and watch a one-of-akind virtual festival to welcome in the New Year 2021.
                  </p>
                  <p class="dateEvents">
                      <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Friday, December 31, 2020
                  </p>
                  <p class="eventsTag">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>  Special (Complete)
                  </p>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="passEvents_section">
              <div class="event_img">
                  <img src="http://creativedzine.co.in/bwt/public/assets/img/shop.png" class="img-responsive"/>
              </div>
              <div class="passEvents_Diss">
                  <h2 class="event-title">
                      WE ARE ACCEPTING AUDITION VIDEOS FOR OUR STATE & NATIONAL COMPETITIONS. 
                  </h2>
                  <p>
                      Catch fireworks and enjoy and watch a one-of-akind virtual festival to welcome in the New Year 2021.
                  </p>
                  <p class="dateEvents">
                      <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Friday, December 31, 2020
                  </p>
                  <p class="eventsTag">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>  Private (Complete)
                  </p>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="passEvents_section">
              <div class="event_img">
                  <img src="http://creativedzine.co.in/bwt/public/assets/img/shop.png" class="img-responsive"/>
              </div>
              <div class="passEvents_Diss">
                  <h2 class="event-title">
                      WE ARE ACCEPTING AUDITION VIDEOS FOR OUR STATE & NATIONAL COMPETITIONS. 
                  </h2>
                  <p>
                      Catch fireworks and enjoy and watch a one-of-akind virtual festival to welcome in the New Year 2021.
                  </p>
                  <p class="dateEvents">
                      <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Friday, December 31, 2020
                  </p>
                  <p class="eventsTag">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>  Special (Complete)
                  </p>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="passEvents_section">
              <div class="event_img">
                  <img src="http://creativedzine.co.in/bwt/public/assets/img/shop.png" class="img-responsive"/>
              </div>
              <div class="passEvents_Diss">
                  <h2 class="event-title">
                      WE ARE ACCEPTING AUDITION VIDEOS FOR OUR STATE & NATIONAL COMPETITIONS. 
                  </h2>
                  <p>
                      Catch fireworks and enjoy and watch a one-of-akind virtual festival to welcome in the New Year 2021.
                  </p>
                  <p class="dateEvents">
                      <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Friday, December 31, 2020
                  </p>
                  <p class="eventsTag">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>  Special (Complete)
                  </p>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="passEvents_section">
              <div class="event_img">
                  <img src="http://creativedzine.co.in/bwt/public/assets/img/shop.png" class="img-responsive"/>
              </div>
              <div class="passEvents_Diss">
                  <h2 class="event-title">
                      WE ARE ACCEPTING AUDITION VIDEOS FOR OUR STATE & NATIONAL COMPETITIONS. 
                  </h2>
                  <p>
                      Catch fireworks and enjoy and watch a one-of-akind virtual festival to welcome in the New Year 2021.
                  </p>
                  <p class="dateEvents">
                      <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Friday, December 31, 2020
                  </p>
                  <p class="eventsTag">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>  Private (Complete)
                  </p>
              </div>
          </div>
      </div>-->
         <div class="col-md-8">
             <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Name</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Venue</th>
    </tr>
  </thead>
  
      <tbody id="tabveData">
      
      @php $x=1;  @endphp
     @foreach($events as $value)

    <tr>
      <th scope="row">{{$x}}</th>
      <td>{{$value->name}}</td>
      <td>{{$value->from}}</td>
      <td>{{$value->to}}</td>
      <td>{{$value->venue}}</td>
    </tr>
    @php $x++ @endphp
   @endforeach

  </tbody>
</table>
         </div>

            <!--<div class="col-sm-4">
      <h3>Country</h3>
      <select name="country" class="countries form-control" id="countryId">
    <option value="">Select Country</option>
</select>

    </div>
    <div class="col-sm-4">
      <h3>State</h3>
      <select name="state" class="states form-control" id="stateId">
    <option value="">Select State</option>
</select>
    </div>
    <div class="col-sm-4">
      <h3>City</h3>        
      <select name="city" class="cities form-control" id="cityId">
    <option value="">Select City</option>
</select>
    </div>-->
         <div class="col-md-4" style="padding-top: 12px;background: #5F2652;color: white;">
           <form action="/action_page.php">
       <div class="form-group">
         <label>Country</label>
      <select name="country" class="countries form-control" id="countryId">
    <option value="">Select Country</option>
     </select>
   </div>
     <div class="form-group">
       <label >State</label>
      <select name="state" class="states form-control" id="stateId">
    <option value="">Select State</option>
    </select>
  </div>
    <div class="form-group">
    <label>City</label>
      <select name="city" class="cities form-control" id="cityId">
    <option value="">Select City</option>
  
    </select>
    </div>
  <div class="form-group">
    <label for="email">VENUE:</label>
    <select name="states" class="form-control">
        <option value="">Select Venue</option>
        <option value="">A</option>
        <option value="">B</option>
        <option value="">C</option>
        <option value="">D</option>
        <option value="">E</option>
        <option value="">F</option>
        <option value="">G</option>
    </select>
  </div>
  <div class="form-group">
    <label for="email">ARTIST:</label>
    <select name="state" class="form-control">
        <option value="">Select Artist</option>
        <option value="">A</option>
        <option value="">B</option>
        <option value="">C</option>
        <option value="">D</option>
        <option value="">E</option>
        <option value="">F</option>
        <option value="">G</option>
    </select>
  </div>
  <div class="form-group">
    <label for="email">PROMOTER:</label>
    <select name="state" class="form-control">
        <option value="">Select Promoter</option>
        <option value="">A</option>
        <option value="">B</option>
        <option value="">C</option>
        <option value="">D</option>
        <option value="">E</option>
        <option value="">F</option>
        <option value="">G</option>
    </select>
  </div>
      <div class="form-group">
    <label for="email">Start date:</label>
    <input type="date" value="" class="form-control">
  </div>
      <div class="form-group">
    <label for="email">End date:</label>
    <input type="date" value="" class="form-control">
  </div>
  
</form>
    
         </div>
       
      
    </div>
      </div>
    </div>
</div>
<!-- Modal -->
<div id="addEvent" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Event</h4>
      </div>
     <form id="event_form" method="POST" >
          @csrf
          <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="fromDate">Event Name:</label>
                    <input type="text" class="form-control" placeholder="Enter event" name="eventName" id="eventName">
                  </div>
                </div>
              </div>
              
              <div class="row"> 
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fromDate">From:</label>
                    <input type="date" class="form-control" placeholder="Enter from date" name="fromDate" id="fromDate">
                  </div>
                </div>
                <input type="hidden" name="type" value="special" />
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="toDate">To:</label>
                    <input type="date" class="form-control" name="toDate" id="toDate">
                  </div>
                </div>
        
             <div class="col-md-6">
                  <div class="form-group">
                    <label for="toDate">Venue:</label>
                    <input type="text" class="form-control" id="venue" name="venue" placeholder="Enter Venue" >
                  </div>
                </div>
                
                
             <div class="col-md-6">
                  <div class="form-group">
                    <label for="toDate">Image:</label>
                    <input type="file" class="form-control" id="event_image" name="event_image" placeholder="Enter Venue" >
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <a href="#" type="button" class="btn btn-default" data-dismiss="modal">Close</a>
            <button type="submit" class="btn btn-success addEsssveyyuntclick" >Add Event</button>
          </div>
      </form>
    </div>

  </div>
</div>

<script>
    $( "#event_form" ).submit(function( event ) {
         event.preventDefault();
  
   
    var Data=$("#event_form").serialize();
    
            // send ajax
          $.ajax({
                 url: "{{route('add-special-event')}}",// url where to submit the request
                type : "POST", // type of action POST || GET
               data : $("#event_form").serialize(), // post data || get data
                success : function(result) {
                   
                    console.log(result);
                    if(result.status==1){
                        
                       
                        $('#addEvent').modal('hide');
                        $('#tabveData').append(`
                        <tr>
      <th scope="row">${result.data.id}</th>
      <td>${result.data.name}</td>
      <td>${result.data.from}</td>
      <td>${result.data.to}</td>
      <td>${result.data.venue}</td>
    </tr>
                        `);
                        $('.msg').show();
                        $('.msg').html('Events Add Successfully !!');
                    }else{
                        
                        
                    }
                },
               
                error: function(xhr, resp, text) {
                    console.log(xhr, resp, text);
                }
            })

 
});
</script>
<script>

function ajaxCall() {
    this.send = function(data, url, method, success, type) {
        type = type||'json';
        var successRes = function(data) {
            success(data);
        }

        var errorRes = function(e) {
            console.log(e);
            //alert("Error found \nError Code: "+e.status+" \nError Message: "+e.statusText);
            //jQuery('#loader').modal('hide');
        }
        jQuery.ajax({
            url: url,
            type: method,
            data: data,
            success: successRes,
            error: errorRes,
            dataType: type,
            timeout: 60000
        });

    }

}

function locationInfo() {
    var rootUrl = "https://geodata.solutions/api/api.php";
    //now check for set values
    var addParams = '';
    if(jQuery("#gds_appid").length > 0) {
        addParams += '&appid=' + jQuery("#gds_appid").val();
    }
    if(jQuery("#gds_hash").length > 0) {
        addParams += '&hash=' + jQuery("#gds_hash").val();
    }

    var call = new ajaxCall();

    this.confCity = function(id) {
     //   console.log(id);
     //   console.log('started');
        var url = rootUrl+'?type=confCity&countryId='+ jQuery('#countryId option:selected').attr('countryid') +'&stateId=' + jQuery('#stateId option:selected').attr('stateid') + '&cityId=' + id;
        var method = "post";
        var data = {};
        call.send(data, url, method, function(data) {
            if(data){
                //    alert(data);
            }
            else{
                //   alert('No data');
            }
        });
    };


    this.getCities = function(id) {
        jQuery(".cities option:gt(0)").remove();
        //get additional fields
        var stateClasses = jQuery('#cityId').attr('class');

        var cC = stateClasses.split(" ");
        cC.shift();
        var addClasses = '';
        if(cC.length > 0)
        {
            acC = cC.join();
            addClasses = '&addClasses=' + encodeURIComponent(acC);
        }
        var url = rootUrl+'?type=getCities&countryId='+ jQuery('#countryId option:selected').attr('countryid') +'&stateId=' + id + addParams + addClasses;
        var method = "post";
        var data = {};
        jQuery('.cities').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.cities').find("option:eq(0)").html("Select City");
            if(data.tp == 1){
                var listlen = Object.keys(data['result']).length;

                if(listlen > 0)
                {
                    jQuery.each(data['result'], function(key, val) {

                        var option = jQuery('<option />');
                        option.attr('value', val).text(val);
                        jQuery('.cities').append(option);
                    });
                }
                else
                {
                    var usestate = jQuery('#stateId option:selected').val();
                    var option = jQuery('<option />');
                    option.attr('value', usestate).text(usestate);
                    option.attr('selected', 'selected');
                    jQuery('.cities').append(option);
                }

                jQuery(".cities").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        });
    };

    this.getStates = function(id) {
        jQuery(".states option:gt(0)").remove();
        jQuery(".cities option:gt(0)").remove();
        //get additional fields
        var stateClasses = jQuery('#stateId').attr('class');

        var cC = stateClasses.split(" ");
        cC.shift();
        var addClasses = '';
        if(cC.length > 0)
        {
            acC = cC.join();
            addClasses = '&addClasses=' + encodeURIComponent(acC);
        }
        var url = rootUrl+'?type=getStates&countryId=' + id + addParams  + addClasses;
        var method = "post";
        var data = {};
        jQuery('.states').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.states').find("option:eq(0)").html("Select State");
            if(data.tp == 1){
                jQuery.each(data['result'], function(key, val) {
                    var option = jQuery('<option />');
                    option.attr('value', val).text(val);
                    option.attr('stateid', key);
                    jQuery('.states').append(option);
                });
                jQuery(".states").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        });
    };

    this.getCountries = function() {
        //get additional fields
        var countryClasses = jQuery('#countryId').attr('class');

        var cC = countryClasses.split(" ");
        cC.shift();
        var addClasses = '';
        if(cC.length > 0)
        {
            acC = cC.join();
            addClasses = '&addClasses=' + encodeURIComponent(acC);
        }

        var presel = false;
        var iip = 'N';
        jQuery.each(cC, function( index, value ) {
            if (value.match("^presel-")) {
                presel = value.substring(7);

            }
            if(value.match("^presel-byi"))
            {
                var iip = 'Y';
            }
        });


        var url = rootUrl+'?type=getCountries' + addParams + addClasses;
        var method = "post";
        var data = {};
        jQuery('.countries').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.countries').find("option:eq(0)").html("Select Country");

            if(data.tp == 1){
                if(presel == 'byip')
                {
                    presel = data['presel'];
                    console.log('2 presel is set as ' + presel);
                }


                if(jQuery.inArray("group-continents",cC) > -1)
                {
                    var $select = jQuery('.countries');
                    console.log(data['result']);
                    jQuery.each(data['result'], function(i, optgroups) {
                        var $optgroup = jQuery("<optgroup>", {label: i});
                        if(optgroups.length > 0)
                        {
                            $optgroup.appendTo($select);
                        }

                        jQuery.each(optgroups, function(groupName, options) {
                            var coption = jQuery('<option />');
                            coption.attr('value', options.name).text(options.name);
                            coption.attr('countryid', options.id);
                            if(presel) {
                                if (presel.toUpperCase() == options.id) {
                                    coption.attr('selected', 'selected');
                                }
                            }
                            coption.appendTo($optgroup);
                        });
                    });
                }
                else
                {
                    jQuery.each(data['result'], function(key, val) {
                        var option = jQuery('<option />');
                        option.attr('value', val).text(val);
                        option.attr('countryid', key);
                        if(presel)
                        {
                            if(presel.toUpperCase() ==  key)
                            {
                                option.attr('selected', 'selected');
                            }
                        }
                        jQuery('.countries').append(option);
                    });
                }
                if(presel)
                {
                    jQuery('.countries').trigger('change');
                }
                jQuery(".countries").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        });
    };

}

jQuery(function() {
    var loc = new locationInfo();
    loc.getCountries();
    jQuery(".countries").on("change", function(ev) {
        var countryId = jQuery("option:selected", this).attr('countryid');
        if(countryId != ''){
            loc.getStates(countryId);
        }
        else{
            jQuery(".states option:gt(0)").remove();
        }
    });
    jQuery(".states").on("change", function(ev) {
        var stateId = jQuery("option:selected", this).attr('stateid');
        if(stateId != ''){
            loc.getCities(stateId);
        }
        else{
            jQuery(".cities option:gt(0)").remove();
        }
    });

    jQuery(".cities").on("change", function(ev) {
        var cityId = jQuery("option:selected", this).val();
        if(cityId != ''){
            loc.confCity(cityId);
        }
    });
});


  </script>
@endsection