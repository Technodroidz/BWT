




@extends('web.welcome')

@section('title','Add Interns')


@section('content')


<div class="wrap-height">
  <br/>
    <div class="text-right form-group">
          <button onclick="goBack()" class="btn btn-success"><i class="fa fa-chevron-left"></i> Go Back</button>
      </div>

      <form action="{{route('internship.store')}}" method="post" enctype="multipart/form-data">@csrf()
    <div class="card" id="card">
          <div class="card-body">
              <div class="row">
                 
                  <div class="col-md-12 col-xs-12 form-group">
                      <label>Name <sup style="color:#ff0000;">*</sup></label>
                      <input type="text" name="name"  value="{{old('name')}}" class="form-control" placeholder="Enter name" required>
                  </div>
                  <div class="col-md-12 col-xs-12 form-group">
                      <label>Position <sup style="color:#ff0000;">*</sup></label>
                      <input type="text" name="position"  value="{{old('position')}}" class="form-control" placeholder=" Enter position" required>
                  </div>
                  <div class="col-md-12 col-xs-12 form-group">
                      <label>Image<sup style="color:#ff0000;">*</sup></label>
                      <input type="file" name="image"  class="form-control" value="{{old('image')}}" placeholder= "Enter image" required>
                  </div>
                  <div class="col-md-12 col-xs-12 form-group">
                      <label>Decription <sup style="color:#ff0000;">*</sup></label>
                      <input type="text" name="decription"  value="{{old('decription')}}" class="form-control" placeholder=" Enter decription" required>
                  </div>
                
                
                  <div class="col-md-12 col-xs-12 form-group">
                      <button type="submit" class="btn btn-success" style="width:100%;">Add Intern</button>
                  </div>
              </div>
          </div>
      </div>
  </form>
  
  </div>
</div>

@endsection 








