<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TaskPro - Create Your Account</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800 flex items-center justify-center p-4">
        <!-- Background Pattern -->
        <div class="absolute inset-0 z-0 opacity-40 dark:opacity-20">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.08'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <div class="w-full max-w-md relative z-10">
            <!-- Card -->
            <div class="bg-white dark:bg-gray-800 shadow-2xl rounded-2xl overflow-hidden transform transition-all hover:scale-[1.01]">
                <!-- Header -->
                <div class="px-5 pt-5 ">
                    <h1 class="text-3xl font-bold text-center text-gray-900 dark:text-white">
                        Create Account
                    </h1>
                    <p class="mt-2 text-center text-gray-600 dark:text-gray-400">
                        Join TaskPro and boost your productivity
                    </p>
                </div>

                <!-- Form Section -->
                <div class="px-8 pt-0">
                    @if ($errors->any())
                        <div class="mb-6 bg-red-50 dark:bg-red-900/30 rounded-lg p-4">
                            <div class="flex">
                                <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                </svg>
                                <div class="ml-3">
                                    <h3 class="text-sm font-medium text-red-800 dark:text-red-200">
                                        Please fix the following errors:
                                    </h3>
                                    <ul class="mt-2 text-sm text-red-700 dark:text-red-300">
                                        @foreach ($errors->all() as $error)
                                            <li class="list-disc list-inside">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}" class="space-y-6" enctype="multipart/form-data">
                        @csrf

                        <!-- Name Field -->
                        <div class="space-y-2">
                            <label for="name" class="text-sm font-medium text-gray-700 dark:text-gray-300">Full Name</label>
                            <div class="relative rounded-md shadow-sm">
                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    value="{{ old('name') }}"
                                    class="block w-full pl-10 pr-4 py-2 border-gray-200 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent dark:bg-gray-800 dark:text-white transition-colors"
                                    placeholder="John Doe"
                                    required
                                />
                            </div>
                        </div>

                       

                        <!-- Email Field -->
                        <div class="space-y-2 mt-0">
                            <label for="email" class="text-sm font-medium text-gray-700 dark:text-gray-300">Email Address</label>
                            <div class="relative rounded-md shadow-sm">
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    value="{{ old('email') }}"
                                    class="block w-full pl-10 pr-4 py-2 border-gray-200 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent dark:bg-gray-800 dark:text-white transition-colors"
                                    placeholder="you@example.com"
                                    required
                                />
                            </div>
                        </div>
                         <!-- Profile Image -->
                         <div class="space-y-2">
                            <label for="image" class="text-sm font-medium text-gray-700 dark:text-gray-300">Profile Image</label>
                            <input type="file" name="image" id="image" accept="image/*" class="block w-full text-sm text-gray-700 dark:text-gray-300 border-gray-200 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent dark:bg-gray-800 dark:text-white" />
                        </div>

                        <!-- Password Field -->
                        <div class="space-y-2">
                            <label for="password" class="text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                            <div class="relative rounded-md shadow-sm">
                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    class="block w-full pl-10 pr-4 py-2 border-gray-200 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent dark:bg-gray-800 dark:text-white transition-colors"
                                    placeholder="••••••••"
                                    required
                                />
                            </div>
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="space-y-2">
                            <label for="password_confirmation" class="text-sm font-medium text-gray-700 dark:text-gray-300">Confirm Password</label>
                            <div class="relative rounded-md shadow-sm">
                                <input
                                    type="password"
                                    name="password_confirmation"
                                    id="password_confirmation"
                                    class="block w-full pl-10 pr-4 py-2 border-gray-200 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent dark:bg-gray-800 dark:text-white transition-colors"
                                    placeholder="••••••••"
                                    required
                                />
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button
                            type="submit"
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-black hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black transition-colors"
                        >
                            Create Account
                        </button>
                    </form>
                </div>

                <!-- Footer -->
                <div class="px-5 py-3 bg-gray-50 dark:bg-gray-900/50 border-t dark:border-gray-700">
                    <p class="text-sm text-center text-gray-600 dark:text-gray-400">
                        Already have an account?
                        <a href="{{ route('login') }}" class="font-medium text-black dark:text-white hover:text-gray-900 dark:hover:text-gray-100">
                            Sign in
                        </a>
                    </p>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    By creating an account, you agree to our
                    <a href="#" class="font-medium text-black dark:text-white hover:underline">Terms</a>
                    and
                    <a href="#" class="font-medium text-black dark:text-white hover:underline">Privacy Policy</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
