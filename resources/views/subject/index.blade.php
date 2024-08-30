<x-layout-static>
    <body style="background-color: #1A1A1A; color: #E0E0E0;">

        <div class="container mt-4">
            <h3 class="text-secondary">Subjects Details</h3>


            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-light" style="text-decoration: none;">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/subjects"  style="text-decoration: none; color:aliceblue">Subjects</a></li>
                </ol>
            </nav>
            <h6 style="color:white">    Subjects({{ $subjects->count() }})</h6>

            <div class="card mb-4 bg-dark text-light">
                <div class="card-header bg-dark text-light">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table class="table table-dark table-striped" id="datatablesSimple" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Subject Name</th>
                                <th>Subject Order</th>
                                <th>Color</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subjects as $subject)
                                <tr>
                                    <td><a href="{{ url("subjects/$subject->id") }}" class="text-light" style="text-decoration: none;">{{ $subject->subject_name }}</a></td>
                                    <td>{{ $subject->subject_order }}</td>
                                    <td>{{ $subject->color }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3">
                        <a href="/students" class="btn btn-secondary">Go Students</a>
                        <a href="/grades" class="btn btn-secondary">Go Grades</a>
                    </div>
                </div>
            </div>

            {{ $subjects->links() }}

        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
    </x-layout-static>
