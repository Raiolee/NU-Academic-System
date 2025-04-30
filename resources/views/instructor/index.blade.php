<x-layout>
    <div class="index">
        <div class="table-container">
            <h1 class="h1-index">Instructors <img class="icon-index" src="{{ asset('images/instructors.png') }}" alt="instructors"></h1>

            @if ($instructors->count())
                <div>
                    <table>
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
                <div>
                    No departments available.
                </div>
            @endif
        </div>
    </div>
</x-layout>