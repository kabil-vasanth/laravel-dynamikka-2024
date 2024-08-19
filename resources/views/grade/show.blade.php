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


</body>
</html>
