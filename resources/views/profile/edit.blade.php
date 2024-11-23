<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">
            {{ __('Profile Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Profile Information Section -->
            <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-xl p-6 mb-8">
                <div class="flex flex-col lg:flex-row justify-between items-center">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                        {{ __('Profile Information') }}
                    </h3>
                    <div class="mt-4 lg:mt-0">
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            {{ __("Update your account's profile information and email address.") }}
                        </p>
                    </div>
                </div>

                <div class="mt-6">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password Section -->
            <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-xl p-6 mb-8">
                <div class="flex flex-col lg:flex-row justify-between items-center">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                        {{ __('Update Password') }}
                    </h3>
                    <div class="mt-4 lg:mt-0">
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Ensure your account is using a long, random password to stay secure.') }}
                        </p>
                    </div>
                </div>

                <div class="mt-6">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete Account Section -->
            <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-xl p-6">
                <div class="flex flex-col lg:flex-row justify-between items-center">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                        {{ __('Delete Account') }}
                    </h3>
                    <div class="mt-4 lg:mt-0">
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please download any data you wish to retain before deleting your account.') }}
                        </p>
                    </div>
                </div>

                <div class="mt-6">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
