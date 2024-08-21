<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>students Details</h1>
    <table border="1">
        <tr>
            <td>firstname</td>
        <td>lastname</td>
        <td>gradename</td>
        <td>gradeorder</td>
        <td>gradecolor</td>
        <td>gradegroup</td>
        </tr>
    @foreach ($student as $students)
    <tr>
        <td>{{$students->firstname}}</a></td>
        <td>{{$students->lastname}}</td>

        <td><a href="{{url("grades/$students->grade_id")}}">{{$students->grade->grade_name}}</td>
        <td>{{$students->grade->grade_order}}</td>
        <td>{{$students->grade->grade_color}}</td>
        <td>{{$students->grade->grade_group}}</td>



     </tr>



        @endforeach

 </table>



</body>
</html>
