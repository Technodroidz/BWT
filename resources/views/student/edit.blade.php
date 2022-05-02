<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('student.update',$students->id)}}" method="post" enctype="multipart/form-data" >
        @csrf()
    <label for="name">Name</label>
    <input type="text" name="name" id="name" placeholder="Enter Name" value="{{old('name')??$students->name}}"><br>
    <label for="age">Age</label>
    <input type="date" name="age" id="age" placeholder="Enter Age" value="{{old('age')??$students->age}}"><br>
    <label for="contact_no">contact_no</label>
    <input type="text" name="contact_no" id="contact_no" placeholder="Enter Contact_no" value="{{old('contact_no')??$students->contact_no}}"><br>
    <label for="address">Address</label>
    <input type="text" name="address" id="address" placeholder="Enter Address" value="{{old('address')??$students->address}}"><br>
    <button>Submit</button>
    </form>
</body>
</html>
</body>
</html>