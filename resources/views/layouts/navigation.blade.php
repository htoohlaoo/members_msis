<div x-data="menu()" x-init="handleResize()" @resize.window="handleResize()">
    <!-- Navbar -->
    <nav class="nav-gradient text-white p-4">
        <div class="container px-4 md:px-8 lg:px-12 flex justify-between items-center">
            <!-- Left: Logo -->
            <a href="/" class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-auto">
            </a>

            <!-- Right: Enroll, Language, Profile -->
            <div class="hidden md:flex items-center space-x-4">
                

                @if(!Auth::check())
                <!-- Enroll Button -->
                <a href="/register" class="bg-purple-700 hover:bg-purple-800 text-white px-4 py-2 rounded-full font-semibold transition">
                    Enroll &gt;
                </a>
                @else
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type='submit' class="bg-purple-700 hover:bg-purple-800 text-white px-4 py-2 rounded-full font-semibold transition">
                        Log Out &crarr;
                    </button>
                </a>
                </form>
                @endif

                <!-- Language Selector -->
                <div class="flex border rounded-full overflow-hidden">
                    <button class="px-3 py-1 bg-purple-300 text-white font-medium">English</button>
                    <button class="px-3 py-1 bg-purple-100 text-purple-800 font-medium">မြန်မာ</button>
                </div>

                @if(Auth::check())
                    <a href="{{ route('profile.edit') }}" class="ml-2 text-white hover:text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5.121 17.804A12.07 12.07 0 0112 15c2.497 0 4.8.76 6.879 2.053M15 11
                                a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </a>
                @endif
            </div>
            <div  @click="open = !open" class="md:hidden">
                <img src="{{ asset('icons/nav_menu.svg') }}" alt="Menu" class="h-6 w-6">
            </div>
        </div>
    </nav>
    <!-- Secondary navigation below main navbar -->
    <nav class="bg-navIndigo text-white px-4">
        <div :class="{ 'block': open, 'hidden': !open }" class="container px-12" 
            
            x-transition:enter="transition ease-out duration-400"
            x-transition:enter-start="opacity-0 max-h-0"
            x-transition:enter-end="opacity-100 max-h-screen"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 max-h-screen"
            x-transition:leave-end="opacity-0 max-h-0"
        >
            <ul class="flex flex-col md:flex-row space-x-6 text-sm md:text-base font-medium">
                <li>
                    <a href="#" class="relative py-3 inline-flex items-center whitespace-nowrap group">
                        <span class="relative">
                            Home
                            <span class="absolute left-0 bottom-0 w-1/2 border-b-2 border-white scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                        </span>
                    </a>
                </li>

                <li class="relative group" x-data="{ open: false }">
                    <!-- Nav link (desktop hover works like others) -->
                    <a href="#" class="relative py-3 inline-flex items-center whitespace-nowrap group" @click="open = !open">
                        <span class="relative">
                            Our Services
                            <span class="absolute left-0 bottom-0 w-1/2 border-b-2 border-white scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                        </span>
                        <img src="{{ asset('icons/down_arrow.svg') }}" class="ml-1 h-4 w-4 inline-block translate-y-0.5" alt="Down Arrow">
                    </a>

                    <!-- Desktop dropdown (hover) -->
                    <ul class="absolute left-0 top-full hidden md:group-hover:block bg-indigo-600 rounded shadow-lg text-white text-sm mt-0.5"
                        x-show="open"
                        x-transition
                    >
                        <li><a href="#" class="block px-4 py-2 hover:bg-indigo-500">Service1</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-indigo-500">Service2</a></li>
                    </ul>

                    <!-- Mobile dropdown (click) -->
                    <ul
                        x-show="open"
                        @click.away="open = false"
                        class="md:hidden text-white rounded mt-1 text-sm"
                    >
                        <li><a href="#" class="block px-4 py-2 hover:bg-indigo-500">Service1</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-indigo-500">Service2</a></li>
                    </ul>
                </li>

                <li class="relative group" x-data="{ open: false }">
                    <!-- Nav link (desktop hover works like others) -->
                    <a href="#" class="relative py-3 inline-flex items-center whitespace-nowrap group" @click="open = !open">
                        <span class="relative">
                            Media & Promotions
                            <span class="absolute left-0 bottom-0 w-1/2 border-b-2 border-white scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                        </span>
                        <img src="{{ asset('icons/down_arrow.svg') }}" class="ml-1 h-4 w-4 inline-block translate-y-0.5" alt="Down Arrow">
                    </a>

                    <!-- Desktop dropdown (hover) -->
                    <ul class="absolute left-0 top-full hidden md:group-hover:block bg-indigo-600 rounded shadow-lg text-white text-sm mt-0.5"
                        x-show="open"
                        x-transition
                    >
                        <li><a href="#" class="block px-4 py-2 hover:bg-indigo-500">Promo1</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-indigo-500">Promo2</a></li>
                    </ul>

                    <!-- Mobile dropdown (click) -->
                    <ul
                        x-show="open"
                        @click.away="open = false"
                        class="md:hidden text-white rounded mt-1 text-sm"
                    >
                        <li><a href="#" class="block px-4 py-2 hover:bg-indigo-500">Promo1</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-indigo-500">Promo2</a></li>
                    </ul>
                </li>
                <li class="relative group" x-data="{ open: false }">
                    <!-- Nav link (desktop hover works like others) -->
                    <a href="#" class="relative py-3 inline-flex items-center whitespace-nowrap group" @click="open = !open">
                        <span class="relative">
                            About Us
                            <span class="absolute left-0 bottom-0 w-1/2 border-b-2 border-white scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                        </span>
                        <img src="{{ asset('icons/down_arrow.svg') }}" class="ml-1 h-4 w-4 inline-block translate-y-0.5" alt="Down Arrow">
                    </a>

                    <!-- Desktop dropdown (hover) -->
                    <ul class="absolute left-0 top-full hidden md:group-hover:block bg-indigo-600 rounded shadow-lg text-white text-sm mt-0.5"
                        x-show="open"
                        x-transition
                    >
                        <li><a href="#" class="block px-4 py-2 hover:bg-indigo-500">Team</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-indigo-500">Company</a></li>
                    </ul>

                    <!-- Mobile dropdown (click) -->
                    <ul
                        x-show="open"
                        @click.away="open = false"
                        class="md:hidden text-white rounded mt-1 text-sm"
                    >
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
    </div>