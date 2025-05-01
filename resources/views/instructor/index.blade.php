<x-layout>
    <div class="index">
        <div class="table-container">
            <h1 class="heading">Instructors <img class="icon-index" src="{{ asset('images/instructors.png') }}" alt="instructors"></h1>

            @if ($instructors->count())
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Department Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($instructors as $instructor)
                                <tr>
                                    <td>{{ $instructor->name }}</td>
                                    <td>{{ $instructor->email }}</td>
                                    <td>
                                        <a href="{{ route('instructor.show', $instructor->id) }}">View</a>
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