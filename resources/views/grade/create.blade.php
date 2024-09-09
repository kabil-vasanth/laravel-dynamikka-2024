<x-layout-static>
    create grades

    <form action="/grades" method="POST">
        @csrf
        <label for="grade_name">GradeName</label>
        <input type="text" id="grade_name" name="grade_name">
        <label for="grade_group">GradeGroup</label>
        <input type="text" id="grade_group" name="grade_group">
        <label for="grade_order">GradeOrder</label>
        <input type="text" id="grade_order" name="grade_order">
        <label for="grade_color">GradeColor</label>
        <input type="text" id="grade_color" name="grade_color">








<input type="submit">

    </form>
</x-layout-static>
