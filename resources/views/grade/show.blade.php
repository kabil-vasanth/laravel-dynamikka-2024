<x-layout-static>
<body>

    <h3 style="font-style:italic">Grades  Details</h3>
    <div class="row">
        <div class="col-sm-6" style="width:500px; margin-top:100px; margin-left:70px">
          <div class="card">
            <div class="card-body">

                <h3>{{$grade->grade_name}}</h3>
                <table border="1" class="table table-success table-striped " >

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
              <a href="/grades" class="btn btn-primary">Go Grades</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6" style="width:500px; margin-top:100px">
          <div class="card">
            <div class="card-body">
                <th><h3>Grade  {{$grade->grade_group}} subjects</h3></th>


                <table border="1" class="table table-success table-striped " >
                    <tr><th>Subjects</th><tr>
                @foreach ($grade->subjects as $subject)
                <tr><td><a href="{{url("subjects/$subject->id")}}">{{$subject->subject_name}}</a></td></tr>

                @endforeach

                </table>
              <a href="/grades" class="btn btn-primary">Go Grades</a>
            </div>
          </div>
        </div>
      </div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</x-layout-static>


