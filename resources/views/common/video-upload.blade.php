<div class="row video-upload">
    <span class="col-sm-6">
        <button class="btn btn-success" data-toggle="modal" data-target="#{{$type}}">Upload Your Video</button>
    </span>
</div>
<div class="modal fade" id="{{$type}}" tabindex="-1" role="dialog" aria-labelledby="{{$type}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width: 500px;" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Upload Video</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <div class="modal-body">
          <div class="row">
            <form action="{{route('upload-video')}}" method="POST" enctype="multipart/form-data" id="video-upload">
                @csrf
                <div class="col-sm-12">
                  <div class="col-md-12 col-xs-12 form-group">
                    <label for="name">Title</label>
                    <input type="hidden" name="type" value="{{$type}}">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter video title" >
                    <span class="text-danger"></span>
                </div>
                <div class="col-md-12 col-xs-12 form-group">
                    <label for="video">Select Video</label>
                    <input type="file" class="form-control" name="video" id="video" accept="video/*" >
                    <span class="text-danger"></span>
                </div>
                <div class="col-md-12 col-xs-12 form-group">
                    <label for="thumbnail">Select Thumbnail</label>
                    <input type="file" class="form-control" name="thumbnail" id="thumbnail" accept="image/*">
                    <span class="text-danger"></span>
                </div>
                <div class="col-md-12 col-xs-12 form-group">
                    <button type="submit">Submit</button>
                </div>
                </div>
                <progress class="progress" value="1" style="display:none;width:0%"></progress>
            </form>
          </div>
        </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
