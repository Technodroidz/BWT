@extends('web.welcome')

@section('title','Speciality Boutique')

@section('content')

<div class="wrap-height"><br/>
<div class="text-right form-group">
            <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
	<!--<div class="row">-->
	<!--	<div class="col-md-12 col-xs-12 form-group">-->
	<!--		<img class="img-responsive" src="http://bwt.tec24.in/public/assets/img/bwt_logo_3d_no_circle_shine_0.jpg">-->
	<!--	</div>-->
	<!--</div>-->
	<!--<hr>-->
	<div class="card" id="card-new">
		<div class="row">
			<div class="col-md-6 col-xs-12">
				<div class="shop_img">
					<img class="img-responsive" src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png">
				</div>
			</div>
			<div class="col-md-6 col-xs-12 form-group text-center">
				<div class="shop_txt">
					<h2>Acrobatic Boutique</h2>
					<p> </p>
					<a href="{{ url('boutique-list')}}" class="btn btn-success">Shop Now</a>
				</div>
			</div>
		</div>
	</div>

	<div class="card" id="card-new">
		<div class="row">
			<div class="col-md-6 col-xs-12 form-group text-center">
				<div class="shop_txt">
					<h2>Musician Boutique</h2>
					<p> </p>
					<a href="{{ url('boutique-list')}}" class="btn btn-success">Shop Now</a>
				</div>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class="shop_img">
					<img class="img-responsive" src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png">
				</div>
			</div>
		</div>
	</div>

	<div class="card" id="card-new">
		<div class="row">
			<div class="col-md-6 col-xs-12">
				<div class="shop_img">
					<img class="img-responsive" src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png">
				</div>
			</div>
			<div class="col-md-6 col-xs-12 form-group text-center">
				<div class="shop_txt">
					<h2>Paintings Boutique</h2>
					<p> </p>
					<a href="{{ url('boutique-list')}}" class="btn btn-success">Shop Now</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="card" id="card-new">
		<div class="row">
			<div class="col-md-6 col-xs-12 form-group text-center">
				<div class="shop_txt">
					<h2>Pottery Boutique</h2>
					<p> </p>
					<a href="{{ url('boutique-list')}}" class="btn btn-success">Shop Now</a>
				</div>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class="shop_img">
					<img class="img-responsive" src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png">
				</div>
			</div>
		</div>
	</div>

	<div class="card" id="card-new">
		<div class="row">
			<div class="col-md-6 col-xs-12">
				<div class="shop_img">
					<img class="img-responsive" src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png">
				</div>
			</div>
			<div class="col-md-6 col-xs-12 form-group text-center">
				<div class="shop_txt">
					<h2>Puppet Boutique</h2>
					<p> </p>
					<a href="{{ url('boutique-list')}}" class="btn btn-success">Shop Now</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection