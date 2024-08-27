<x-layout-static>

    <body style="background: rgb(26, 25, 25)">
         <h3 style="color: rgb(244, 83, 3)"><i class="fa-sharp-duotone fa-solid fa-child fa-2xl" style="margin-left:20px; margin-top:20px; color:rgb(239, 234, 234)"></i>Students Details</h3>
        <div class="card mb-4" style="background: rgb(8, 8, 8)">

            <div class="card-body">

                {{-- {{$students->total()}} --}}
                <table border="1" id="datatablesSimple" style="color: rgb(244, 83, 3)">
                  <thead>  <tr>
                        <th>firstname</th>
                        <th>lastname</th>
                        <th>gradename</th>

                    </tr></thead>
                    @foreach ($students as $student)
                        <tr>
                            <td><a href="{{ url("students/$student->id") }}" style="color: white">{{ $student->first_name }}</a></td>
                            <td>{{ $student->last_name }}</td>

                            <td><a href="{{ url("grades/$student->grade_id") }}"
                                    style="color: white">{{ $student->grade->grade_name }}</td>




                        </tr>
                    @endforeach

                </table>
                <a href="/grades" class="btn btn-secondary">Go Grades</a>
                <a href="/subjects" class="btn btn-secondary">Go Subjects</a>
            </div>
        </div>
        {{ $students->links() }}

        {{-- {{$students->links()}} --}}
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
    </body>
</x-layout-static>
