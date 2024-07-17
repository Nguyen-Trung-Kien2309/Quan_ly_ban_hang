<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>them</h1>
    <form action="{{route('categories.store')}}" method="post">

    @csrf
    <label for="
    ">name</label>
    <input type="text" name="name" id="name">
<button type="submit">save</button>   
</form>
</body>
</html>