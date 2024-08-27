<x-layout-static>
<body>
    <h1 style="font-style:italic">Students Details</h1>
    {{-- {{$students->total()}} --}}
    <table border="1" class="table table-success table-striped " style="width:80%; margin-left:100px"  >
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
</x-layout-static>
