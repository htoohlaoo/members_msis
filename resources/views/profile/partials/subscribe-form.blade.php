<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Membership') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Become a member and discover a world of exclusive perks! From priority support to members-only content and discounts, our membership is designed to give you more. Sign up today and start enjoying benefits tailored just for you. Your next-level experience starts here!') }}
        </p>
    </header>


    @if(auth()->user()?->isSubscribed())
        <div class="text-green-600 dark:text-green-400">
            {{ __('Subscribed!') }}
        </div>
    @else
        <x-primary-button
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'member-subscription')"
        >{{ __('Subscribe Membership') }}</x-primary-button>
    @endif

    <x-modal name="member-subscription" focusable>
    <form method="POST" action="{{ route('members.subscribe') }}" class="p-6">
        @csrf

        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Subscribe to Membership') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Select your POS brand and model to complete subscription.') }}
        </p>

        <div x-data="posSelector()" class="mt-6 space-y-4">

            <!-- Brand Dropdown -->
            <div>
                <x-input-label for="brand" value="{{ __('POS Brand') }}" />
                <select id="brand" name="brand" x-model="selectedBrand" class="mt-1 block w-3/4 border-gray-300 rounded">
                    <option value="">-- Select Brand --</option>
                    <template x-for="brand in brands" :key="brand">
                        <option :value="brand" x-text="brand"></option>
                    </template>
                </select>
                <x-input-error :messages="$errors->get('brand')" class="mt-2" />
            </div>

            <!-- Model Dropdown -->
            <div>
                <x-input-label for="model" value="{{ __('POS Model') }}" />
                <select id="model" name="model" x-model="selectedModel" class="mt-1 block w-3/4 border-gray-300 rounded" :disabled="!selectedBrand">
                    <option value="">-- Select Model --</option>
                    <template x-for="model in models[selectedBrand] ?? []" :key="model">
                        <option :value="model" x-text="model"></option>
                    </template>
                </select>
                <x-input-error :messages="$errors->get('model')" class="mt-2" />
            </div>
            <!-- Country Dropdown -->
            <div>
                <x-input-label for="country" value="{{ __('Country') }}" />
                <select id="country" name="country" x-model="selectedCountry" 
                        class="mt-1 block w-3/4 border-gray-300 rounded">
                    <option value="">-- Select Country --</option>
                    <template x-for="country in countries" :key="country">
                        <option :value="country" x-text="country"></option>
                    </template>
                </select>
                <x-input-error :messages="$errors->get('country')" class="mt-2" />
            </div>
        </div>

        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-primary-button class="ms-3">
                {{ __('Subscribe Membership') }}
            </x-primary-button>
        </div>
    </form>
</x-modal>
</section>
