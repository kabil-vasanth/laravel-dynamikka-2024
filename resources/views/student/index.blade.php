<x-layout-static>
    <body style="background-color: #2c3045;">
        <div class="container mt-4">
            <h4 style="color: #f5b609;">Students Details</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-white" style="text-decoration: none;">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="/students" class="text-light" style="text-decoration: none;">Students</a></li>
                </ol>
            </nav>

            <div class="card mb-4" style="background-color: #323235; border-radius: 15px;">
                <div class="card-body">
                    <td> <a href="{{ url("students/create") }}" class="btn btn-secondary" style="margin-left: 1000px"><i class="bi bi-bag-plus-fill"></i></a></td>
                    <h6 style="color:rgb(148, 149, 152)">Students {{ $students->count() }}</h6>
                    <table id="datatablesSimple" class="table table-dark table-striped" style="border-radius: 15px; overflow: hidden; border: 1px solid rgb(116, 114, 114); box-shadow: 0 4px 8px 0 rgba(137, 156, 240, 0.2), 0 6px 20px 0 rgba(14, 13, 13, 0.19);">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Grade Name</th>
                                <th>show</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td>
                                    <a href="{{ url('students/'.$student->id) }}" style="text-decoration: none; color:#f7f5ef">{{ $student->first_name }}</a>
                                </td>
                                <td>{{ $student->last_name }}</td>
                                <td>
                                     <a href="{{ url('grades/'.$student->grade_id) }}" style="text-decoration: none;color:#f0f0f5">{{ $student->grade->grade_name }}</a>
                                </td>
                                <td> <a href="{{ url('students/'.$student->id) }}" class="btn btn-warning"><i class="fa-solid fa-eye"></i></a></td>
                                <td> <a href="{{ url("students/$student->id/edit") }}" class="btn btn-warning"><i class="bi bi-pen-fill"></i></a></td>

                                <td>
                                    <form action="/students/{{$student->id}}" method="post" >
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $students->links() }}
                    <div class="mt-3">
                        <a href="/grades" class="btn btn-secondary">Go Grades</a>
                        <a href="/subjects" class="btn btn-secondary">Go Subjects</a>
                    </div>

                </div>
            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>
</x-layout-static>
