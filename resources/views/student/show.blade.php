<x-layout>
    <div class="show-page">
        <div class="card-show">
            <h1 class="card-title">Student Details</h1>

            <p><strong>Full Name:</strong> {{ $student->name }}</p>
            <p><strong>Department:</strong> {{ $student->department->name ?? 'Unknown' }}</p>

            <a href="{{ route('students') }}" class="cancel-btn">Back to Students</a>
            <a href="{{ route('students.assignCourses', $student->studentID) }}" class="assign-button">Assign Courses</a>

            <h1 class="card-title">Assigned Courses</h1>
            @if ($student->courses->count())
                <table class="table">
                    <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($student->courses as $course)
                            <tr>
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->credit }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No courses assigned.</p>
            @endif
        </div>
    </div>
</x-layout>
