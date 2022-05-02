<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('boutique.update',$boutiques->id)}}" enctype="multipart/form-data">
    @csrf()
    <label for="name">Enter Boutique Name</label>
    <input type="text" value="{{old('name')??$boutiques->name}}" name="name" placeholder="Enter Boutique name" required><br>
    <label for="image">Enter Boutique Image</label>
    <input type="file"  name="image"  accept="image/x-png,image/gif,image/jpeg" placeholder="Enter Boutique image" required><br>
    <label for="decription">Enter Decription</label>
    <input type="text" value="{{old('decription')??$boutiques->decription}}" name="decription" placeholder="Enter decription" required>
    <button>submit</button>

    </form>
</body>
</html>