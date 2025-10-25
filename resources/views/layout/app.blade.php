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

    <!-- Navbar -->
    <nav class="nav-gradient text-white p-4">
        <div class="container px-12 flex justify-between items-center">
            <!-- Left: Logo -->
            <a href="/" class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-auto">
            </a>

            <!-- Right: Enroll, Language, Profile -->
            <div class="hidden md:flex items-center space-x-4">
                <!-- Enroll Button -->
                <a href="/enroll" class="bg-purple-700 hover:bg-purple-800 text-white px-4 py-2 rounded-full font-semibold transition">
                    Enroll &rarr;
                </a>

                <!-- Language Selector -->
                <div class="flex border rounded-full overflow-hidden">
                    <button class="px-3 py-1 bg-purple-300 text-white font-medium">English</button>
                    <button class="px-3 py-1 bg-purple-100 text-purple-800 font-medium">မြန်မာ</button>
                </div>

                <!-- Profile/Search Icon (optional) -->
                <button class="ml-2 text-white hover:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A12.07 12.07 0 0112 15c2.497 0 4.8.76 6.879 2.053M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </button>
            </div>
            <div class="md:hidden">
                <img src="{{ asset('icons/nav_menu.svg') }}" alt="Menu" class="h-6 w-6">
            </div>
        </div>
    </nav>
    <!-- Secondary navigation below main navbar -->
    <nav class="hidden md:flex bg-navIndigo text-white px-4">
        <div class="container px-12">
            <ul class="flex space-x-6 text-sm md:text-base font-medium">
                <li>
                    <a href="#" class="relative py-3 inline-flex items-center whitespace-nowrap group">
                        <span class="relative">
                            Home
                            <span class="absolute left-0 bottom-0 w-1/2 border-b-2 border-white scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                        </span>
                    </a>
                </li>

                <li class="relative group">
                    <a href="#" class="relative py-3 inline-flex items-center whitespace-nowrap group">
                        <span class="relative">
                            Our Services
                            <span class="absolute left-0 bottom-0 w-1/2 border-b-2 border-white scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                        </span>
                        <img src="{{ asset('icons/down_arrow.svg') }}" class="ml-1 h-4 w-4 inline-block translate-y-0.5" alt="Down Arrow">
                    </a>
                    <!-- Dropdown -->
                    <ul class="absolute left-0 mt-1 hidden group-hover:block bg-indigo-600 rounded shadow-lg text-white text-sm">
                        <li><a href="#" class="block px-4 py-2 hover:bg-indigo-500">Service 1</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-indigo-500">Service 2</a></li>
                    </ul>
                </li>

                <li class="relative group">
                    <a href="#" class="relative py-3 inline-flex items-center whitespace-nowrap group">
                        <span class="relative">
                            Media & Promotions
                            <span class="absolute left-0 bottom-0 w-1/2 border-b-2 border-white scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                        </span>
                        <img src="{{ asset('icons/down_arrow.svg') }}" class="ml-1 h-4 w-4 inline-block translate-y-0.5" alt="Down Arrow">
                    </a>
                    <!-- Dropdown -->
                    <ul class="absolute left-0 mt-1 hidden group-hover:block bg-indigo-600 rounded shadow-lg text-white text-sm">
                        <li><a href="#" class="block px-4 py-2 hover:bg-indigo-500">Promo 1</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-indigo-500">Promo 2</a></li>
                    </ul>
                </li>

                <li class="relative group">
                    <a href="#" class="relative py-3 inline-flex items-center whitespace-nowrap group">
                        <span class="relative">
                            About Us
                            <!-- Half-width bottom border growing from left -->
                            <span class="absolute left-0 bottom-0 w-1/2 border-b-2 border-white scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                        </span>
                        <img src="{{ asset('icons/down_arrow.svg') }}" class="ml-1 h-4 w-4 inline-block translate-y-0.5" alt="Down Arrow">
                    </a>

                    <!-- Dropdown -->
                    <ul class="absolute left-0 mt-1 hidden group-hover:block bg-indigo-600 rounded shadow-lg text-white text-sm">
                        <li><a href="#" class="block px-4 py-2 hover:bg-indigo-500">Team</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-indigo-500">Company</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="relative py-3 inline-flex items-center whitespace-nowrap group">
                        <span class="relative">
                            FAQs
                            <span class="absolute left-0 bottom-0 w-1/2 border-b-2 border-white scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="relative py-3 inline-flex items-center whitespace-nowrap group">
                        <span class="relative">
                            Careers
                            <span class="absolute left-0 bottom-0 w-1/2 border-b-2 border-white scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Main content -->
    <main class="flex-grow container mx-auto px-4 py-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4 mt-4">
        <div class="container mx-auto">
            &copy; {{ date('Y') }} My Laravel App. All rights reserved.
        </div>
    </footer>

</body>
</html>
