<x-layout-static>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #060606;
            color: #f5f5f5;
        }
        .form-container {
            background-color: #1e1e1e;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .form-label {
            color: #f5b609;
        }
        .btn-warning {
            background-color: #f5b609;
            border: none;
        }
        .btn-warning:hover {
            background-color: #ffca28;
        }

    </style>
</head>
<body>
    <div class="container mt-5">
        <h4 class="text-center" style="color: #f5b609;">Edit Grade Information</h4>

        <div class="form-container mx-auto" style="max-width: 500px;">
            <form action="/grades/{{$grade->id}}" method="POST">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="grade_name" class="form-label">Grade</label>
                    <select id="grade_name" name="grade_name" class="form-select" required >
                        @foreach ($grades as $k => $v)
                        <option value="{{$k}}" {{($k==$grade->id)?"selected":""}}>{{$v}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="grade_group"  class="form-label">GradeGroup</label>
                    <input type="text" id="grade_group" name="grade_group"  class="form-control" value="{{$grade->grade_group}}" >
                    </div>

                <div class="mb-3">
                    <label for="grade_order" class="form-label">GradeOrder</label>
                    <input type="text" id="grade_order" name="grade_order"  class="form-control" value="{{$grade->grade_order}}" >
                </div>

                <div class="mb-3">
                  <label for="grade_color" class="form-label">GradeColor</label>
                  <input type="color" id="grade_color" name="grade_color" class="form-control" value="{{$grade->grade_color}}" >
                </div>


                <div class="text-end">
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</x-layout-static>
