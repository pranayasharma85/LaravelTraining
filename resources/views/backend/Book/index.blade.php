</head>

<body>

<table border="1">


    <tr>
        <th>name</th>
        <th>pagecount</th>
        <th>point</th>
        <th>Author Id</th>
        <th>Type Id</th>
        <th>action</th>
        <th>Delete</th>
        <th>Edit</th>

    </tr>

    @foreach($books as $book)
        <tr>
            <td>{{ $book->name }}</td>
            <td>{{ $book->pagecount }}</td>
            <td>{{ $book->point }}</td>
            <td>{{ $book->authorId }}</td>
            <td>{{ $book->typeId }}</td>

            <td><a href="{{ route('backend.book.show', $book->bookId) }}">view detail</a></td>
            <td><a href="{{route('backend.book.edit',$book->bookId)}}">edit</a></td>
            <td><form action="{{route('backend.book.destroy',$book->bookId)}}" method="post"</td>

@csrf
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="delete">

        </form>
        </tr>
    @endforeach

</table>

</body>

</html>
