<x-layout>
    <div class="form-page">
        <h1 class="form-title">Add New Department</h1>

        <form action="{{ route('departments.store') }}" method="POST" class="custom-form">
            @csrf
            <div class="form-group">
                <label for="name">Department Name</label>
                <input type="text" name="name" id="name" required>

                <label for="name">Department Office</label>
                <input type="text" name="office" id="office" required>
            </div>

            <button type="submit" class="submit-btn">Add Department</button>
            <a href="{{ route('departments') }}" class="cancel-btn">Cancel</a>
        </form>
    </div>
</x-layout>
