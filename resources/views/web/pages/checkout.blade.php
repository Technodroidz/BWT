@extends('web.welcome')

@section('title','Channels')

@section('content')

<div class="wrap-height">
    <br>
    @foreach (['danger', 'warning', 'success', 'info'] as $key)
    @if(Session::has($key))
    <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
    @endif
    @endforeach
    <div class="row">


        <div class="col-md-12 text-right">
            <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go
                Back</button>
        </div>
    </div>
    @php
        $items = Cart::session(auth()->guard('web_user')->Id())->getContent();
    @endphp
    <div class="row my-2">        
        <div class="col-md-6">
            <div style="max-height: 400px; overflow:auto;">
                @foreach (auth()->guard('web_user')->user()->addresses as $address)
                <div class="address">
                    <div class="choose"><input type="radio" name="address" value="{{$address->id}}"></div>
                    <div class="address-block">
                        <strong>{{$address->name}}</strong>
                        <p>{{$address->address}}, {{$address->locality}}</p>
                        <p>{{$address->city}}, {{$address->state}}-{{$address->pincode}}</p>
                        <p> Landmark : {{$address->landmark}}</p>
                        <p> {{$address->mobile}}</p>
                    </div>
                </div>
                <div class="clearfix"></div>                
                @endforeach
            </div>
            @error('address_id')
                <small class="text-danger">{{$message}}</small>
            @enderror
            <div class="col-sm-12 mt-4">
                <button type="button" class="btn btn-primary add-address" data-toggle="modal" data-target="#address">
                    Add Address
                  </button>
            </div>
        </div>    
        <div class="col-md-6">
            <div class="order-area">
                <div class="check-pro">
                    <h2>In your cart ({{$items->count()}})</h2>
                    <ul class="check-ul">
                        @foreach ($items as $item)
                        <li class="clearfix">
                            <div class="check-pro-img">
                                <a href="{{route('product-detaill',$item->associatedModel->product_slug)}}"><img src="{{$item->associatedModel->image_url}}" class="img-fluid"
                                        alt="image"></a>
                            </div>
                            <div class="check-content">
                                <a href="{{route('product-detaill',$item->associatedModel->product_slug)}}">{{$item->name}}</a>
                                <span class="check-price">INR {{$item->price}}</span>
                            </div>
                            <form action="{{route('remove-cart')}}" method="post">
                                @csrf()
                                <input type="hidden" name="product_id" value="{{$item->id}}">
                                <button type="submit" class="remove-product">X</button>
                            </form>
                        </li>                            
                        @endforeach
                    </ul>
                </div>
                <h2>Your order</h2>
                <ul class="order-history">
                    <li class="order-details">
                        <span>Product:</span>
                        <span>Total</span>
                    </li>                    
                    <li class="order-details">
                        <span>Subtotal:</span>
                        <span>INR {{\Cart::getTotal()}}</span>
                    </li>
                    <li class="order-details">
                        <span>Shipping Charge:</span>
                        <span>Free shipping</span>
                    </li>
                    <li class="order-details">
                        <span><b>Total:</b></span>
                        <span><b>INR {{\Cart::getTotal()}}</b></span>
                    </li>
                </ul>
                @if ($items->count())
                <div class="checkout-btn">
                     <form action="{{route('checkout')}}" class="w-50" method="post">
                        @csrf() 
                        <input type="hidden" class="address_id" name="address_id" value="">
                        <button type="submit" class="btn btn-primary">Place Order</button>
                    </form>
                </div>                    
                @endif
            </div>
        </div>        
    </div>
    <div class="modal fade" id="address" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Address</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{route('add-address')}}" method="post">
                @csrf()
            <div class="modal-body">
                <div class="row">                    
                    <div class="col-sm-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                        @error('name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label for="mobile">Mobile Number</label>
                        <input type="text" class="form-control" id="mobile" name="mobile" value="{{old('mobile')}}">
                        @error('mobile')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label for="pincode">Pincode</label>
                        <input type="text" class="form-control" id="pincode" name="pincode" value="{{old('pincode')}}">
                        @error('pincode')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label for="locality">Locality</label>
                        <input type="text" class="form-control" id="locality" name="locality" value="{{old('locality')}}">
                        @error('locality')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-sm-12">
                        <label for="locality">Address</label>
                        <textarea type="text" class="form-control" id="adr" name="address">{{old('address')}}</textarea>
                        @error('address')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                        
                    <div class="col-sm-6">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" value="{{old('city')}}">
                        @error('city')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label for="state">State</label>
                        <input type="text" class="form-control" id="state" name="state" value="{{old('state')}}">
                        @error('state')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label for="landmark">Landmark</label>
                        <input type="text" class="form-control" id="landmark" name="landmark" value="{{old('landmark')}}">
                        @error('landmark')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <label for="phone">Alternate Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}">
                        @error('phone')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
          </div>
        </div>
      </div>

</div>

@endsection

@section('script')
<script>
    @if ($errors->first()&&!$errors->has('address_id'))
    $('.add-address').trigger('click') 
    @endif
    $('.choose input').on('change',function(e){
       $('.address_id').val($(this).val())
    })
</script>
@endsection