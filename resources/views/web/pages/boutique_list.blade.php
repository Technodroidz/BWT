@extends('web.welcome')
@section('title','Boutique-List')

@section('content')

<div class="wrap-height top30">
    <div class="row form-group">
        <div class="col-md-12 text-right">
            <button onclick="goBack()" class="btn btn-success"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-xs-12 form-group">
            <div class="card" id="card-new">
				<div class="product_img">
					<img src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>Boutique Shop One</strong></p>
					<p></p>
					<a href="{{ url('product')}}" class="btn btn-success">Shop Now</a>
				</div>
			</div>
        </div>
        <div class="col-md-4 col-xs-12 form-group">
            <div class="card" id="card-new">
				<div class="product_img">
					<img src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>Boutique Shop Two</strong></p>
					<p></p>
					<a href="{{ url('product')}}" class="btn btn-success">Shop Now</a>
				</div>
			</div>
        </div>
        <div class="col-md-4 col-xs-12 form-group">
            <div class="card" id="card-new">
				<div class="product_img">
					<img src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>Boutique Shop Three</strong></p>
					<p></p>
					<a href="{{ url('product')}}" class="btn btn-success">Shop Now</a>
				</div>
			</div>
        </div>
        <div class="col-md-4 col-xs-12 form-group">
            <div class="card" id="card-new">
				<div class="product_img">
					<img src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>Boutique Shop Four</strong></p>
					<p></p>
					<a href="{{ url('product')}}" class="btn btn-success">Shop Now</a>
				</div>
			</div>
        </div>
        <div class="col-md-4 col-xs-12 form-group">
            <div class="card" id="card-new">
				<div class="product_img">
					<img src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>Boutique Shop Five</strong></p>
					<p></p>
					<a href="{{ url('product')}}" class="btn btn-success">Shop Now</a>
				</div>
			</div>
        </div>
        <div class="col-md-4 col-xs-12 form-group">
            <div class="card" id="card-new">
				<div class="product_img">
					<img src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>Boutique Shop Six</strong></p>
					<p></p>
					<a href="{{ url('product')}}" class="btn btn-success">Shop Now</a>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection