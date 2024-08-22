<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> {{$subjects->subject_name}}  student details<h1>
    <table border="1">
    @foreach ($subjects->students as $student)

    <tr>

        <td>{{$student->firstname}}</td>
        <td>{{$student->lastname}}</td>

        {{-- <td><a href="{{url("grades/$students->grade_id")}}">{{$students->grade->grade_name}}</td>
        <td>{{$students->grade->grade_order}}</td>
        <td>{{$students->grade->grade_color}}</td>
        <td>{{$students->grade->grade_group}}</td> --}}



     </tr>



        @endforeach
    </table>

    <br>
    <br>
    <h1>{{$subjects->subject_name}} grade details</h1>
    <table border="1">
        @foreach ($subjects->grades as $grade)

        <tr>

            <td>{{$grade->grade_name}}</td>
            <td>{{$grade->grade_group}}</td>
            <td>{{$grade->grade_color}}</td>
            <td>{{$grade->grade_order}}</td>

            {{-- <td><a href="{{url("grades/$students->grade_id")}}">{{$students->grade->grade_name}}</td>
            <td>{{$students->grade->grade_order}}</td>
            <td>{{$students->grade->grade_color}}</td>
            <td>{{$students->grade->grade_group}}</td> --}}



         </tr>



            @endforeach
        </table>


</body>
</html>
