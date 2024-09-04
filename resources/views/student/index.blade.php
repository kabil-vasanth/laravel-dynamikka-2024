<x-layout-static>
    <body style="background-color: #2c3045;">
        <div class="container mt-4">
            <h4 style="color: #9e9ea2;">Students Details</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-white" style="text-decoration: none;">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="/students" class="text-light" style="text-decoration: none;">Students</a></li>
                </ol>
            </nav>
{{--
            <div id="carouselExampleFade" class="carousel slide carousel-fade mb-4" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ Vite::asset('resources/images/2.avif') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ Vite::asset('resources/images/3.avif') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ Vite::asset('resources/images/portrait-satisfied-africanamerican-female-student-smiling-pleased-showing-okay-sign-like-some_1258-179391.avif') }}" class="d-block w-100" alt="...">
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
            </div> --}}

            <div class="card mb-4" style="background-color: #3e3e5a;">
                <div class="card-body">
                  <h6 style="color:rgb(148, 149, 152)">  Students {{ $students->count() }}</h6>
                    <table id="datatablesSimple" class="table table-dark table-striped" style="border-radius:20px">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Grade Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td>
                                    <a href="{{ url('students/'.$student->id) }}"  style="text-decoration: none; color:#a3a3d0">{{ $student->first_name }}</a>
                                </td>
                                <td>{{ $student->last_name }}</td>
                                <td>
                                    <a href="{{ url('grades/'.$student->grade_id) }}" style="text-decoration: none;color:#b1b1f6">{{ $student->grade->grade_name }}</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3">
                        <a href="/grades" class="btn btn-secondary">Go Grades</a>
                        <a href="/subjects" class="btn btn-secondary">Go Subjects</a>
                    </div>
                </div>
            </div>
            {{ $students->links() }}
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>
</x-layout-static>
