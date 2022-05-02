@extends('web.welcome')

@section('title','Past Events')
@section('content')

<div class="wrap-height">
    <div class="row">
        <!--<div class="col-md-6">-->
        <!--    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addEvent">Create Past Event</a>-->
        <!--</div>-->
        
        <div class="col-md-12 text-right" style="padding-top:10px">
            <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
    </div>
    <hr>
    <div class="row">
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
  <tbody>
      
 @php $x=1;  @endphp
     @foreach($events as $value)

    <tr>
      <th scope="row">{{$x}}</th>
      <td>{{$value->name}}</td>
      <td>{{$value->from}}</td>
      <td>{{$value->to}}</td>
      <td>{{$value->venue}}</td>
      <td></td>
    </tr>
    @php $x++;  @endphp
   @endforeach

  </tbody>
</table>
         </div>
         <div class="col-md-4" style="padding-top: 12px;background: #5F2652;color: white;">
           <form action="/action_page.php">
               
  <div class="form-group">
    <label for="email">State:</label>
    <select name="state" class="form-control">
        <option value="">Select State</option>
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
    <label for="email">City:</label>
    <select name="state" class="form-control">
        <option value="">Select City</option>
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
    <label for="email">VENUE:</label>
    <select name="state" class="form-control">
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
<!--<div id="addEvent" class="modal fade" role="dialog">-->
<!--  <div class="modal-dialog">-->

    <!-- Modal content-->
<!--    <div class="modal-content">-->
<!--      <div class="modal-header">-->
<!--        <button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--        <h4 class="modal-title">Add New Event</h4>-->
<!--      </div>-->
<!--      <form>-->
<!--          <div class="modal-body">-->
<!--            <div class="row">-->
<!--                <div class="col-md-12">-->
<!--                  <div class="form-group">-->
<!--                    <label for="fromDate">Event Name:</label>-->
<!--                    <input type="text" class="form-control" placeholder="Enter event" id="eventName">-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
              
<!--              <div class="row"> -->
<!--                <div class="col-md-6">-->
<!--                  <div class="form-group">-->
<!--                    <label for="fromDate">From:</label>-->
<!--                    <input type="date" class="form-control" placeholder="Enter from date" id="fromDate">-->
<!--                  </div>-->
<!--                </div>-->
                
<!--                <div class="col-md-6">-->
<!--                  <div class="form-group">-->
<!--                    <label for="toDate">To:</label>-->
<!--                    <input type="date" class="form-control" id="toDate">-->
<!--                  </div>-->
<!--                </div>-->
        
<!--              </div>-->
<!--          </div>-->
<!--          <div class="modal-footer">-->
<!--            <a href="#" type="button" class="btn btn-default" data-dismiss="modal">Close</a>-->
<!--            <button type="button" class="btn btn-success" id="addEvent">Add Event</button>-->
<!--          </div>-->
<!--      </form>-->
<!--    </div>-->

<!--  </div>-->
<!--</div>-->
@endsection