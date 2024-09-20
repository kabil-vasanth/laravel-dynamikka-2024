{{-- <x-layout-static>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Students</h1>
    <form action="/subjects/{{$subject->id}}" method="POST">
        @csrf
        @method('put')

        <label for="subject_name">SubjectName</label>

        <select id="subject_name" name="subject_name" >
            @foreach ($subjects as $k=>$v)

            <option value="{{$k}}" {{($k==$subject->id)?"selected":""}}>{{$v}}</option>

            @endforeach
    </select>







        <label for="subject_order">SubjectOrder</label>
        <input type="text" id="subject_order" name="subject_order" value="{{$subject->subject_order}}">
        <label for="color">Color</label>
        <input type="text" id="color" name="color" value="{{$subject->color}}">




      </select>

<input type='submit' value='Update'>




    </form>

</body>
</html>
</x-layout-static> --}}







<x-layout-static>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit Subject</title>


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
            <h4 class="text-center" style="color: #f5b609;">Edit Subject Information</h4>

            <div class="form-container mx-auto" style="max-width: 500px;">
                <form action="/subjects/{{$subject->id}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                    <label for="subject_name"  class="form-label">SubjectName</label>
                    <select id="subject_name" name="subject_name" class="form-select" required>
                        @foreach ($subjects as $k=>$v)

                        <option value="{{$v}}" {{($k==$subject->id)?"selected":""}}>{{$v}}</option>

                        @endforeach
                    </select>
                    </div>




                    <div class="mb-3">
                        <label for="subject_order" class="form-label">SubjectOrder</label>
                        <input type="text" id="subject_order" name="subject_order"  class="form-control" value="{{$subject->subject_order}}">

                    </div>
                    <div class="mb-3">

                        <label for="color" class="form-label">Color</label>
                        <input type="color" id="color" name="color"  class="form-control" value="{{$subject->color}}">

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

