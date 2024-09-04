<x-layout-static>
    <body style="background-color: #ffffff; color: #000000;">

        <div class="container mt-4">

            <h4 style="color:rgb(129, 129, 129)"> <i class="fa-solid fa-book"> </i>  {{$subject->subject_name}}  Subject Details</h4>


            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" style="color: #000000; text-decoration: none;">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/subjects" style="color: #000000; text-decoration: none;">Subjects</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ url("subjects/$subject->id") }}" style="color: #000000; text-decoration: none;">Subject Student & Grade Details</a>
                    </li>
                </ol>
            </nav>

            <div class="row">

                <div class="col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-header" style="background-color: #4c4a4a; color: #ffffff;">
                            <h5>Subject Grades Details({{ $subject->grades->count() }})</h5>
                        </div>
                        <div class="card-body">
                            <table border="1" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Grade Name</th>
                                        <th>Grade Order</th>
                                        <th>Grade Color</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subject->grades as $grade)
                                        <tr>
                                            <td><a href="{{ url("grades/$grade->id") }}" style="color: #000000; text-decoration: none;">{{ $grade->grade_name }}</a></td>
                                            <td>{{ $grade->grade_order }}</td>
                                            <td>{{ $grade->grade_color }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="/subjects" class="btn btn-dark">Go Subjects</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-header" style="background-color: #4c4a4a; color: #ffffff;">
                            <h5>Subject Students Details({{ $subject->students->count() }})</h5>
                        </div>
                        <div class="card-body">
                            <table border="1" class="table table-striped table-bordered">
                                <thead>
                                    <tr><th>Image</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subject->students as $student)
                                        <tr> <td> <img src="{{ Vite::asset('resources/images/download1.png') }}" alt="Student Photo" class="img-fluid rounded" style="width:60px"></td>
                                            <td><a href="{{ url("students/$student->id") }}" style="color: #000000; text-decoration: none;">{{ $student->first_name }}</a></td>
                                            <td>{{ $student->last_name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="/subjects" class="btn btn-dark">Go Subjects</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
    </x-layout-static>
