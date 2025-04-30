<x-layout>
    <div class="index">
        <div class="table-container">
            <h1 class="h1-index">Courses Offered <img class="icon-index" src="{{ asset('images/courses.png') }}" alt="courses"></h1>

            @if ($courses->count())
                <div>
                    <table>
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
                                        <a href="{{ route('courses.show', $course->courseID) }}">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div>
                    No courses available.
                </div>
            @endif
        </div>
    </div>
</x-layout>
