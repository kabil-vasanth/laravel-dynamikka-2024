
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1"style="margin-left: auto;
    margin-right: auto;margin-top:200px; color:white; background-color:black; padding:100px" >

  <tr>
      <th >FirstName</th>
      <th>LastName</th>
      <th>Date of Birth</th>
      <th>NIC</th>
      <th>Join Date</th>
      <th>Gender</th>
      <th>District</th>
      <th>job_roll</th>
      <th>rollname</th>
      <th>rollcategory</th>
      <th>rollcolor</th>






  </tr>
          <tr>

              <td>{{$employees->firstname}}</td>
              <td>{{$employees->lastname}}</td>
              <td>{{$employees->date_of_birth}}</td>
              <td>{{$employees->nic_number}}</td>
              <td>{{$employees->join_date}}</td>
              <td>{{$employees->gender}}</td>
              <td>{{$employees->district}}</td>
              <td>{{$employees->job_roll}}</td>

              <td>{{$employees->roll->rollname}}</td>
              <td>{{$employees->roll->roll_category}}</td>
              <td>{{$employees->roll->roll_color}}</td>
              {{-- <td><a href="{{url(employee/$employeess->id)}}"></a>show</td> --}}

          </tr>


          {{-- <td><a href="{{url("roll/$employees->roll_id")}}">{{$employee->job_roll}}</a></td> --}}




      </table>
      <td><a href="{{url("roll/$employees->roll_id")}}">Employee personal details</a></td>

</body>
</html>
