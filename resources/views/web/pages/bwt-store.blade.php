@extends('web.welcome')
@section('title','Showcase Boutique')

@section('content')
<div class="wrap-height">
    <br/>
      <div class="row ">
    <div class="col-xl-12">
        <ul id="tabs" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#amazontv" class="amazon active" role="tab" data-toggle="tab"><img src="{{asset('assets/img/amazon-t.png')}}"></a></li>
            <li role="presentation"><a href="#appletv" role="tab" class="apple" data-toggle="tab"><img src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png"></a></li>
            <li role="presentation"><a href="#googletv" role="tab" class="google" data-toggle="tab"><img src="https://tv.google//static/images/logos/gtv.svg"> </a></li>
            <li role="presentation"><a href="#roku" role="tab" class="roku" data-toggle="tab"><img src="https://vidapp.com/wp-content/uploads/2019/06/RokuTVLogo.png">  </a></li>
        </ul>
    </div>
    <div class="col-md-12 text-right form-group">
            <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
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
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>SHOWCASE BOUTIQUE</strong></p>
					<p>Lorem ipsum doller sit amet.</p>
					<a href="#" class="btn btn-success">Shop Now</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="assets/img/shopping-cartoon.png" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>SHOWCASE BOUTIQUE</strong></p>
					<p>Lorem ipsum doller sit amet.</p>
					<a href="#" class="btn btn-success">Shop Now</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>SHOWCASE BOUTIQUE</strong></p>
					<p>Lorem ipsum doller sit amet.</p>
					<a href="#" class="btn btn-success">Shop Now</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>SHOWCASE BOUTIQUE</strong></p>
					<p>Lorem ipsum doller sit amet.</p>
					<a href="#" class="btn btn-success">Shop Now</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>JEWLERY DESIGN BOUTIQUE</strong></p>
					<p>Lorem ipsum doller sit amet.</p>
					<a href="#" class="btn btn-success">Shop Now</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>JEWLERY DESIGN BOUTIQUE</strong></p>
					<p>Lorem ipsum doller sit amet.</p>
					<a href="#" class="btn btn-success">Shop Now</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>JEWLERY DESIGN BOUTIQUE</strong></p>
					<p>Lorem ipsum doller sit amet.</p>
					<a href="#" class="btn btn-success">Shop Now</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>JEWLERY DESIGN BOUTIQUE</strong></p>
					<p>Lorem ipsum doller sit amet.</p>
					<a href="#" class="btn btn-success">Shop Now</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>SHOWCASE BOUTIQUE</strong></p>
					<p>Lorem ipsum doller sit amet.</p>
					<a href="#" class="btn btn-success">Shop Now</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>SHOWCASE BOUTIQUE</strong></p>
					<p>Lorem ipsum doller sit amet.</p>
					<a href="#" class="btn btn-success">Shop Now</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>SHOWCASE BOUTIQUE</strong></p>
					<p>Lorem ipsum doller sit amet.</p>
					<a href="#" class="btn btn-success">Shop Now</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>SHOWCASE BOUTIQUE</strong></p>
					<p>Lorem ipsum doller sit amet.</p>
					<a href="#" class="btn btn-success">Shop Now</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>JEWLERY DESIGN BOUTIQUE</strong></p>
					<p>Lorem ipsum doller sit amet.</p>
					<a href="#" class="btn btn-success">Shop Now</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>JEWLERY DESIGN BOUTIQUE</strong></p>
					<p>Lorem ipsum doller sit amet.</p>
					<a href="#" class="btn btn-success">Shop Now</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>JEWLERY DESIGN BOUTIQUE</strong></p>
					<p>Lorem ipsum doller sit amet.</p>
					<a href="#" class="btn btn-success">Shop Now</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card" id="card-new">
				<div class="product_img">
					<img src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png" class="img-responsive">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>JEWLERY DESIGN BOUTIQUE</strong></p>
					<p>Lorem ipsum doller sit amet.</p>
					<a href="#" class="btn btn-success">Shop Now</a>
				</div>
			</div>
		</div>
	</div>
	<div class="text-center">
		<a href="#" class="btn btn-primary" id="loadMore">Load More</a>
	</div>
</div>
@endsection