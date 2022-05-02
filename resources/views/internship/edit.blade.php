<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('internship.update',$internships->id)}}" method="post" enctype="multipart/form-data">
        @csrf()
    
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{old('name')??$internships->name}}" placeholder="Enter Name"><br>
        <label for="age">Age</label>
        <input type="date" name="age" id="age" value="{{old('age')??$internships->age}}" placeholder="Enter Age"><br>
        <label for="skills">Skills</label>
        <input type="text" name="skills" id="skills" value="{{old('skills')??$internships->skills}}" placeholder="Enter Skills"><br>
        <label for="contact_no">Contact no</label>
        <input type="phone" name="contact_no" id="contact_no" value="{{old('contact_no')??$internships->contact_no}}" placeholder="Enter Contact_no"><br>
        <button>submit</button>
    </form>
</body>
</html>