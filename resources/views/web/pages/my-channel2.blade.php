@extends('web.welcome')

@section('title','Channels')

@section('content')

<div class="wrap-height">
    <br/>
    @foreach (['danger', 'warning', 'success', 'info'] as $key)
        @if(Session::has($key))
            <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
        @endif
   @endforeach
        <div class="row">
            <div class="col-md-6 text-left">
             @if (Auth::guard('web_user')->check())
             @php
             $id=Auth::guard('web_user')->user()->id;
             $data = DB::table('channel')->select('*')->where('user_id',$id)->first();
             @endphp
             @if($data)
              <a class="btn btn-success" href="{{url('/mi-channel')}}">My Channel</a>
             @else
             <button class="btn btn-success" data-toggle="modal" data-target="#addNew">Create Channel</button>
             @endif
             @else
             <a class="btn btn-success" href="{{url('/channel-name')}}">Create Channel</a>
             @endif

        </div>
        <div class="col-md-4">
            <input type="text" title="search" class="form-control" placeholder="search channel" name="search" value="" required="">
        </div>
        <div class="col-md-2 text-right">
            <button onclick="goBack()" class="btn btn-success"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
    </div>
    <br>
	<!--<div class="row">-->
	<!--	<div class="col-md-12 col-xs-12 form-group">-->
	<!--		<img class="img-responsive" src="http://bwt.tec24.in/public/assets/img/bwt_logo_3d_no_circle_shine_0.jpg">-->
	<!--	</div>-->
	<!--</div>-->
	<!--<hr>-->

	<div class="row">
		@foreach ($channel as $row )


		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="{{asset('img/channelprofile2.jpg')}}" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>{{$row->name}}</strong></p>

					<a href="#" class="btn btn-success">Subscribe</a>
				</div>
			</div>
		</div>
		@endforeach
		{{-- <div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="http://creativedzine.co.in/bwt/public/assets/img/channelprofile2.jpg" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>Channel Name</strong></p>

					<a href="#" class="btn btn-success">Subscribe</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="http://creativedzine.co.in/bwt/public/assets/img/channelprofile2.jpg" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>Channel Name</strong></p>

					<a href="#" class="btn btn-success">Subscribe</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="http://creativedzine.co.in/bwt/public/assets/img/channelprofile2.jpg" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>Channel Name</strong></p>

					<a href="#" class="btn btn-success">Subscribe</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="http://creativedzine.co.in/bwt/public/assets/img/channelprofile2.jpg" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>Channel Name</strong></p>

					<a href="#" class="btn btn-success">Subscribe</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="http://creativedzine.co.in/bwt/public/assets/img/channelprofile2.jpg" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>Channel Name</strong></p>

					<a href="#" class="btn btn-success">Subscribe</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="http://creativedzine.co.in/bwt/public/assets/img/channelprofile2.jpg" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>Channel Name</strong></p>

					<a href="#" class="btn btn-success">Subscribe</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="http://creativedzine.co.in/bwt/public/assets/img/channelprofile2.jpg" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>Channel Name</strong></p>

					<a href="#" class="btn btn-success">Subscribe</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="http://creativedzine.co.in/bwt/public/assets/img/channelprofile2.jpg" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>Channel Name</strong></p>

					<a href="#" class="btn btn-success">Subscribe</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="http://creativedzine.co.in/bwt/public/assets/img/channelprofile2.jpg" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>Channel Name</strong></p>

					<a href="#" class="btn btn-success">Subscribe</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="http://creativedzine.co.in/bwt/public/assets/img/channelprofile2.jpg" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>Channel Name</strong></p>

					<a href="#" class="btn btn-success">Subscribe</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="http://creativedzine.co.in/bwt/public/assets/img/channelprofile2.jpg" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>Channel Name</strong></p>

					<a href="#" class="btn btn-success">Subscribe</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="http://creativedzine.co.in/bwt/public/assets/img/channelprofile2.jpg" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>Channel Name</strong></p>

					<a href="#" class="btn btn-success">Subscribe</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="http://creativedzine.co.in/bwt/public/assets/img/channelprofile2.jpg" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>Channel Name</strong></p>

					<a href="#" class="btn btn-success">Subscribe</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="http://creativedzine.co.in/bwt/public/assets/img/channelprofile2.jpg" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>Channel Name</strong></p>

					<a href="#" class="btn btn-success">Subscribe</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="http://creativedzine.co.in/bwt/public/assets/img/channelprofile2.jpg" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>Channel Name</strong></p>

					<a href="#" class="btn btn-success">Subscribe</a>
				</div>
			</div>
		</div> --}}
	</div>
	<div class="text-center">
		<a href="#" class="btn btn-primary" id="loadMore">Load More</a>
	</div>
	<div id="addNew" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" id="closemodal">&times;</button>
        <h4 class="modal-title">Creasste New Channel</h4>
      </div>
      <form method="post" action="{{route('add-new-channel')}}" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="fromDate">Channel Name:</label>
                    <input type="text" class="form-control" name="channel"  required>
                  </div>
                </div>
              </div>

          </div>
          <div class="modal-footer">
            <a href="#" type="button" class="btn btn-default" data-dismiss="modal">Close</a>
            <button type="submit" class="btn btn-success" >Submit</button>
          </div>
      </form>
    </div>

  </div>
</div>
</div>
@endsection
