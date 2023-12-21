<html>
</head>

<body>

<table border="1">

    <tr>
        <th>takenDate</th>
        <th>broughtDate</th>
        <th>Student Id</th>
        <th>Book Id</th>
        <th>action</th>
        <th>edit</th>
        <th>Delete</th>


    </tr>

    @foreach($borrows as $borrow)
        <tr>
            <td>{{ $borrow->takenDate }}</td>
            <td>{{ $borrow->broughtDate }}</td>
            <td>{{ $borrow->studentId}}</td>
            <td>{{ $borrow->bookId }}</td>
{{--            foreign wala mathi ko --}}


            <td><a href="{{ route('backend.borrow.show', $borrow->borrowId) }}">view detail</a></td>
            <td><a href="{{route('backend.borrow.edit',$borrow->borrowId)}}">edit</a></td>

            <td><form action="{{route('backend.borrow.destroy',$borrow->borrowId)}}" method="post"</td>
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="delete">

            </form>
        </tr>
    @endforeach

</table>

</body>

</html>
