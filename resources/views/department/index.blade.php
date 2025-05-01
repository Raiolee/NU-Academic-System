<x-layout>
    <div class="index">
        <div class="table-container">
            <h1 class="heading">Departments <img class="icon-index" src="{{ asset('images/departments.png') }}" alt="departments"></h1>

            @if ($departments->count())
                <div>
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
                                        <a href="{{ route('departments.show', $department->id) }}">View</a>
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