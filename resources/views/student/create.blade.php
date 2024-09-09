<x-layout-static>
    create students

    <form action="/students" method="POST">
        @csrf
        <label for="first_name">FirstName</label>
        <input type="text" id="first_name" name="first_name">
        <label for="last_name">LastName</label>
        <input type="text" id="last_name" name="last_name">
        <label for="grade_id">GradeName</label>
      <select id="grade_id" name="grade_id">
        @foreach ($grades as $k=>$v)
        <option value={{$k}}>{{$v}}</option>
        @endforeach




      </select>




<input type="submit">

    </form>
</x-layout-static>
