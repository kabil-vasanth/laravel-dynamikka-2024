<x-layout-static>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Create Student</title>


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            body {
                background-color: #121212;
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
            <h4 class="text-center" style="color: #f5b609;">Create Student</h4>

            <div class="form-container mx-auto" style="max-width: 500px;">
                <form action="/students" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter first name" required>
                    </div>

                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Enter last name" required>
                    </div>

                    <div class="mb-3">
                        <label for="grade_id" class="form-label">Grade</label>
                        <select id="grade_id" name="grade_id" class="form-select" required>
                            <option value="" disabled selected>Select a grade</option>
                            @foreach ($grades as $k => $v)
                            <option value="{{$k}}">{{$v}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-warning">Add</button>
                    </div>
                </form>
            </div>
        </div>

      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>

    </x-layout-static>
