<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Book Form</title>

</head>

<body>
<h1>Edit Book</h1>

<div class="mt-10">
    <form  action="{{ route('backend.book.update',$book->bookId) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="mb-5">
            <label for="name" >Name</label>
            <input type="text" id="name" value="{{$book->name}}" name="name" >
        </div>
        <div class="mb-5">
            <label for="pagecount">Page Count</label>
            <input type="number" id="pagecount" name="pagecount" value="{{$book->pagecount}}">
        </div>
        <div class="mb-5">
            <label for="point" >Point</label>
            <input type="number" id="point" name="point" value="{{$book->point}}">
        </div>
        <div class="mb-5">
            <label for="authorId" >Author Id</label>
            <input type="number" id="authorId" name="authorId" value="{{$book->authorId}}">
        </div>
        <div class="mb-5">
            <label for="typeId" >Type Id</label>
            <input type="number" id="typeId" name="typeId" value="{{$book->typeId}}">
        </div>

        <button type="submit"> Save Book</button>
    </form>
</div>

</body>

</html>
