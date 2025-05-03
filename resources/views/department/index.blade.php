<x-layout>
    <div class="index">
        <div class="table-container">
            <h1 class="heading">Departments <img class="icon-index" src="{{ asset('images/departments.png') }}"
                    alt="departments"></h1>
            <a href="{{ route('department.create') }}" class="add-button">Add Department</a>
            @if ($departments->count())
                <div>
                    @if (session('success'))
                        <div class="alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Department Name</th>
                            <th>Office</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $department)
                            <tr>
                                <td>{{ $department->name }}</td>
                                <td>{{ $department->office }}</td>
                                <td>
                                    <a href="{{ route('department.show', $department->departmentID) }}">View</a>
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
