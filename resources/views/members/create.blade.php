<x-app-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900 gradient-bg">
        <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500 dark:text-gray-300" />
            </a>
        </div>

        <div x-data="posSelector()" class="w-full sm:max-w-md mt-6 px-6 py-6 overflow-hidden sm:rounded-lg">
            
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

            <form method="POST" action="{{ route('members.subscribeByAdmin') }}" class="space-y-6">
                @csrf

                <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100 text-center">
                    {{ __('Create Member') }}
                </h2>
                <p class="text-sm text-yellow-400 text-center">
                    {{ __('Fill out the information below to create a new member.') }}
                </p>

                <!-- Company Name -->
                <div>
                    <x-input-label for="name" :value="__('Company Name')" />
                    <x-text-input id="name" class="block mt-1 w-full"
                        type="text" name="name" :value="old('name')" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full"
                        type="email" name="email" :value="old('email')" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full"
                        type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- POS Brand -->
                <div>
                    <x-input-label for="brand" value="{{ __('POS Brand') }}" />
                    <select id="brand" name="brand" x-model="selectedBrand"
                        class="mt-1 block w-full border-gray-300 dark:border-gray-700 rounded-md shadow-sm dark:bg-gray-800 dark:text-gray-100">
                        <option value="">-- Select Brand --</option>
                        <template x-for="brand in brands" :key="brand">
                            <option :value="brand" x-text="brand"></option>
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
                            <option :value="model" x-text="model"></option>
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
                    <x-secondary-button type="reset">
                        {{ __('Reset') }}
                    </x-secondary-button>

                    <x-primary-button type="submit">
                        {{ __('Create Member') }}
                    </x-primary-button>
                </div>

            </form>
        </div>
    </div>

</x-app-layout>
