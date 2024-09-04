<x-layout-static >
    <div class="container mt-4" >
        <h3 class="text-secondary">
            <i class="fas fa-child fa-2x" style="color: rgb(159, 156, 156); margin-right: 10px;"></i>
            {{ $student->first_name }} {{ $student->last_name }}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="text-dark" style="text-decoration: none;">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/students" class="text-dark" style="text-decoration: none;">Students</a></li>
                <li class="breadcrumb-item"><a href="{{ url("students/$student->id") }}" class="text-dark" style="text-decoration: none;">Student Grade & Subject Details</a></li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="card-header text-center bg-dark text-light">
                        <h5>Student Details</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5 ">
                                <img src="{{ Vite::asset('resources/images/download1.png') }}" alt="Student Photo" class="img-fluid rounded" style=" margin-right:40px">

                            </div>
                            <div class="col-md-7">
                                <table class="table table-bordered table-striped">
                                    <thead class="table-success">
                                        <tr>
                                            <th>First Name</th>
                                            <td>{{ $student->first_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Last Name</th>
                                            <td>{{ $student->last_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Grade Name</th>
                                            <td>
                                                <a href="{{ url('grades/' . $student->grade_id) }}" class="text-black" style="text-decoration: none;">
                                                    {{ $student->grade->grade_name }}
                                                </a>
                                            </td>
                                        </tr>
                                    </thead>
                                </table>
                                {{-- <a href="/students" class="btn btn-dark" style=" margin-left:175px">Go Students</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="card-header text-center bg-dark text-light">
                        <h5 style="color: #f3ecec;"> Student Subject Details ({{ $student->subjects->count() }})</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">

                            <tbody>
                                @foreach ($student->subjects as $subject)
                                <tr>
                                    <td><i class="fa-solid fa-book-open" style="color: rgb(11, 117, 131)"></i></td>
                                    <td>
                                        <a href="{{ url('subjects/' . $subject->id) }}" class="text-black" style="text-decoration: none;">
                                            {{ $subject->subject_name }}
                                        </a>
                                    </td>


                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- <a href="/students" class="btn btn-dark" style="margin-left:395px">Go Students</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</x-layout-static>
