@extends('web.welcome')
@section('content')
<div class="wrap-height top30">
    <div class="row">
        <div class="col-md-12 text-right">
            <button onclick="goBack()" class="btn btn-success"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
    </div>
    <h4 class="slider_head">{{isset($product)?'Edit':'Add'}} Product</h4>
    <div class="addProduct">
        @if (isset($product))
        <form method="post" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data">   
        @else
        <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">            
        @endif
            @csrf()
            <div class="row">                
                <div class="col-md-6 col-xs-12 form-group">
                    <label>Product name</label>
                    <input type="text" class="form-control" name="product_name"  value="{{old('product_name')??$product->product_name??''}}">
                </div>
                <div class="col-md-6 col-xs-12 form-group">
                    <label>Product category</label>
                    <select class="form-control" name="category_id">
                        <option value="">Select Parent</option>
                        @if(!empty($listData))
                        @foreach($listData as $key => $row)
                        <option style="font-weight: bolder;font-size: larger;" labelVal="{{ $row->position }}" value="{{ $row->id }}"  @if($product->category_id??false == $row->id) {{ 'selected' }} @endif >{{ $row->name }}</option>
                            @foreach ($row->childrenCategories as $childCategory)   
                            @include('admin.category.child_category', ['child_category' => $childCategory]) 
                            @endforeach 
                        @endforeach
                        @endif 
                    </select>
                </div>
                <div class="col-md-6 col-xs-12 form-group ">
                    <label>Product price</label>
                    <input type="number" class="form-control" name="price"  min="0" value="{{old('price')??$product->price??''}}">
                </div>
                <div class="col-md-6 form-group">
                    <label>Product Discount(%)</label>
                    <input class="form-control" type="number" min="0" max="100" step="0.01" name="discount" value="{{old('discount')??$product->discount??''}}">
                </div>
                <div class="col-md-12 form-group">
                    <label>Product discription</label>
                    <textarea rows="6" class="form-control" name="decription">{{old('decription')??$product->decription??''}}</textarea>
                </div>
                <div class="col-md-6 col-xs-12 form-group">
                    <label>Add Image</label>
                    <input type="file" name="image" accept="image/*" /> 
                    @isset($product)
                    <img src="{{$product->image_url}}" class="float-right" alt="Product Image" width="300">                        
                    @endisset
                </div>
                <div class="col-md-12 text-right form-group">
                    <button type="submit" class="btn btn-success">{{isset($product)?'Update':'Save'}} Product</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection