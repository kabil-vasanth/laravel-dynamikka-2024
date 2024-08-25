<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1 style="font-style:italic">Students Details</h1>
    {{$students->total()}}
    <table border="1" class="table table-success table-striped " style="width: min-content; margin-left:300px; margin-top:200px" >
        <tr>
            <th>firstname</th>
        <th>lastname</th>
        <th>gradename</th>
        <th>gradeorder</th>
        <th>gradecolor</th>
        <th>gradegroup</th>
        </tr>
    @foreach ($students as $student)
    <tr>
        <td><a href="{{url("students/$student->id")}}">{{$student->first_name}}</a></td>
        <td>{{$student->last_name}}</td>

        <td ><a href="{{url("grades/$student->grade_id")}}" style="color: green">{{$student->grade->grade_name}}</td>
        <td>{{$student->grade->grade_order}}</td>
        <td>{{$student->grade->grade_color}}</td>
        <td>{{$student->grade->grade_group}}</td>



     </tr>



        @endforeach

 </table>
{{$students->links()}}

{{-- {{$students->links()}} --}}
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
