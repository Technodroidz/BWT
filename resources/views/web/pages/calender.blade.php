@extends('web.welcome')
@section('title','Calender')
@section('content')
<div class="wrap-height">
    <div class="row">
        <div class="col-md-12 text-right form-group">
            <button onclick="goBack()" class="btn btn-success"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
        <div class="col-md-6">
            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addEvent">Create Upcoming Event</a>
        </div>
        <div class="col-md-6 text-right">
            <button onclick="goBack()" class="btn btn-success"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-12">
          <div id="calendar"></div>
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
      <form>
          <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="fromDate">Event Name:</label>
                    <input type="text" class="form-control" placeholder="Enter event" id="eventName">
                  </div>
                </div>
              </div>
              
              <div class="row"> 
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fromDate">From:</label>
                    <input type="date" class="form-control" placeholder="Enter from date" id="fromDate">
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="toDate">To:</label>
                    <input type="date" class="form-control" id="toDate">
                  </div>
                </div>
        
              </div>
          </div>
          <div class="modal-footer">
            <a href="#" type="button" class="btn btn-default" data-dismiss="modal">Close</a>
            <button type="button" class="btn btn-success" id="addEvent">Add Event</button>
          </div>
      </form>
    </div>

  </div>
</div>
@endsection