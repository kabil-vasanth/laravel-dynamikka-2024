<x-layout-static>
    <h2 style="color:rgb(29, 97, 233)">Subject  Details</h2>
    <div class="row">
        <div class="col-sm-6" style="margin-top:100px;">
          <div class="card">
            <h2 style="color:rgb(134, 167, 234)">Subject grade  Details</h2>
            <div class="card-body">

                <table border="1" class="table table-success table-striped  ">
                    @foreach ($subject->grades as $grade)
                        <tr>
                            <td><a href="{{ url("grades/$grade->id") }}">{{ $grade->grade_name }}</a></td>
                            <td>{{ $grade->grade_order }}</td>
                            <td>{{ $grade->grade_color }}</td>
 </tr>
                    @endforeach


                </table>
              <a href="/subjects" class="btn btn-primary">Go Subjects</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6" style="margin-top:100px;">
          <div class="card">
            <h2 style="color:rgb(134, 167, 234)">Subject Student  Details</h2>
            <div class="card-body">
                <table border="1" class="table table-success table-striped "  >
                    @foreach ($subject->students as $student)
                        <tr>
                            <td><a href="{{ url("students/$student->id") }}">{{ $student->first_name }}</a></td>
                            <td>{{ $student->last_name }}</td>


                        </tr>
                    @endforeach


                 </table>

              <a href="/subjects" class="btn btn-primary">Go Subjects</a>
            </div>
          </div>
        </div>
      </div>






</x-layout-static>
