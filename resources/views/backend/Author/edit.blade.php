<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>author</title>

</head>

<body>
<h1>Edit author</h1>


    <form  action="{{ route('backend.author.update',$author->authorId) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">

            <label for="name" >Name</label>
            <input type="text" id="name" value="{{$author->name}}" name="name" >


            <label for="surname">surname</label>
            <input type="text" id="surname" name="surname" value="{{$author->surname}}">





        <button type="submit"> Save Author</button>
    </form>


</body>

</html>
