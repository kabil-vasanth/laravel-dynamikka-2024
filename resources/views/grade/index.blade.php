<x-layout-static>

    <body style="background-color: black; color: white;">

        <div class="container mt-4">
            <h3 class="text-secondary" >Grades Full Details</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-light" style="text-decoration: none;">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/grades" class="text-light" style="text-decoration: none;">Grades</a></li>

                </ol>
            </nav>
            <h6 style="color:white">  Grades({{ $grades->count() }})</h6>


            <div class="card mb-4 bg-dark">
                <div class="card-header text-light">
                    <i class="fas fa-table me-1"></i> DataTable Example
                </div>
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-bordered table-dark table-striped" style="width: 80%; margin: 0 auto;">
                        <thead class="thead-light">
                            <tr>
                                <th>Grade Name</th>
                                <th>Grade Order</th>
                                <th>Grade Color</th>
                                <th>Grade Group</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($grades as $grade)
                                <tr>
                                    <td>
                                        <a href="{{ url('grades/' . $grade->id) }}" class="text-white" style="text-decoration: none;">
                                            {{ $grade->grade_name }}
                                        </a>
                                    </td>
                                    <td>{{ $grade->grade_order }}</td>
                                    <td>{{ $grade->grade_color }}</td>
                                    <td>{{ $grade->grade_group }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center mt-3">
                        <a href="/students" class="btn btn-light me-2" style="text-decoration: none;">Go Students</a>
                        <a href="/subjects" class="btn btn-light" style="text-decoration: none;">Go Subjects</a>
                    </div>
                </div>
            </div>
            {{ $grades->links() }}


            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
        </div>
    </body>

</x-layout-static>
