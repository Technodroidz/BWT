




@extends('web.welcome')

@section('title','Add Interns')


@section('content')


<div class="wrap-height">
  <br/>
    <div class="text-right form-group">
          <button onclick="goBack()" class="btn btn-success"><i class="fa fa-chevron-left"></i> Go Back</button>
      </div>

     <table>
         <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>position</th>
                <th>image</th>
                <th>decription</th>
            </tr>

         </thead>

        <tbody>
            @if(!empty($students))
            @foreach ($students as $key => $row )
                
           
             <tr>
                 <td>{{$key+1}}</td>
                 <td>{{$row->name}}</td>
                 <td>{{$row->position}}</td>
                 <td>{{$row->image}}</td>
                 <td>{{$row->decription}}</td>
             </tr>
             @endforeach
             @endif
            </tbody>

        
     </table>
  
  </div>
</div>

@endsection 








