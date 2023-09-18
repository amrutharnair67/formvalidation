<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>form</h1>
    <form action="{{route('submit.form')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">Fullname</label>
    <input type="text" name="name" id="name">
    @error('name')
    <p>{{$message}}</p>
        
    @enderror
    <label for="age">Age</label>
    <input type="text" name="age" id="age">
    @error('age')
        <p>{{$message}}</p>
        
    @enderror
    <label for="date">Date</label>
    <input type="date" name="date" id="date">
    @error('date')
        <p>{{$message}}</p>
        
    @enderror
    <input type="file" name="image" id="image">
    @error('image')
        <p>{{$message}}</p>
        
    @enderror
    <button type="submit">Submit</button>
</form>
</body>
</html>