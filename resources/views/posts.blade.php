<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

     @foreach ($posts as $post)
         <div>
             <h4>{{$post->id}} {{$post->title}}</h4>
             <p>{{$post->description}}</p>
             <hr>
         </div>
     @endforeach


</body>
</html>