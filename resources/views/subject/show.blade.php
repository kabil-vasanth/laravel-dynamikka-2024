<x-layout-static>
    <h4 style="color:rgb(129, 129, 129)">Subject  Details</h4>
    <div class="row">
        <div class="col-sm-6" style="width:500px; margin-top:100px; margin-left:70px;">
          <div class="card">
            <h5 style="color:rgb(170, 171, 171)">Subject grade  Details</h5>
            <div class="card-body">

                <table border="1" class="table table-success table-striped  ">
                    @foreach ($subject->grades as $grade)
                        <tr>
                            <td><a href="{{ url("grades/$grade->id") }}"style="color:white">{{ $grade->grade_name }}</a></td>
                            <td>{{ $grade->grade_order }}</td>
                            <td>{{ $grade->grade_color }}</td>
 </tr>
                    @endforeach


                </table>
              <a href="/subjects" class="btn btn-dark">Go Subjects</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6" style="width:500px; margin-top:100px; ">
          <div class="card">
            <h5 style="color:rgb(160, 161, 162)">Subject Student  Details</h5>
            <div class="card-body">
                <table border="1" class="table table-success table-striped "  >
                    @foreach ($subject->students as $student)
                        <tr>
                            <td><a href="{{ url("students/$student->id") }}"style="color:white">{{ $student->first_name }}</a></td>
                            <td>{{ $student->last_name }}</td>


                        </tr>
                    @endforeach


                 </table>

              <a href="/subjects" class="btn btn-dark">Go Subjects</a>
            </div>
          </div>
        </div>
      </div>






</x-layout-static>
