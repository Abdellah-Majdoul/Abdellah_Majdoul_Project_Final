<section class="bg-white p-8 rounded-lg shadow-lg">
    <header>
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a strong, random password to keep your account secure.') }}
        </p>
    </header>

    <form method="POST" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('PUT')

        <!-- Current Password -->
        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input
                id="update_password_current_password"
                name="current_password"
                type="password"
                class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:outline-none"
                placeholder="{{ __('Enter your current password') }}"
                autocomplete="current-password"
            />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <!-- New Password -->
        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input
                id="update_password_password"
                name="password"
                type="password"
                class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:outline-none"
                placeholder="{{ __('Enter your new password') }}"
                autocomplete="new-password"
            />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input
                id="update_password_password_confirmation"
                name="password_confirmation"
                type="password"
                class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:outline-none"
                placeholder="{{ __('Re-enter your new password') }}"
                autocomplete="new-password"
            />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Save Button & Status Message -->
        <div class="flex justify-between items-center">
            <x-primary-button class="px-6 py-3 w-full md:w-auto">
                {{ __('Save Changes') }}
            </x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-500 dark:text-green-400"
                >
                    {{ __('Password updated successfully!') }}
                </p>
            @endif
        </div>
    </form>
</section>
