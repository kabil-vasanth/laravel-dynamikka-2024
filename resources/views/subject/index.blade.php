<x-layout-static>
<body>
<h1>Subjects Details</h1>
    <table border="1"  class="table table-success table-striped " style="width:80%; margin-left:100px" >
        <tr>

        <th>Subjectname</th>
        <th>Subjectorder</th>
        <th>color</th>

        </tr>
    @foreach ($subjects as $subject)


    <tr>

        <td><a href="{{url("subjects/$subject->id")}}">{{$subject->subject_name}}</a></td>
        <td>{{$subject->subject_order}}</td>
        <td>{{$subject->color}}</td>

        {{-- <td><a href="{{url("grades/$students->grade_id")}}">{{$students->grade->grade_name}}</td>
        <td>{{$students->grade->grade_order}}</td>
        <td>{{$students->grade->grade_color}}</td>
        <td>{{$students->grade->grade_group}}</td> --}}



     </tr>



        @endforeach
    </table>
    {{$subjects->links()}}


    {{-- <h1>{{$subjects->subject_name}} grade details</h1>
    <table border="1" class="table table-success table-striped " style="width: min-content; margin-left:300px; margin-top:100px">
        @foreach ($subjects->grades as $grade)

        <tr>

            <td><a href="{{url("students/$student->id")}}">{{$grade->grade_name}}</a></td>
            <td>{{$grade->grade_group}}</td>
            <td>{{$grade->grade_color}}</td>
            <td>{{$grade->grade_order}}</td>

            {{-- <td><a href="{{url("grades/$students->grade_id")}}">{{$students->grade->grade_name}}</td>
            <td>{{$students->grade->grade_order}}</td>
            <td>{{$students->grade->grade_color}}</td>
            <td>{{$students->grade->grade_group}}</td> --}}



         {{-- </tr>



            @endforeach
        </table> --}}
        {{-- <td ><a href="{{url("/students")}}">Student Details</a></td> --}}

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</x-layout-static>
