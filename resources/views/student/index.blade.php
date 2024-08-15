<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
    @foreach ($student as $students)
    <tr><td> {{$students->firstname}}</td>
        <td>{{$students->lastname}}</td>
    <td><a href="{{url("students/$students->id")}}">show</a></td>
    </tr>



        @endforeach

</table>



</body>
</html>
