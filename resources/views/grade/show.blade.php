<x-layout-static>
    <body style="background-color: #f8f9fa; color: #212529;">

        <div class="container mt-4">
            <h3 class="font-italic text-dark mb-4"><i class="fas fa-child fa-2x" style="color: rgb(159, 156, 156); margin-right: 10px;"></i>{{ $grade->grade_name }} Grades Details</h3>


            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-dark" style="text-decoration: none;">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/grades" class="text-dark" style="text-decoration: none;">Grades</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url("grades/$grade->id") }}" class="text-dark" style="text-decoration: none;">Grade Student & Subject Details</a></li>
                </ol>
            </nav>


            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header" style="background-color: #000; color: #fff;">
                            <h5 class="card-title mb-0">Grade Students Details({{ $students->count() }})</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td><a href="{{ url("students/$student->id") }}" class="text-dark" style="text-decoration: none;">{{ $student->first_name }}</a></td>
                                            <td>{{ $student->last_name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="/grades" class="btn btn-dark">Go Grades</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header" style="background-color: #000; color: #fff;">
                            <h5 class="card-title mb-0">Grade Subjects Details({{ $grade->subjects->count() }})</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Subject Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($grade->subjects as $subject)
                                        <tr>
                                            <td><a href="{{ url("subjects/$subject->id") }}" class="text-dark" style="text-decoration: none;">{{ $subject->subject_name }}</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="/grades" class="btn btn-dark">Go Grades</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>
    </x-layout-static>
