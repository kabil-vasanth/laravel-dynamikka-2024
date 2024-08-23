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
    <h1>student  details</h1>
    <table border="1"  class="table table-success table-striped " style="width: min-content; margin-left:300px; margin-top:100px">
        <tr>
           <td> <h1>firstname</h1></td>
           <td> <h1>lastname</h1></td>
            <td><h1>gradename</h1></td>
           <td> <h1>gradeorder</h1></td>
           <td> <h1>gradecolor</h1></td>
          <td>  <h1>gradegroup</h1></td>
        </tr>



        <tr>
            <td>{{ $student->firstname }}</td>
            <td>{{ $student->lastname }}</td>

            <td><a href="{{url("grades/$student->grade_id")}}">{{ $student->grade->grade_name }}</a></td>
            <td>{{ $student->grade->grade_order }}</td>
            <td>{{ $student->grade->grade_color }}</td>
            <td>{{ $student->grade->grade_group }}</td>

        </tr>





    </table>
    <br>
    <h1>student subject details</h1>

    <table border="1" class="table table-success table-striped " style="width: min-content; margin-left:300px; ">
        @foreach ($student->subjects as $subject)
            <tr>
                <td><a href="{{ url("subjects/$subject->id") }}">{{ $subject->subject_name }}</a></td>
                <td>{{ $subject->subject_order }}</td>
                <td>{{ $subject->subject_color }}</td>

            </tr>
        @endforeach


    </table>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
