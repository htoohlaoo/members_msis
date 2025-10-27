<x-app-layout>
<section class="gradient-section lg:py-12 m-0">
    <div class="lg:px-8">

        <!-- Breadcrumb -->
        <nav class="hidden lg:flex text-sm text-white/70 mb-6 md:mb-8 md:pl-8">
            <a href="#" class="hover:text-white transition-colors">Home</a>
            <span class="mx-2">›</span>
            <span class="text-white">Loren Ipsum Heading</span>
        </nav>

        <!-- Main Content -->
        <div class="flex flex-col lg:flex-row lg:gap-8 relative">

            <!-- Left Column: Text + Info Card -->
            <div class="p-4 md-p-0 lg:w-2/5 relative z-20 overflow-hidden md:overflow-visible order-2 lg:order-none">
                <!-- Main Heading -->
                <div class="hidden lg:flex space-y-6 relative z-20">
                    <h1 class="text-3xl md:text-4xl font-bold text-white leading-tight md:mb-12 md:pl-8">
                        Loren Ipsum<br>Heading
                        <image src="{{ asset('icons/diamond_stick.png') }}" alt="Indicator" class="inline-block ml-2 w-20 h-5">
                    </h1>
                </div>

                <!-- Info Card: Fixed for all screen sizes -->
                <div class="relative lg:absolute lg:top-40 lg:left-0
                            bg-infoCardBg backdrop-blur-sm rounded-lg p-6 md:p-10 border border-white/20 shadow-2xl
                            w-full min-h-[300px] lg:w-[130%] h-auto md:h-[500px] z-30 flex flex-col items-center lg:items-start lg:justify-center 
                            ">
                    <div class="absolute top-0 right-0 w-1/3 h-[6px] bg-yellow-400 rounded-tr-2xl rounded-bl-2xl"></div>

                    <h3 class="text-2xl font-semibold text-white mb-4">Loren Ipsum</h3>
                    <p class="text-white/80 text-sm leading-relaxed mb-6">
                        MPU Cards can use at merchants (shops) with MPU Logo branding and can also make card payments with international cards like JCB/UPI. When paying with MPU Cards, you can pay in Myanmar Kyats, and if you use JCB, UPI co-brand cards, you can pay in USD (or) Myanmar Kyats according to the card holder`s choice.For those using MPU card at the POS, a minimum of one thousand kyat to a maximum of fifty thousand kyats can be used per day. Merchants who want to install a POS machine to accept card payments in their shops/businesses which can obtain Membership Forms through member banks that have POS service and can easily communicate according to the procedures of the respective banks. Those Merchants are required to open a Settlement Account in any of the relevant member banks to accept payments. Also, to have a good Wi-Fi or internet connections to use the POS devices. Later, POS devices that can be used with SIM cards are also available.
                    </p>
                    <a href="#" class="hidden w-3/5 lg:inline-flex items-center px-4 py-2 bg-white/10 hover:bg-white/20 text-white rounded-lg transition-colors border border-white/20">
                        Loren Member List
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right Column: Image -->
            <div class="lg:w-4/5 w-full relative z-10 lg:mt-8 md:mt-0 lg:ml-8 order-1 lg:order-none">
                <img 
                    src="{{ asset('images/banner.png') }}"
                    alt="Loren Member List" 
                    class="lg:rounded-xl shadow-2xl w-full object-cover"
                >

                <!-- Centered Text Overlay -->
                <div class="lg:hidden absolute inset-0 flex items-center justify-center">
                    <span class="text-white text-2xl md:text-4xl font-bold drop-shadow-lg">
                        Lorem Ipsum Heading
                    </span>
                </div>
            </div>
        </div>
        <div class="w-full text-center mt-[150px] overflow-hidden">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-[40px] md:mb-[80px]">Lorem Members</h2>
            <div class="images-container flex flex-row animate-to-left justify-center mt-4 overflow">
                <img src="{{ asset('images/aya.png') }}" alt="Image1" class="w-1/3 lg:w-1/6 h-30 mx-2">
                <img src="{{ asset('images/mtb.png') }}" alt="Image2" class="w-1/3 lg:w-1/6 h-30 mx-2">
                <img src="{{ asset('images/scb.png') }}" alt="Image3" class="w-1/3 lg:w-1/6 h-30 mx-2">
                <img src="{{ asset('images/aya.png') }}" alt="Image4" class="w-1/3 lg:w-1/6 h-30 mx-2">
                <img src="{{ asset('images/mtb.png') }}" alt="Image5" class="w-1/3 lg:w-1/6 h-30 mx-2">
                <img src="{{ asset('images/aya.png') }}" alt="Image1" class="w-1/3 lg:w-1/6 h-30 mx-2">
                <img src="{{ asset('images/mtb.png') }}" alt="Image2" class="w-1/3 lg:w-1/6 h-30 mx-2">
                <img src="{{ asset('images/scb.png') }}" alt="Image3" class="w-1/3 lg:w-1/6 h-30 mx-2">
                <img src="{{ asset('images/aya.png') }}" alt="Image4" class="w-1/3 lg:w-1/6 h-30 mx-2">
                <img src="{{ asset('images/mtb.png') }}" alt="Image5" class="w-1/3 lg:w-1/6 h-30 mx-2">
            </div>
            <div class="images-container flex flex-row animate-to-left-delay justify-center mt-4">
                <img src="{{ asset('images/aya.png') }}" alt="Image1" class="w-1/3 lg:w-1/6 h-30 mx-2">
                <img src="{{ asset('images/mtb.png') }}" alt="Image2" class="w-1/3 lg:w-1/6 h-30 mx-2">
                <img src="{{ asset('images/scb.png') }}" alt="Image3" class="w-1/3 lg:w-1/6 h-30 mx-2">
                <img src="{{ asset('images/aya.png') }}" alt="Image4" class="w-1/3 lg:w-1/6 h-30 mx-2">
                <img src="{{ asset('images/mtb.png') }}" alt="Image5" class="w-1/3 lg:w-1/6 h-30 mx-2">
                <img src="{{ asset('images/aya.png') }}" alt="Image1" class="w-1/3 lg:w-1/6 h-30 mx-2">
                <img src="{{ asset('images/mtb.png') }}" alt="Image2" class="w-1/3 lg:w-1/6 h-30 mx-2">
                <img src="{{ asset('images/scb.png') }}" alt="Image3" class="w-1/3 lg:w-1/6 h-30 mx-2">
                <img src="{{ asset('images/aya.png') }}" alt="Image4" class="w-1/3 lg:w-1/6 h-30 mx-2">
                <img src="{{ asset('images/mtb.png') }}" alt="Image5" class="w-1/3 lg:w-1/6 h-30 mx-2">
            </div>
        </div>
    </div>
</section>
<section class="gradient-section lg:py-12 m-0">
    <div class="lg:px-8">
        <div class="w-full h-[400px] lg:h-[500px] relative">
            <image src="{{ asset('images/girl_character.svg') }}" alt="Indicator" class="inline-block ml-2 w-[600px] lg:w-[120%] h-[100%] -translate-x-[5%] lg:-translate-x-[15%]">
            <div class="absolute inset-0 top-[30%] left-[40%] text-white text-left text-lg lg:text-4xl font-bold">
                ❝Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim❞ 
            </div>
        </div>
        <div class="flex flex-col md:flex-row justify-center items-center text-center md:text-left mt-8 p-8">
            <div class="w-full md:w-1/2 text-white">
                <h1 class="text-3xl md:text-4xl font-bold text-white leading-tight mb-8 md:mb-12 ">
                        Ipsum Merchants
                        <image src="{{ asset('icons/diamond_stick.png') }}" alt="Indicator" class="hidden md:inline-block ml-2 w-20 h-5 scale-x-[-1]">
                </h1>
                <p class="text-xl font-semibold mb-4">
                    Do you want accept card payments in </br>your business?
                </p>
                <p class="text-lg">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
Amet, consectetua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                </p>
            </div>
            <div class="w-full md:w-1/2">
                <img 
                    src="{{ asset('images/merchants.png') }}"
                    alt="Loren Member List" 
                    class="lg:rounded-xl w-full object-cover"
                >
            </div>
        </div>
    </div>
</section>
@if(auth()->check())
<section class="gradient-section lg:py-12 m-0">
    
    <div class="lg:px-8">
        <h1 class="text-center text-3xl text-white font-bold mb-8">Member List</h1>
        <form method="GET" action="{{ route('home') }}" class="hidden sm:flex">
            <div class="flex flex-col sm:flex-row items-center mb-4 gap-4 w-full">
                <!-- Left side: Per Page -->
                <div class="flex items-center gap-2 text-sm font-medium">
                    <label for="perPage" class="text-white font-medium">Show</label>
                    <select name="perPage" id="perPage" onchange="this.form.submit()" class="px-2 py-1 w-[60px] rounded">
                        <option value="3" {{ request('perPage',10) == 3 ? 'selected' : '' }}>3</option>
                        <option value="5" {{ request('perPage',10) == 5 ? 'selected' : '' }}>5</option>
                        <option value="10" {{ request('perPage',10) == 10 ? 'selected' : '' }}>10</option>
                        <option value="15" {{ request('perPage',10) == 15 ? 'selected' : '' }}>15</option>
                    </select>
                    <span class="text-white">entries</span>
                </div>

                <!-- Right side: Status & Search -->
                <div class="flex items-center gap-4 ml-auto w-full sm:w-auto">
                    <!-- Status Dropdown -->
                    <div class="flex items-center gap-2 text-sm font-medium">
                        <label for="status" class="text-white font-medium">Status</label>
                        <select name="status" id="status" onchange="this.form.submit()" class="px-2 py-1 w-[150px] rounded">
                            <option value="active" {{ request('status','active') == 'active' ? 'selected' : '' }}>Subscribed</option>
                            <option value="archived" {{ request('status','active') == 'archived' ? 'selected' : '' }}>Unsubscribed</option>
                        </select>
                    </div>

                    <!-- Search Input -->
                    <div class="flex items-center w-full sm:w-64 relative">
                        <input type="text" name="search" value="{{ request('search', '') }}" placeholder="Search Here"
                            class="w-full rounded-full border border-gray-300 bg-white px-4 py-2 pl-10 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 shadow-sm">
                        
                        <!-- Submit button -->
                        <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <div class="flex flex-col sm:hidden px-4">
            @foreach($members->take(20) as $member)
                <div class="rounded-lg p-4 mb-4">
                    <div class="flex justify-between mb-2">
                        <div class="text-gray-200 font-medium">No</div>
                        <div class="text-white font-bold">{{ $member->id }}</div>
                    </div>
                    <div class="flex justify-between mb-2">
                        <div class="text-gray-200 font-medium">Certified Date</div>
                        <div class="text-white font-bold">{{ $member->created_at->format('d/m/Y') }}</div>
                    </div>
                    <div class="flex justify-between mb-2">
                        <div class="text-gray-200 font-medium">Company</div>
                        <div class="text-white font-bold">{{ $member->user->name }}</div>
                    </div>
                    <div class="flex justify-between mb-2">
                        <div class="text-gray-200 font-medium">POS Brand</div>
                        <div class="text-white font-bold">{{ $member->brand }}</div>
                    </div>
                    <div class="flex justify-between mb-2">
                        <div class="text-gray-200 font-medium">Model</div>
                        <div class="text-white font-bold">{{ $member->model }}</div>
                    </div>
                    <div class="flex justify-between">
                        <div class="text-gray-200 font-medium">Country</div>
                        <div class="text-white font-bold">{{ $member->country }}</div>
                    </div>
                </div>
                @if (!$loop->last)
                    <hr class="border-gray-200 w-[60%] mx-auto">
                @endif
            @endforeach
        </div>


        <div
            class="scrollbar-hide relative flex flex-col w-full h-full overflow-scroll bg-white shadow-md bg-clip-border rounded-xl hidden sm:flex">
            <table class="w-full text-left table-auto min-w-max">
                <thead class="bg-tableHead text-white font-bold">
                <tr>
                    <th class="p-4 border-b border-blue-gray-100 bg-tableHead">
                    <p class="block font-sans text-sm antialiased  leading-none ">
                        No
                    </p>
                    </th>
                    <th class="p-4 border-b border-blue-gray-100 ">
                    <p class="block font-sans text-sm antialiased  leading-none ">
                        Certified Date
                    </p>
                    </th>
                    <th class="p-4 border-b border-blue-gray-100 ">
                    <p class="block font-sans text-sm antialiased  leading-none ">
                        Company
                    </p>
                    </th>
                    <th class="p-4 border-b border-blue-gray-100 ">
                    <p class="block font-sans text-sm antialiased  leading-none ">
                        POS Brand
                    </p>
                    </th>
                    <th class="p-4 border-b border-blue-gray-100 ">
                    <p class="block font-sans text-sm antialiased  leading-none ">
                        Model
                    </p>
                    </th>
                    <th class="p-4 border-b border-blue-gray-100 ">
                    <p class="block font-sans text-sm antialiased  leading-none  ">
                        Country
                    </p>
                    </th>
                    <th class="p-4 border-b border-blue-gray-100 ">
                    <p class="block font-sans text-sm antialiased  leading-none  "></p>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($members as $member)
                    <tr class="even:bg-grayLight odd:bg-grayDark text-gray-100" >
                        <td class="p-4">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                {{ $member->id }}
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                {{ $member->created_at->format('d/m/Y') }}
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                {{ $member->user->name }}
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                {{ $member->brand }}
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                {{ $member->model }}
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                {{ $member->country }}
                            </p>
                        </td>
                        <td class="p-4">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                            </p>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
            <!-- Pagination Links -->
            @if($members->total() > $members->perPage() || $members->total() > 0)
                <div class="mt-4 pagination-light">
                    {{ $members->links('pagination::custom') }}
                </div>
            @endif
        </div>
    
</section>
@endif
</x-app-layout>