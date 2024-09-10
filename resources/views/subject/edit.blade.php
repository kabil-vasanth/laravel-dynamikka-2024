<x-layout-static>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Students</h1>
    <form action="/subjects/{{$subject->id}}" method="POST">
        @csrf
        @method('put')

        <label for="subject_name">SubjectName</label>

        <select id="subject_name" name="subject_name" >
            @foreach ($subjects as $k=>$v)

            <option value="{{$k}}" {{($k==$subject->id)?"selected":""}}>{{$v}}</option>

            @endforeach
    </select>







        <label for="subject_order">SubjectOrder</label>
        <input type="text" id="subject_order" name="subject_order" value="{{$subject->subject_order}}">
        <label for="color">Color</label>
        <input type="text" id="color" name="color" value="{{$subject->color}}">




      </select>

<input type='submit' value='Update'>




    </form>

</body>
</html>
</x-layout-static>
