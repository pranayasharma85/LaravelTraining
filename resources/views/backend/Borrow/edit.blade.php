<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Borrow</title>

</head>

<body>
<h1>Borrow</h1>


<form  action="{{ route('backend.borrow.update',$borrow->borrowId) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">

    <label for="takenDate" >takenDate</label>
    <input type="date" id="takenDate" value="{{$borrow->takenDate}}" name="name" >


    <label for="broughtDate ">broughtdate</label>
    <input type="date" id="broughtDate " name="broughtDate" value="{{$borrow->broughtDate}}">

    <label for="studentId">student Id</label>
    <input type="number" id="studentId" name="studentId" value="{{$borrow->studentId}}">

    <label for="bookId ">book ID</label>
    <input type="number" id="bookId " name="bookId" value="{{$borrow->bookId}}">

    <button type="submit"> Save borrow</button>
</form>


</body>

</html>
