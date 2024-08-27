
<x-layout-static>

    <div class="row">
        <div class="col-sm-6">
          <div class="card" style="margin-top:150px">
            <h2 style="color:rgb(134, 167, 234)">Student  Details</h2>
            <div class="card-body">
                <table border="1"  class="table table-success table-striped " >
                    <tr>
                       <td> firstname</td>
                       <td> lastname</td>
                        <td>gradename</td>

                    </tr>



                    <tr>
                        <td>{{ $student->first_name }}</td>
                        <td>{{ $student->last_name }}</td>

                        <td><a href="{{url("grades/$student->grade_id")}}">{{ $student->grade->grade_name }}</a></td>


                    </tr>





                </table>
              <a href="/students" class="btn btn-dark">Go Students</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card"  style="margin-top:150px">
            <h2 style="color:rgb(134, 167, 234)">Students Subject Details</h2>
            <div class="card-body">
                <table border="1" class="table table-success table-striped "   >

                    @foreach ($student->subjects as $subject)
                        <tr>
                            <td><a href="{{ url("subjects/$subject->id") }}">{{ $subject->subject_name }}</a></td>
                            <td>{{ $subject->subject_order }}</td>
                            <td>{{ $subject->subject_color }}</td>

                        </tr>
                    @endforeach


                </table>
              <a href="/students" class="btn btn-dark">Go Students</a>
            </div>
          </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </x-layout-static>
