</head>

<body>

<table border="1">

    <tr>
        <th>name</th>
        <th>surname</th>
        <th>birthdate</th>
        <th>gender</th>
        <th>class</th>
        <th>point</th>
        <th>action</th>
        <th>edit</th>
        <th>Delete</th>




    </tr>

    @foreach($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->surname }}</td>
            <td>{{ $student->birthdate }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->class }}</td>
            <td>{{ $student->point }}</td>



                        <td><a href="{{ route('backend.student.show', $student->studentId) }}">view detail</a></td>
            <td><a href="{{route('backend.student.edit',$student->studentId)}}">edit</a></td>
            <td><form action="{{route('backend.student.destroy',$student->studentId)}}" method="post"</td>
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="delete">
        </form>
        </tr>
    @endforeach

</table>

</body>

</html>
