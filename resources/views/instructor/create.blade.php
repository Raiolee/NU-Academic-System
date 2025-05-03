<x-layout>
    <div class="form-page">
        <h1 class="form-title">Add New Instructor</h1>

        <form action="{{ route('instructors.store') }}" method="POST" class="custom-form">
            @csrf

            <div class="form-group">
                <label for="name">Instructor Name</label>
                <input type="text" name="name" id="name" required>

                <label for="name">Instructor Email</label>
                <input type="email" name="email" id="email" required>
            </div>

            <button type="submit" class="submit-btn">Add Instructor</button>
            <a href="{{ route('instructors') }}" class="cancel-btn">Cancel</a>
        </form>
    </div>
</x-layout>
