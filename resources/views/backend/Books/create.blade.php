<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>create Book</h1>

<form action="/books" method="POST">
    <label for="name">Name:</label><br>
    <input type="text" id="title" name="title" required><br><br>

    <label for="pagecount">PageCount:</label><br>
    <input type="number" id="pagecount" name="pagecount" required><br><br>

    <label for="point">Point:</label><br>
    <input type="number" id="Point" name="Point" required><br><br>

</form>
</body>
</html>
