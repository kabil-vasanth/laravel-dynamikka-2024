{{-- <x-layout-static>
    create students

    <form action="/subjects" method="POST">
        @csrf
        <label for="subject_name">SubjectName</label>
        <input type="text" id="subject_name" name="subject_name">
        <label for="subject_order">SubjectOrder</label>
        <input type="text" id="subject_order" name="subject_order">
        <label for="color">Color</label>
        <input type="text" id="color" name="color">





      </select>




<input type="submit">

    </form>
</x-layout-static> --}}







<x-layout-static>
    <!DOCTYPE html>
       <html lang="en">
       <head>
           <meta charset="UTF-8">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <meta http-equiv="X-UA-Compatible" content="ie=edge">
           <title>Create Grade</title>


           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

           <style>
               body {
                   background-color: #121212;
                   color: #faf6f6;
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
                <form action="/subjects" method="POST">
                       @csrf

                       <div class="mb-3">

                        <label for="subject_name" class="form-label">SubjectName</label>
                        <input type="text" id="subject_name" class="form-control" name="subject_name" style="background-color: #121212" placeholder="Enter subject name">
                        </div>



                       <div class="mb-3">
                        <label for="subject_order" class="form-label">SubjectOrder</label>
                        <input type="text" id="subject_order" class="form-control" name="subject_order"  placeholder="Enter subject order" required>
                      </div>

                       <div class="mb-3">
                        <label for="c"  class="form-label">Color</label>
                        <input type="color" id="c" class="form-control" name="color" placeholder="Enter Color" required>

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

