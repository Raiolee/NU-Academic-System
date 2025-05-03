<x-layout>
    <div class="show-page">
        <div class="card-show">
            <h2 class="card-title">{{ $department->name }}</h2>
            <p><strong>Office:</strong> {{ $department->office ?? 'Not specified' }}</p>

            <a href="{{ route('departments') }}" class="back-button">← Back to Departments</a>
        </div>
    </div>
</x-layout>
