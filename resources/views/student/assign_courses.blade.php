<x-layout>
    <div class="form-page">
        <h1 class="form-title">Assign Courses to {{ $student->name }}</h1>

        <form class="custom-form" action="{{ route('students.assignCourses', $student->studentID) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="courses">Select Courses:</label>
                <select name="courses[]" multiple required>
                    @foreach ($courses as $course)
                        <option value="{{ $course->courseID }}"
                            {{ $student->courses->contains('courseID', $course->courseID) ? 'selected' : '' }}>
                            {{ $course->title }}
                        </option>
                    @endforeach
                </select>
            </div>


            <button type="submit" class="submit-btn">Assign Courses</button>
        </form>

        <a href="{{ route('student.show', $student->studentID) }}" class="back-button">Back</a>
    </div>
</x-layout>
