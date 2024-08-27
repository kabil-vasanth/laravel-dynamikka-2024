<x-layout-static>

    <h1 style="font-style:italic">Grades Details</h1>
    {{-- {{$students->total()}} --}}
    <table border="1" class="table table-success table-striped " style="width:80%; margin-left:100px" >
        <tr>

        <th>gradename</th>
        <th>gradeorder</th>
        <th>gradecolor</th>
        <th>gradegroup</th>
        </tr>
    @foreach ($grades as $grade)
    <tr>


        <td ><a href="{{url("grades/$grade->id")}}" >{{$grade->grade_name}}</a></td>
        <td>{{$grade->grade_order}}</td>
        <td>{{$grade->grade_color}}</td>
        <td>{{$grade->grade_group}}</td>




     </tr>



        @endforeach

 </table>
{{$grades->links()}}

{{-- {{$students->links()}} --}}
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</x-layout-static>
