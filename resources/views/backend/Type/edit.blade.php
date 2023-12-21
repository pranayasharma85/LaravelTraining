<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Type </title>

</head>

<body>
<h1>Type</h1>


<form  action="{{ route('backend.student.update',$type->typeId) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">

    <label for="name" >Name:</label>
    <input type="text" id="name" value="{{$type->name}}" name="name" >

    <button type="submit"> Save TYPE</button>
</form>


</body>

</html>
