<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$employees->rollname}}</h1>


    <table border="1" style="margin-left: auto;
    margin-right: auto;margin-top:200px;color:white; background-color:black; padding:100px">
          <tr>
              <th>FirstName</th>
              <th>LastName</th>
              <th>Date of Birth</th>
              <th>NIC</th>
              <th>Join Date</th>
              <th>Gender</th>
              <th>District</th>

              <th>job_roll</th>





          </tr>
          @foreach ($rolls as $roll)



          <tr>



              {{-- <td><a href="{{url("roll/$employee->id")}}">{{$employee->firstname}}</a></td> --}}
              <td><a href="{{url("roll/$roll->employee_id")}}">{{$roll->firstname}}</a></td>

              <td>{{$roll->lastname}}</td>
              <td>{{$roll->date_of_birth}}</td>
              <td>{{$roll->nic_number}}</td>
              <td>{{$roll->join_date}}</td>
              <td>{{$roll->gender}}</td>
              <td>{{$roll->district}}</td>
              <td>{{$roll->job_roll}}</td>

              {{-- <td><a href="{{url("employee/$employee->id")}}">show</a></td> --}}

          </tr>

          @endforeach




      </table>

</body>
</html>
