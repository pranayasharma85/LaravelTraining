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
        <th> {{ $book->id }}</th>


        {{--    <th>author_id</th>--}}
        {{--    <th>type_id</th>--}}

    </tr>

    <tr>
        <th>pagecount</th>
        <td>{{ $book->pagecount}}</td>


        {{--        <td>{{ $book->author_id }}</td>--}}
        {{--        <td>{{ $book->type_id }}</td>--}}


    </tr>

</table>
</body>
</html>
