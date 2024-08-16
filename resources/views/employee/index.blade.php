<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <table border="1" style="margin-left: auto;
  margin-right: auto;margin-top:200px;color:white; background-color:black; padding:100px">
        <tr>
            <th >FirstName</th>
            <th>LastName</th>
            <th>Date of Birth</th>
            <th>NIC</th>
            <th>Join Date</th>
            <th>Gender</th>
            <th>District</th>
            <th>Click</th>



        </tr>
        @foreach ($employees as $employee)



        <tr>


            <td>{{$employee->firstname}}</td>
            <td>{{$employee->lastname}}</td>
            <td>{{$employee->date_of_birth}}</td>
            <td>{{$employee->nic_number}}</td>
            <td>{{$employee->join_date}}</td>
            <td>{{$employee->gender}}</td>
            <td>{{$employee->district}}</td>
            <td><a href="{{url("employee/$employee->id")}}">show</a></td>

        </tr>

        @endforeach




    </table>

</body>
</html>
