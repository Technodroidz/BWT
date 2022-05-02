@extends('layouts.admin')
@section('title') Admin | Subscriber @endsection


@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-users.css') }}">
<!-- END: VENDOR CSS-->
@endsection

@section('content')
<!-- BEGIN: Page Main-->
<div id="main">
  <div class="row">
    <div class="col-md-12 mt-3">
        <br/>
    <h4 class="main-content-title tx-22 mg-b-1 mg-b-lg-1">Subscribers</h4>
    <br/>

      <!-- <a class="btn btn-primary" href="{{route('product.create')}}">Add New Product</a> -->
        <!-- <button onclick="goBack()" class="btn btn-success float-right back-btn"><i class="fa fa-chevron-left"></i> Go Back</button> -->
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

                      <th>Name</th>
                      <th>Email </th>
                      <th>Country </th>
                      <th>State </th>
                      <th>City </th>
                      
                      <th>Subscribed date</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @if(!empty($data))
                    @foreach($data as $key => $row )
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td class="pr-name"><span>{{ substr_replace($row->name, "...", 50) ?? '-' }}</span></td>
                      <td class="pr-name"><span>{{ substr_replace($row->email, "...", 50) ?? '-' }}</span></td>
                      <td class="pr-name"><span>{{ substr_replace($row->country, "...", 50) ?? '-' }}</span></td>
                      <td class="pr-name"><span>{{ substr_replace($row->state, "...", 50) ?? '-' }}</span></td>
                      <td class="pr-name"><span>{{ substr_replace($row->city, "...", 50) ?? '-' }}</span></td>
                      
                      <td>{{ changeDateFormat($row->created_at, 'M-d-Y') }}</td>                      
                     
                     
                    </tr>
                    @endforeach
                  @endif
                  {{$data->links()}}
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