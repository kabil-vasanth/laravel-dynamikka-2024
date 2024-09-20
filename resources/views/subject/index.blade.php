<x-layout-static>
    <body style="background-color:#2c3045; color: #E0E0E0;">

        <div class="container mt-4">
            <h3 class="text-warning">Subjects Details</h3>


            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-light" style="text-decoration: none;">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/subjects"  style="text-decoration: none; color:aliceblue">Subjects</a></li>
                </ol>
            </nav>


            <div class="card mb-4  text-light "style="background-color: #323235;">

                   <h6 style="color:rgb(163, 161, 161)"> Subjects({{ $subjects->count() }})</h6>

                <div class="card-body">
                    <td> <a href="{{ url("subjects/create") }}" class="btn btn-secondary" style="margin-left: 1000px"><i class="bi bi-bag-plus-fill"></i></a></td>
                    <table class="table table-dark table-striped" id="datatablesSimple" style="width: 100%;border-radius: 15px; overflow: hidden; border: 1px solid rgb(116, 114, 114); box-shadow: 0 4px 8px 0 rgba(137, 156, 240, 0.2), 0 6px 20px 0 rgba(14, 13, 13, 0.19);">
                        <thead>
                            <tr>
                                <th>Subject Name</th>
                                <th>Subject Order</th>
                                <th>Subject color</th>
                                <th>Show</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subjects as $subject)
                                <tr>
                                    <td><a href="{{ url("subjects/$subject->id") }}"  style="text-decoration: none;color:#a3a3d0">{{ $subject->subject_name }}</a></td>
                                    <td>{{ $subject->subject_order }}</td>
                                    <td>{{ $subject->color }}</td>
                                    <td> <a href="{{ url("subjects/$subject->id") }}" class="btn btn-warning"><i class="fa-solid fa-eye"></i></a></td>
                                    <td> <a href="{{ url("subjects/$subject->id/edit") }}" class="btn btn-warning"><i class="bi bi-pen-fill"></i</a></td>
                                    <td>
                                        <form action="/subjects/{{$subject->id}}" method="post">
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
