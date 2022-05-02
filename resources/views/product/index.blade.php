@extends('web.welcome')
@section('title')  Product @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-users.css') }}">
<!-- END: VENDOR CSS-->
@endsection

@section('content')
<!-- BEGIN: Page Main-->
<div id="main">
  <div class="row">
    <div class="col-md-12 mt-3">
      <a class="btn btn-primary" href="{{route('product.create')}}">Add New Product</a>
        <button onclick="goBack()" class="btn btn-success float-right back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
    </div>
</div>


<div class="col s12">
  <div class="row">
    <div class="container">
         <!-- users list start -->
      <section class="users-list-wrapper section">
        <div class="users-list-table">
          <div class="card">
            <div class="card-header">

            </div>
            <div class="card-content">

              <div class="responsive-table">
                <table id="state_list" class="table table-block">
                  <thead>
                    <tr>
                      <th>Sr</th>

                      <th>Product Name</th>
                      <th>Description </th>
                      <th>Image </th>
                      <th>Price</th>
                      <th>Discount</th>
                      <th>Created At</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @if(!empty($products))
                    @foreach($products as $key => $row )
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td class="pr-name"><span>{{ $row->product_name ?? '-' }}</span></td>
                      <td class="pr-name"><span>{{ $row->decription ?? '-' }}</span></td>
                      <td><img src="{{ $row->image_url }}" height="50" width="50"></td>
                      <td>{{$row->price ?? '-'}}</td>
                      <td>{{$row->discount ?? '-'}}</td>
                      <td>{{ changeDateFormat($row->created_at, 'M-d-Y') }}</td>                      
                      <td>
                        <a href="{{ URL::signedRoute('product.edit',$row->id)}}" title="Edit"><i class="fa fa-edit text-success"></i></a>
                        <a href="{{ URL::signedRoute('product.delete',$row->id) }}" title="Delete" onclick="return confirm('Are you sure to delete this item?')">
                          <i class="fa fa-trash text-danger"></i></a>
                      </td>
                     
                    </tr>
                    @endforeach
                  @endif
                  {{$products->links()}}
                </tbody>
              </table>
            </div>
            <!-- datatable ends -->
          </div>
        </div>
      </div>
    </section>
    <!-- users list ends -->
    
  </div>
  <div class="content-overlay"></div>
</div>
</div>
</div>
@endsection