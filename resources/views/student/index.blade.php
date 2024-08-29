<x-layout-static>

    <body style="background: rgb(26, 25, 25)">
         <h5 style="color: rgb(243, 228, 221)">Students Details</h5>

         <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" style="width: 100%; height:50%;" >
            <div class="carousel-inner" >
              <div class="carousel-item active">


                <img src="{{ Vite::asset('resources/images/2.avif') }}" style="width: 100%; height:50%;"  alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ Vite::asset('resources/images/3.avif') }}" style="width: 100%; height:10%;" alt="...">
              </div>
     
              <div class="carousel-item">
                <img src="{{ Vite::asset('resources/images/portrait-satisfied-africanamerican-female-student-smiling-pleased-showing-okay-sign-like-some_1258-179391.avif') }}" style="width: 100%; height:10%;" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        <div class="card mb-4" style="background: rgb(8, 8, 8)">

            <div class="card-body">

                {{-- {{$students->total()}} --}}
                <table border="1" id="datatablesSimple" style="color: rgb(245, 245, 239)">
                  <thead>  <tr>
                        <th>firstname</th>
                        <th>lastname</th>
                        <th>gradename</th>

                    </tr></thead>
                    @foreach ($students as $student)
                        <tr>
                            <td><a href="{{ url("students/$student->id") }}" style="color: rgb(244, 83, 3)">{{ $student->first_name }}</a></td>
                            <td>{{ $student->last_name }}</td>

                            <td><a href="{{ url("grades/$student->grade_id") }}"
                                    style="color: rgb(244, 83, 3)">{{ $student->grade->grade_name }}</td>




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
