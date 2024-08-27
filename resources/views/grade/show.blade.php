<x-layout-static>
<body>



    <h1>{{$grade->grade_name}}</h1>
    <table border="1" class="table table-success table-striped " style="width: min-content; margin-left:200px; margin-top:50px">

        <tr>
            <th>firstname</th>
        <th>lastname</th>
       </tr>

    @foreach ($students as $student)
    <tr>

        <td><a href="{{url("students/$student->id")}}">{{$student->first_name}}</a></td>
        <td>{{$student->last_name}}</td>
    {{-- <td><a href="{{url("students/$students->id")}}">show</a></td> --}}
    </tr>



        @endforeach

</table>
<br>
<br>

<th><h1>grade  {{$grade->grade_group}} subjects</h1></th>
<br>
<table border="1" class="table table-success table-striped " style="width: min-content; margin-left:300px; margin-top:100px">
@foreach ($grade->subjects as $subject)
<td><a href="{{url("subjects/$subject->id")}}">{{$subject->subject_name}}</a></td>

@endforeach

</table>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</x-layout-static>


