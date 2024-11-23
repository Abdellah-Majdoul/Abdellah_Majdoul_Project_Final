<section class="space-y-6 bg-white p-6 rounded-lg shadow-lg">
    <header>
        <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <div class="flex justify-center">
        <x-danger-button
            x-data="{}"
            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
            class="w-full md:w-1/2 py-3 text-xl"
        >{{ __('Delete Account') }}</x-danger-button>
    </div>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="POST" action="{{ route('profile.destroy') }}" class="bg-white rounded-lg p-6">
            @csrf
            @method('DELETE')

            <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                {{ __('Are you sure you want to delete your account?') }}
            </h3>

            <p class="mt-3 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-4">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-2 block w-full md:w-3/4 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500"
                    placeholder="{{ __('Enter your password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end gap-3">
                <x-secondary-button x-on:click="$dispatch('close')" class="w-1/3 py-2">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="w-1/3 py-2">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
