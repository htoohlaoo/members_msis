<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900 gradient-bg">
        <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500 dark:text-gray-300" />
            </a>
        </div>

        <div x-data="posSelector('{{ $member->brand }}', '{{ $member->model }}', '{{ $member->country }}')" 
     class="w-full sm:max-w-md mt-6 px-6 py-6 overflow-hidden sm:rounded-lg">
            
            <!-- Success Alert -->
            @if (session('success'))
                <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 2000)"
                     x-transition class="mb-4 px-4 py-3 rounded bg-green-500/40 text-gray-200 font-bold">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Error Alert -->
            @if (session('error'))
                <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 2000)"
                     x-transition class="mb-4 px-4 py-3 rounded bg-red-500/40 text-gray-200 font-bold">
                    {{ session('error') }}
                </div>
            @endif
            
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('members.update', $member->id) }}" class="space-y-6">
                @csrf
                @method('PUT') <!-- Important: tell Laravel this is an update -->

                <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100 text-center">
                    {{ __('Update Member') }}
                </h2>
                <p class="text-sm text-yellow-400 text-center">
                    {{ __('Edit the information below to update this member.') }}
                </p>

                <!-- Company Name -->
                <div>
                    <x-input-label for="name" :value="__('Company Name')" />
                    <x-text-input id="name" class="block mt-1 w-full"
                        type="text" name="name"
                        :value="old('name', $member->user->name)" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full"
                        type="email" name="email"
                        :value="old('email', $member->user->email)" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password (optional for update) -->
                <div>
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full"
                        type="password" name="password" placeholder="Leave blank to keep current password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- POS Brand -->
                <div>
                    <x-input-label for="brand" value="{{ __('POS Brand') }}" />
                    <select id="brand" name="brand" x-model="selectedBrand"
                        class="mt-1 block w-full border-gray-300 dark:border-gray-700 rounded-md shadow-sm dark:bg-gray-800 dark:text-gray-100">
                        <option value="">-- Select Brand --</option>
                        <template x-for="brand in brands" :key="brand">
                            <option :value="brand" x-text="brand" 
                                :selected="brand === '{{ old('brand', $member->brand) }}'"></option>
                        </template>
                    </select>
                    <x-input-error :messages="$errors->get('brand')" class="mt-2" />
                </div>

                <!-- POS Model -->
                <div>
                    <x-input-label for="model" value="{{ __('POS Model') }}" />
                    <select id="model" name="model" x-model="selectedModel"
                        :disabled="!selectedBrand"
                        class="mt-1 block w-full border-gray-300 dark:border-gray-700 rounded-md shadow-sm dark:bg-gray-800 dark:text-gray-100">
                        <option value="">-- Select Model --</option>
                        <template x-for="model in models[selectedBrand] ?? []" :key="model">
                            <option :value="model" x-text="model" 
                                :selected="model === '{{ old('model', $member->model) }}'"></option>
                        </template>
                    </select>
                    <x-input-error :messages="$errors->get('model')" class="mt-2" />
                </div>
                
                <!-- Country -->
                <div>
                    <x-input-label for="country" value="{{ __('Country') }}" />
                    <select id="country" name="country" x-model="selectedCountry"
                        class="mt-1 block w-full border-gray-300 dark:border-gray-700 rounded-md shadow-sm dark:bg-gray-800 dark:text-gray-100">
                        <option value="">-- Select Country --</option>
                        <template x-for="country in countries" :key="country">
                            <option :value="country" x-text="country"></option>
                        </template>
                    </select>
                    <x-input-error :messages="$errors->get('country')" class="mt-2" />
                </div>

                

                <!-- Buttons -->
                <div class="flex justify-end space-x-3">
                    
                    <x-primary-button type="submit">
                        {{ __('Update Member') }}
                    </x-primary-button>
                </div>

            </form>
        </div>
    </div>

</x-app-layout>
