
@extends('web.welcome')

@section('title','Add Boutique')


@section('content')
<div class="wrap-height">
  <br/>
    <div class="text-right form-group">
          <button onclick="goBack()" class="btn btn-success"><i class="fa fa-chevron-left"></i> Go Back</button>
      </div>

  <form method="post" action="{{route('boutique.store')}}" enctype="multipart/form-data">
@csrf()
    <div class="card" id="card">
          <div class="card-body">
              <div class="row">
                  
                  <div class="col-md-12 col-xs-12 form-group">
                      <label>Enter Boutique Name <sup style="color:#ff0000;">*</sup></label>
                      <input type="text" name="name"  value="{{old('name')}}" class="form-control" placeholder="Enter  name" required>
                  </div>
                  <div class="col-md-12 col-xs-12 form-group">
                      <label> Enter Boutique Decription <sup style="color:#ff0000;">*</sup></label>
                      <input type="text" name="decription"  value="{{old('decription')}}" class="form-control" placeholder=" Enter Decription" required>
                  </div>
                  <div class="col-md-12 col-xs-12 form-group">
                      <label> Enter Boutique Image <sup style="color:#ff0000;">*</sup></label>
                      <input type="file" name="image"  class="form-control" accept="image/x-png,image/gif,image/jpeg" placeholder= "Upload Image" required>
                  </div>
                  
                
                  <div class="col-md-12 col-xs-12 form-group">
                      <button type="submit" class="btn btn-success" style="width:100%;">Create Boutique</button>
                  </div>
              </div>
          </div>
      </div>
  </form>
  
  </div>
</div>

@endsection 








