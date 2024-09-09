<x-layout-static>
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
</x-layout-static>
