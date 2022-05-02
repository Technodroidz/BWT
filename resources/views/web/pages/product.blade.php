@extends('web.welcome')

@section('title','Products')

@section('content')

<div class="wrap-height">
    <br/>
        <div class="row">
        <div class="col-md-12 text-right">
            <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
    </div>
    <br>
	@php
		$product_ids = auth()->guard('web_user')->Id()?Cart::session(auth()->guard('web_user')->Id())->getContent()->pluck('id'):collect([]);
	@endphp
	<div class="row">
		@forelse ($products as $product)
		<div class="col-md-3 col-xs-12 form-group load-product">
			<div class="card product-card" id="card-new">
				<a href="{{route('product-detaill',$product->product_slug)}}">
				<div class="product_img">
					<img src="{{$product->image_url}}" class="img-responsive" style="height: 170px">
				</div>
				<div class="product_desc">
					<p class="mar_0"><strong>{{\Str::limit($product->product_name,100,'...')}}</strong></p>
					{{-- <p class="pr-des"> {{\Str::limit($product->decription,50,'...')}}</p> --}}
					<strong class="price"> <i class="fa fa-usd"></i>{{$product->price}}</strong>
					{{-- <small>Only 2 left in stock</small> --}}
					<div class="btnn-product">
					<a href="javascript:void(0)" data-id='{{$product->id}}' class="btn btn-product btn-product-cart add-cart" style="display: {{$product_ids->contains($product->id)?'none':'block'}}">Add To Cart</a>
					<a href="javascript:void(0)" data-id='{{$product->id}}' class="btn btn-product btn-product-cart remove-cart" style="display: {{$product_ids->contains($product->id)?'block':'none'}}">Remove</a>
					<a href="#" class="btn btn-product">Buy Now</a>
				</div>
				</div>
			</a>
			</div>
		</div>		
				
			
		@empty
		<h4>There is no Product</h4>
		@endforelse		
	</div>
	<div class="text-center">
		<a href="#" class="btn btn-primary" id="loadMore">Load More</a>
	</div>
</div>
@endsection