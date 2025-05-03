<x-layout>
    <div class="index">
        <div class="table-container">
            <h1 class="heading">Students <img class="icon-index" src="{{ asset('images/student.png') }}" alt="students">
            </h1>

            <a href="{{ route('student.create') }}" class="add-button">Add Student</a>

            @if ($students->count())
                <div>
                    @if (session('success'))
                        <div class="alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Department</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->department->name }}</td>
                                    <td>
                                        <a href="{{ route('student.show', $student->studentID) }}">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="no-data">
                    No students available.
                </div>
            @endif
        </div>
    </div>
</x-layout>