<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



    <th>{{$grade->grade_name}}</th>
    <table border="1">

        <tr>
            <th>firstname</th>
        <th>lastname</th>
       </tr>

    @foreach ($students as $student)
    <tr>

        <td><a href="{{url("students/$student->id")}}">{{$student->firstname}}</a></td>
        <td>{{$student->lastname}}</td>
    {{-- <td><a href="{{url("students/$students->id")}}">show</a></td> --}}
    </tr>



        @endforeach

</table>

<th><h1>grade  {{$grade->grade_group}} subjects</h1></th>
<br>
<table border="1">
@foreach ($grade->subjects as $subject)
<td>{{$subject->subject_name}}

@endforeach

</table>



</body>
</html>
