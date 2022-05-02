@extends('web.welcome')

@section('title','Products')

@section('content')
@php
    $product_ids = auth()->guard('web_user')->Id()?Cart::session(auth()->guard('web_user')->Id())->getContent()->pluck('id'):collect([]);
    $wish_product_ids = auth()->guard('web_user')->Id()?app('wishlist')->getContent()->pluck('id'):collect([]);
@endphp
<div class="wrap-height">
    <br/>
        <div class="row">
        <div class="col-md-12 text-right">
            <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
    </div>
    <br>
	<div class="row">
       <div class="col-md-6">
       	<div class="pro-dis">
			<img src="{{$product->image_url}}" class="d-block w-100" />
            @if ($wish_product_ids->contains($product->id))
			<a href="{{route('remove-wishlist',$product->id)}}" class="btn btn-product btn-product-fav remove-fav">Remove Favourite</a>                
            @else
			<a href="{{route('add-wishlist',$product->id)}}" class="btn btn-product btn-product-fav">Add To Favourites</a>                
            @endif
			<a href="javascript:void(0)" data-id='{{$product->id}}' class="btn btn-product btn-product-cart add-cart" style="display: {{$product_ids->contains($product->id)?'none':'block'}}">Add To Cart</a>
			<a href="javascript:void(0)" data-id='{{$product->id}}' class="btn btn-product btn-product-cart remove-cart" style="display: {{$product_ids->contains($product->id)?'block':'none'}}">Remove</a>
			<a href="#" class="btn btn-product">Buy Now</a>
		</div>
  </div> 
<div class="col-md-6">
        <div class="product-details">
            <h2>{{$product->product_name}}</h2>
           
            <ul class="clearfix list-item">
                <li><a href="#">Hiten Prajapati </a></li>
            </ul>
            <hr>
            <div class="price clearfix">Price <span>{{$product->price}}</span> (Inclusive of all taxes )
            <small>Discount <b>3,000 INR (8%)</b>   </small>
            </div>
            <div class="clearfix"></div>
            <div class="discription clearfix">
                <h4><b>Discription</b></h4>
               <p>{{$product->decription}}</p>              
            </div>
        </div>
   </div>

  </div>
	
</div>
@endsection