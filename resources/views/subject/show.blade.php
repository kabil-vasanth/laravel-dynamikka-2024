<x-layout-static>

    <table border="1" class="table table-success table-striped " style="width: min-content; margin-left:300px; ">
        @foreach ($subject->grades as $grade)
            <tr>
                <td><a href="{{ url("grades/$grade->id") }}">{{ $grade->grade_name }}</a></td>
                <td>{{ $grade->grade_order }}</td>
                <td>{{ $grade->grade_color }}</td>



            </tr>
        @endforeach


    </table>
    <br>


    <table border="1" class="table table-success table-striped " style="width: min-content; margin-left:300px; ">
        @foreach ($subject->students as $student)
            <tr>
                <td><a href="{{ url("students/$student->id") }}">{{ $student->first_name }}</a></td>
                <td>{{ $student->last_name }}</td>


            </tr>
        @endforeach


     </table>







</x-layout-static>
