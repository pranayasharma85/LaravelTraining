<html>
</head>

<body>

<table border="1">

    <tr>
        <th>name</th>
        <th>action</th>
        <th>edit</th>
        <th>Delete</th>

    </tr>

    @foreach($types as $type)
        <tr>
            <td>{{ $type->name }}</td>

            <td><a href="{{ route('backend.type.show', $type->typeId) }}">view detail</a></td>
            <td><a href="{{route('backend.type.edit',$type->typeId)}}">edit</a></td>
            <td><form action="{{route('backend.type.destroy',$type->typeId)}}" method="post"</td>
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="delete">

            </form>
        </tr>


    @endforeach

</table>


</body>

</html>
