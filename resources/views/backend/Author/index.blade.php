</head>

<body>

<table border="1">

    <tr>
        <th>name</th>
        <th>surname</th>
        <th>action</th>
        <th>edit</th>
        <th>delete</th>

    </tr>

    @foreach($authors as $author)
        <tr>
            <td>{{ $author->name }}</td>
            <td>{{ $author->surname }}</td>

            <td><a href="{{ route('backend.author.show', $author->authorId) }}">view detail</a></td>
            <td><a href="{{route('backend.author.edit',$author->authorId)}}">edit</a></td>

            <td><form action="{{route('backend.author.destroy',$author->authorId)}}" method="post"</td>
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="delete">

            </form>


        </tr>


    @endforeach

</table>


</body>

</html>
