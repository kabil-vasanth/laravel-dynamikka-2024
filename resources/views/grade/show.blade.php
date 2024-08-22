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
        <tr>
            <td>firstname</td>
        <td>lastname</td>
        <td>gradename</td>
        <td>gradeorder</td>
        <td>gradecolor</td>
        <td>gradegroup</td></tr>

    <tr>
        <td>{{$student->firstname}}</td>
        <td>{{$student->lastname}}</td>

        <td>{{$student->grade->grade_name}}</td>
        <td>{{$student->grade->grade_order}}</td>
        <td>{{$student->grade->grade_color}}</td>
        <td>{{$student->grade->grade_group}}</td>

     </tr>





 </table>
 <br>
 <h1>student subject details</h1>

 <table border="1">
@foreach ($student->subjects as $subject )
<tr>
<td><a href="{{url("subjects/$subject->id")}}">{{$subject->subject_name}}</a></td>
<td>{{$subject->subject_order}}</td>
<td>{{$subject->subject_color}}</td>

</tr>

@endforeach






</table>


</body>
</html>
