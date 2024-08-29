
<x-layout-static>
    <h3 style="color: rgb(114, 113, 112)"><i class="fa-sharp-duotone fa-solid fa-child fa-2xl" style="margin-left:20px; margin-top:20px; color:rgb(159, 156, 156)"></i>Students Details</h3>

    <div class="row">
        <div class="col-sm-6"style="width:500px; margin-top:100px; margin-left:70px;">
          <div class="card" >
            <h5 style="color:rgb(160, 161, 162)">Student  Details</h5>
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

                        <td><a href="{{url("grades/$student->grade_id")}}"style="color:white">{{ $student->grade->grade_name }}</a></td>


                    </tr>





                </table>
              <a href="/students" class="btn btn-dark">Go Students</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6"style="width:500px; margin-top:100px; ">
          <div class="card"  >
            <h5 style="color:rgb(160, 161, 162)">Students Subject Details</h5>
            <div class="card-body">
                <table border="1" class="table table-success table-striped "   >

                    @foreach ($student->subjects as $subject)
                        <tr>
                            <td><a href="{{ url("subjects/$subject->id") }}"style="color:white">{{ $subject->subject_name }}</a></td>
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
