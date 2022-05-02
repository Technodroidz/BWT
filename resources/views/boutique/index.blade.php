<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <a href="{{route('boutique.create')}}">Add Another-one</a>
    <table border="2">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>image</th>
                <th>decription</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($boutiques as $key => $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->image}}</td>
                <td>{{$row->decription}}</td>
                <td>
                    <a href="{{route('boutique.edit',$row->id)}}">Edit</a>
                    <a href="{{route('boutique.delete',$row->id)}}">Delete</a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>