<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>List danh muc</h1>
    <a href="{{route('categories.create')}}">them moi</a>
    @if(session('msg'))
   <h2>{{session('msg')}}</h2>
   @endif
    <table>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>ID</th>
            <th>ID</th>
            <th>ac</th>
        </tr>

        @foreach ($data as $item)
        <tr>
            <td>{{ $item->id}}</td>
            <td>{{ $item->name}}</td>
            <td>{{ $item->created_at}}</td>
            <td>{{ $item->updated_at}}</td>
            <td>
                <a href="{{route('categories.show', $item)}}">Show</a>
                <a href="{{route('categories.edit', $item)}}">sua</a>
               <form action="{{route('categories.destroy', $item)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('cos xo ko')">xoa</button>
               </form>
               
                            </td>
        </tr>
        @endforeach
    </table>
    {{$data->links()}}
</body>

</html>