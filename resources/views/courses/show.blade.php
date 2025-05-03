<x-layout>
    <div class="show-page">
        <div class="card-show">
            <h2 class="card-title">{{ $course->title }}</h2>

            <p><strong>Instructor:</strong> {{ $course->instructor?->name ?? 'Unknown' }}</p>
            <p><strong>Department:</strong> {{ $course->department?->name ?? 'Unknown' }}</p>
            <p><strong>Credits:</strong> {{ $course->credit }}</p>

            <a href="{{ route('courses') }}" class="back-button">← Back to Courses</a>
        </div>
    </div>
</x-layout>



