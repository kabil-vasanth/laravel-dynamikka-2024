<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit grades</h1>
    <form action="/grades/{{$grade->id}}" method="POST">
        @csrf
        @method('put')
        <label for="grade_name">GradeName</label>
        <input type="text" id="grade_name" name="grade_name" value="{{$grade->grade_name}}">
        <label for="grade_group">GradeGroup</label>
        <input type="text" id="grade_group" name="grade_group" value="{{$grade->grade_group}}">
        <label for="grade_order">GradeOrder</label>
        <input type="text" id="grade_order" name="grade_order" value="{{$grade->grade_order}}">
        <label for="grade_color">GradeColor</label>
        <input type="text" id="grade_color" name="grade_color" value="{{$grade->grade_color}}">






<input type='submit' value='Update'>




    </form>

</body>
</html>
