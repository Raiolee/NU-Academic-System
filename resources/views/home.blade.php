<x-layout>
    <!-- Main Content -->
    <section class="info-grid container">
        <a class="card" href="{{ route('courses') }}">
            <div class="info-card">
                <div class="icon"> <img src="{{ asset('images/courses.png') }}" alt="courses"></div>
                <h2>Courses</h2>
                <p>Structured learning modules that cover specific topics or skills offered by the institution.</p>
            </div>
        </a>
        <a class="card" href="{{ route('instructors') }}">
        <div class="info-card">
            <div class="icon"> <img src="{{ asset('images/instructors.png') }}" alt="instructors"></div>
            <h2>Instructors</h2>
            <p>Individuals responsible for teaching, guiding, and assessing students throughout a course.</p>
        </div>
        </a>
        <a class="card" href="{{ route('departments') }}">
        <div class="info-card">
            <div class="icon"><img src="{{ asset('images/departments.png') }}" alt="departments"></div>
            <h2>Departments</h2>
            <p>Academic or administrative divisions that manage related courses and faculty within a specific field.</p>
        </div>
        </a>
        <a class="card" href="{{ route('students') }}">
        <div class="info-card">
            <div class="icon"><img src="{{ asset('images/student.png') }}" alt="students"></div>
            <h2>Students</h2>
            <p>Learners enrolled in courses to acquire knowledge, develop skills, and achieve academic goals.</p>
        </div>
        </a>
    </section>

</x-layout>
