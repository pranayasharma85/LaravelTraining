<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>

        <th> ID</th>
        <th> {{ $student->id }}</th>


        {{--    <th>author_id</th>--}}
        {{--    <th>type_id</th>--}}

    </tr>

    <tr>
        <th>name</th>
        <td>{{ $student->name}}</td>


        {{--        <td>{{ $book->author_id }}</td>--}}
        {{--        <td>{{ $book->type_id }}</td>--}}


    </tr>

    <tr>
        <th>surname</th>
        <td>{{ $student->surname}}</td>
    </tr>

    <tr>
        <th>birthdate</th>
        <td>{{ $student->birthdate}}</td>
    </tr>
    <tr>
        <th>gender</th>
        <td>{{ $student->gender}}</td>
    </tr>
    <tr>
        <th>class</th>
        <td>{{ $student->class}}</td>
    </tr>
    <tr>
        <th>point</th>
        <td>{{ $student->point}}</td>
    </tr>
</table>
</body>
</html>
