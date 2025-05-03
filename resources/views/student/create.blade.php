<x-layout>
    <div class="form-page">
        <h1 class="form-title">Create New Student</h1>

        <form class="custom-form" action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" name="name" required>
            </div>

            <div class="form-group">
                <label for="departmentID">Department:</label>
                <select name="departmentID" required>
                    <option value="">-- Select Department --</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->departmentID }}">{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="submit-btn">Create Student</button>
            <a href="{{ route('students') }}" class="cancel-btn">Cancel</a>
        </form>
    </div>
</x-layout>
