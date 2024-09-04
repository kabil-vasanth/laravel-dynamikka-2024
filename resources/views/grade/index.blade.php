<x-layout-static>

    <body style="background-color: #2b2f44; color: white;">

        <div class="container mt-4">
            <h3 class="text-secondary" >Grades Full Details</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-light" style="text-decoration: none;">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/grades" class="text-light" style="text-decoration: none;">Grades</a></li>

                </ol>
            </nav>



            <div class="card mb-4 "style="background-color: #3e3e5a;">

                    <h7 style="color:rgb(155, 149, 149)">Grades({{ $grades->count() }})</h7>

                <div class="card-body">
                    <table id="datatablesSimple" class="table table-bordered table-dark table-striped" style="width: 80%; margin: 0 auto;border-radius: 15px; overflow: hidden; border: 1px solid rgb(116, 114, 114); box-shadow: 0 4px 8px 0 rgba(137, 156, 240, 0.2), 0 6px 20px 0 rgba(14, 13, 13, 0.19);">
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
                                        <a href="{{ url('grades/' . $grade->id) }}"  style="text-decoration: none; color:#a3a3d0">
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
                    <div class="  mt-3 ">
                        <a href="/students" class="btn btn-secondary" style="text-decoration: none; ">Go Students</a>
                        <a href="/subjects" class="btn btn-secondary" style="text-decoration: none;">Go Subjects</a>
                    </div>
                </div>
            </div>
            {{ $grades->links() }}


            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
        </div>
    </body>

</x-layout-static>
