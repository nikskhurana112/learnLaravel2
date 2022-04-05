<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('post.save') }}" method="post">

        {{ csrf_field() }}

        <label for="">Post Title</label>
        <input type="text" name="title"> 
        <br>

        <label for="">Post Description</label>
        <input type="text" name="description"> 
        <br>

        <button>Submit</button>


    </form>
    
    <a href="{{route('post.list')}}">List Post</a>
    
</body>
</html>