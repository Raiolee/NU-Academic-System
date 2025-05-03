<x-layout>
    <div class="show-page">
        <div class="card-show">
            <h2 class="card-title">{{ $instructor->name }}</h2>
            <p><strong>Email:</strong> {{ $instructor->email ?? 'Not specified' }}</p>

            <a href="{{ route('instructors') }}" class="back-button">← Back to Instructors</a>
        </div>
    </div>
</x-layout>
