<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic System</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:wght@400&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
</head>

<body>
    {{-- Navbar --}}
    <div class="navbar-container">
        <div class="navbar-top-bar"></div>
        <div class="navbar-main">
            <a class="navbar-brand" href="{{route('home')}}"><div>Academic System</div></a>
            <nav class="navbar-links">
                <a href="{{route('courses')}}" class="nav-link">Courses</a>
                <a href="{{route('instructors')}}" class="nav-link">Instructors</a>
                <a href="{{route('departments')}}" class="nav-link">Departments</a>
                <a href="{{route('students')}}" class="nav-link">Students</a>
            </nav>
        </div>
    </div>

    {{-- Main Content --}}
    {{ $slot }}

    {{-- Footer --}}
    <footer class="custom-footer">
        <p class="footer-text">Developed by Noe Railey Vierneza</p>
    </footer>
</body>

</html>
