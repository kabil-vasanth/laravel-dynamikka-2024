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
        @foreach ($employees as $employeess)
        <tr>
            <td>{{$employeess->firstname}}</td>
            <td>{{$employeess->lastname}}</td>
            <td>{{$employeess->date_of_birth}}</td>
            <td>{{$employeess->nic_number}}</td>
            <td>{{$employeess->join_date}}</td>
            <td>{{$employeess->gender}}</td>
            <td>{{$employeess->district}}</td>
            <td><a href="{{url("employee/$employeess->id")}}">show</a></td>

        </tr>

        @endforeach




    </table>

</body>
</html>
