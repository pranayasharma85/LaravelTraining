<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Book Form</title>

</head>

<body>
<h1 class="text-4xl">Create New Book</h1>


    <form class="max-w-sm mx-auto" action="{{ route('backend.book.store') }}" method="post">
        @csrf

            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" id="name" name="name"><br><br>
        @error('name')
        {{$message}}
        @enderror
        <br><br>

            <label for="pagecount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Page
                Count</label>
            <input type="number" id="pagecount" name="pagecount"><br><br>
        @error('pagecount')
        {{$message}}
        @enderror
        <br><br>

            <label for="point" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Point</label>
            <input type="number" id="point" name="point"><br><br>
        @error('point')
        {{$message}}
        @enderror
        <br><br>
            <label for="authorId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Author
                Id</label>
            <input type="number" id="authorId" name="authorId"><br><br>

        @error('authorId')
        {{$message}}
        @enderror
        <br><br>
            <label for="typeId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type
                Id</label>
            <input type="number" id="typeId" name="typeId"><br><br>

        @error('typeId')
        {{$message}}
        @enderror
        <br><br>
        <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
            Book</button>
    </form>


</body>

</html>
