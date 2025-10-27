<!-- Footer -->
    <footer class="bg-indigo-900 text-white">
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