<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student </title>

</head>

<body>
<h1>Student</h1>


<form  action="{{ route('backend.student.update',$student->studentId) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">

    <label for="name" >Name:</label>
    <input type="text" id="takenDate" value="{{$student->name}}" name="name" >


    <label for="surname ">Surname</label>
    <input type="text" id="surname " name="surname" value="{{$student->surname}}">

    <label for="birthdate">Birthdate</label>
    <input type="date" id="birthdate" name="birthdate" value="{{$student->birthdate}}">

    <label for="gender ">Gender</label>
    <input type="text" id="gender " name="gender" value="{{$student->gender}}">

    <label for="class ">class</label>
    <input type="number" id="class" name="class" value="{{$student->class}}">

    <label for="point">Point:</label>
    <input type="number" id="point " name="point" value="{{$student->point}}">

    <button type="submit"> Save Student</button>
</form>


</body>

</html>
