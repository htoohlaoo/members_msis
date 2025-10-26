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
                <!-- Enroll Button -->
                <a href="/login" class="bg-purple-700 hover:bg-purple-800 text-white px-4 py-2 rounded-full font-semibold transition">
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
                    <ul class="absolute left-0 mt-1 hidden group-hover:block bg-indigo-600 rounded shadow-lg text-white text-sm">
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
                    <ul class="absolute left-0 mt-1 hidden group-hover:block bg-indigo-600 rounded shadow-lg text-white text-sm">
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
                    <ul class="absolute left-0 mt-1 hidden group-hover:block bg-indigo-600 rounded shadow-lg text-white text-sm">
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
    <!-- Main content -->
    <main class="flex-grow w-full">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-indigo-900 text-white mt-4">
    <div class="container mx-auto px-6 py-12">
        
        <div class="lg:grid lg:grid-cols-12 lg:gap-x-10 lg:gap-y-12">

            <div class="flex justify-center lg:justify-start items-center space-x-3 lg:col-span-4">
                <span class="text-3xl font-bold">ပေးချေလွယ်ကူ</span>
                <span class="text-3xl font-bold">
                    <image src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-auto inline-block">
                </span> 
            </div>

            <div class="lg:col-span-4 lg:row-start-2">
                <p class="hidden lg:block text-indigo-200 text-sm leading-relaxed mb-6">
                    Loren ipsum offers convenience in payments and can be used at any Loren outlet both and over 160 countries globally.
                </p>

                <div class="flex space-x-4 justify-center lg:justify-start my-8 lg:my-0">
                    <a href="#" class="">
                        <image src="{{ asset('icons/phone.png') }}" alt="Phone" class="w-15 h-15">
                    </a>
                    <a href="#" class="">
                        <image src="{{ asset('icons/facebook.png') }}" alt="Facebook" class="w-15 h-15">
                    </a>
                    <a href="#" class="">
                        <image src="{{ asset('icons/linkedin.png') }}" alt="Facebook" class="w-15 h-15">
                    </a>
                    <a href="#" class="">
                        <image src="{{ asset('icons/youtube.png') }}" alt="Facebook" class="w-15 h-15">
                    </a>
                    <a href="#" class="">
                        <image src="{{ asset('icons/telegram.png') }}" alt="Facebook" class="w-15 h-15">
                    </a>
                </div>

                <div class="hidden lg:block mt-10 text-sm text-indigo-300">
                    <p class="mb-2">@2025 All Right Reserve. Loren Ipsum</p>
                    <ul class="space-y-1">
                        <li><a href="#" class="hover:text-white transition-colors">• Terms Of Use</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">• Privacy Policy</a></li>
                    </ul>
                </div>
            </div>

            <form class="flex flex-col w-full justify-end lg:flex-row lg:col-span-8 lg:col-start-5 lg:row-start-1 space-y-2 lg:space-y-0 lg:space-x-4">
  
                <label for="email-subscribe" class="sr-only">Enter Your Email</label>

                <input 
                    type="email"
                    id="email-subscribe"
                    placeholder="Enter Your Email"
                    class="w-full lg:w-2/5 px-4 py-3 text-white placeholder-gray-300
                        backdrop-blur-md bg-transparent
                        border border-white/20
                        rounded-xl
                        focus:ring-2 focus:ring-footerVioletDark focus:border-footerVioletDark
                        transition-all"
                />

                <button
                    type="submit"
                    class="px-6 py-3 text-white font-medium
                        rounded-xl
                        bg-white/5 hover:bg-footerVioletDark
                        border border-white/5
                        backdrop-blur-md
                        transition-all flex items-center justify-center space-x-2"
                >
                    <span>Subscribe</span>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" 
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="w-5 h-5">
                     <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                    </svg>
                </button>
            </form>



            <div class="lg:col-span-5 lg:col-start-8 lg:row-start-2">
                <h3 class="text-lg font-semibold mb-4 mt-10 lg:mt-0 text-center lg:text-left">Contact Us</h3>
                <div class="space-y-5 text-sm">
                    <div class="flex flex-col items-center lg:flex-row lg:items-start space-y-3 lg:space-y-0 lg:space-x-3">
                        <div class="bg-indigo-800 p-2 rounded-full flex-shrink-0">
                            <img src="{{ asset('icons/hotline.png') }}" alt="Hotline" class="w-10 h-10">
                        </div>
                        <div class="text-center lg:text-left">
                            <h4 class="font-semibold">Hot Line</h4>
                            <ul class="list-none">
                                <li class="text-indigo-200">&#9679; Customer Service - 09 123456789</li>
                                <li class="text-indigo-200">&#9679; Merchant Service - 09 123456789</li>
                                <li class="text-indigo-200">&#9679;	(95) 01 - 123456</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-col items-center lg:flex-row lg:items-start space-y-3 lg:space-y-0 lg:space-x-3">
                        <div class="bg-indigo-800 p-2 rounded-full flex-shrink-0">
                            <img src="{{ asset('icons/address.png') }}" alt="Address" class="w-10 h-10">
                        </div>
                        <div class="text-center lg:text-left">
                            <h4 class="font-semibold">Address</h4>
                            <ul class="list-none">
                                <li class="text-indigo-200">&#9679;	26 [A] Loren Road, Ipsum Township Dollar, Myanmar.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-col items-center lg:flex-row lg:items-start space-y-3 lg:space-y-0 lg:space-x-3">
                        <div class="bg-indigo-800 p-2 rounded-full flex-shrink-0">
                            <img src="{{ asset('icons/email.png') }}" alt="Email" class="w-10 h-10">
                        </div>
                        <div class="text-center lg:text-left">
                            <h4 class="font-semibold">Contact Email</h4>
                            <ul class="list-none">
                                <li class="text-indigo-200">&#9679; lorenmarketing@abc.com.mm</li>
                                <li class="text-indigo-200">&#9679; ipsumadmin@abc.com.mm</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-3 lg:col-start-5 lg:row-start-2">
                <h3 class="text-lg font-semibold mb-4 mt-10 lg:mt-0 text-center lg:text-left">Quick Link</h3>
                <ul class="space-y-2 text-sm w-fit mx-auto lg:mx-0 text-center lg:text-left">
                    <li><a href="#" class="text-indigo-200 hover:text-white transition-colors">⟡ Lorem ipsum</a></li>
                    <li><a href="#" class="text-indigo-200 hover:text-white transition-colors">⟡ Dolor sit amet</a></li>
                    <li><a href="#" class="text-indigo-200 hover:text-white transition-colors">⟡ Onsectetur adipis</a></li>
                    <li><a href="#" class="text-indigo-200 hover:text-white transition-colors">⟡ Sed do eiusmo</a></li>
                    <li><a href="#" class="text-indigo-200 hover:text-white transition-colors">⟡ Dolore magna aliqu</a></li>
                    <li><a href="#" class="text-indigo-200 hover:text-white transition-colors">⟡ Econsectetua</a></li>
                    <li><a href="#" class="text-indigo-200 hover:text-white transition-colors">⟡ Trim ad min</a></li>
                    <li><a href="#" class="text-indigo-200 hover:text-white transition-colors">⟡ Vxercitation ullamc</a></li>
                    <li><a href="#" class="text-indigo-200 hover:text-white transition-colors">⟡ Sore et dolore</a></li>
                </ul>
            </div>
            
            <div class="mt-10 text-sm text-indigo-300 text-center lg:hidden">
                <p class="mb-2">@2025 All Right Reserve. Loren Ipsum</p>
                <ul class="space-y-1">
                    <li><a href="#" class="hover:text-white transition-colors">• Terms Of Use</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">• Privacy Policy</a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>

</body>
</html>
