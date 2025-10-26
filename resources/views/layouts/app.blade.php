<!-- resources/views/layout/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen bg-gray-100">
    @include('layouts.navigation')
    <!-- Main content -->
    <main class="flex-grow w-full">
        {{$slot}}
    </main>

    @include('layouts.footer')
</body>
</html>
