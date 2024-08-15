<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{url("students/")}}">Student</a>
    <table border="1">

        <tr><td> {{$student->firstname}}</td>
            <td>{{$student->lastname}}</td>

        </tr>

</body>
</html>
