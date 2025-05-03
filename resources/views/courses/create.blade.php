<x-layout>
    <div class="form-page">
        <h1 class="form-title">Add New Course</h1>

        <form action="{{ route('courses.store') }}" method="POST" class="custom-form">
            @csrf

            <div class="form-group">
                <label for="title">Course Title</label>
                <input type="text" name="title" id="title" required>
            </div>

            <div class="form-group">
                <label for="instructorID">Instructor</label>
                <select name="instructorID" id="instructorID" required>
                    <option disabled selected>Select an instructor</option>
                    @foreach ($instructors as $instructor)
                        <option value="{{ $instructor->instructorID }}">{{ $instructor->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="departmentID">Department</label>
                <select name="departmentID" id="departmentID" required>
                    <option disabled selected>Select a department</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->departmentID }}">{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="credit">Credits</label>
                <input type="number" name="credit" id="credit" min="1" max="6" required>
            </div>

            <button type="submit" class="submit-btn">Add Course</button>
            <a href="{{ route('courses') }}" class="cancel-btn">Cancel</a>
        </form>
    </div>
</x-layout>
