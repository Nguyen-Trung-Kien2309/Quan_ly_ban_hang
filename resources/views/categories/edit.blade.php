<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>caap nhat {{$category->name}}</h1>
    @if(session('msg'))
   <h2>{{session('msg')}}</h2>
   @endif
    <form action="{{route('categories.update', $category)}}" method="post">

    @csrf
    @method('PUT')
    <label for="
    ">name</label>
    <input type="text" name="name" id="name" value="{{$category->name}}">
<button type="submit">save</button>   
</form>
</body>
</html>