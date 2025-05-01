<x-layout>
    <div class="index">
        <div class="table-container">
            <h1 class="heading">Students <img class="icon-index" src="{{ asset('images/student.png') }}" alt="students"></h1>

            @if ($students->count())
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
                                    <td>{{ $student->department }}</td>
                                    <td>
                                        <a href="{{ route('students.show', $student->id) }}">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="no-data">
                    No departments available.
                </div>
            @endif
        </div>
    </div>
</x-layout>