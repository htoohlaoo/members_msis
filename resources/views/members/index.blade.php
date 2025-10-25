@extends('layout.app')

@section('content')
<section class="py-8 md:py-12 m-0">
    <div class="container px-4 lg:px-8">

        <!-- Breadcrumb -->
        <nav class="text-sm text-white/70 mb-6 md:mb-8 md:pl-8">
            <a href="#" class="hover:text-white transition-colors">Home</a>
            <span class="mx-2">›</span>
            <span class="text-white">Loren Ipsum Heading</span>
        </nav>

        <!-- Main Content -->
        <div class="flex flex-col lg:flex-row gap-6 lg:gap-8 relative">

            <!-- Left Column: Text + Info Card -->
            <div class="lg:w-2/5 relative z-20">
                <!-- Main Heading -->
                <div class="space-y-6 relative z-20">
                    <h1 class="text-3xl md:text-4xl font-bold text-white leading-tight md:mb-12 md:pl-8">
                        Loren Ipsum<br>Heading
                        <span class="inline-block ml-2 text-white/50">✦ —</span>
                    </h1>
                </div>

                <!-- Info Card: bigger than column, overlapping image -->
                <div class="md:absolute md:top-30 lg:top-50 left-0
                            bg-infoCardBg backdrop-blur-sm rounded-lg p-10 border border-white/20 shadow-2xl
                            w-[100%] lg:w-[130%] h-[400px] z-30 flex flex-col justify-center">
                    <div class="absolute top-0 right-0 w-1/3 h-[6px] bg-yellow-400 rounded-tr-2xl rounded-bl-2xl"></div>

                    <h3 class="text-2xl font-semibold text-white mb-4">Loren Ipsum</h3>
                    <p class="text-white/80 text-sm leading-relaxed mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="#" class="hidden w-3/5  md:inline-flex items-center px-4 py-2 bg-white/10 hover:bg-white/20 text-white rounded-lg transition-colors border border-white/20">
                        Loren Member List
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right Column: Image -->
            <div class="lg:w-4/5 w-full relative z-10">
                <img 
                    src="{{ asset('images/banner.png') }}"
                    alt="Loren Member List" 
                    class="rounded-xl shadow-2xl w-full object-cover"
                >
            </div>
        </div>
    </div>
</section>
@endsection
