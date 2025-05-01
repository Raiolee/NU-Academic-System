<x-layout>
    <div class="index">
        <div class="table-container">
            <h1 class="heading">Courses Offered <img class="icon-index" src="{{ asset('images/courses.png') }}" alt="students"></h1>

            @if ($courses->count())
                <table class="table">
                    <thead>
                        <tr>
                            <th>Course Title</th>
                            <th>Instructor</th>
                            <th>Department</th>
                            <th>Credits</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->instructor?->name ?? 'Unknown' }}</td>
                                <td>{{ $course->department?->name ?? 'Unknown' }}</td>
                                <td>{{ $course->credit }}</td>
                                <td>
                                    <a href="{{ route('courses.show', $course->courseID) }}" class="view-btn">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="no-data">No courses available.</div>
            @endif
        </div>
    </div>
</x-layout>
