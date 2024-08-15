<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{url("/employee")}}">Employee</a>
    <table border="1">

        <tr>

            <td>{{$employees->firstname}}</td>
            <td>{{$employees->lastname}}</td>
            <td>{{$employees->date_of_birth}}</td>
            <td>{{$employees->nic_number}}</td>
            <td>{{$employees->join_date}}</td>
            <td>{{$employees->gender}}</td>
            <td>{{$employees->district}}</td>
            {{-- <td><a href="{{url(employee/$employeess->id)}}"></a>show</td> --}}

        </tr>






    </table>



</body>
</html>
