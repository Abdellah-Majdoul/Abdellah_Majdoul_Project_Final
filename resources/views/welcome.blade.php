<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TaskPro - Smart Task Management</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="antialiased bg-gray-50 font-['Plus_Jakarta_Sans']">
    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="flex-shrink-0">
                        <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                    </div>
                    <span class="text-xl font-bold">TaskPro</span>
                </div>

                <!-- Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="#features" class="text-gray-600 hover:text-black">Features</a>
                    <a href="#pricing" class="text-gray-600 hover:text-black">Pricing</a>
                    <a href="#testimonials" class="text-gray-600 hover:text-black">Testimonials</a>
                </nav>

                <!-- Auth Buttons -->
                <div class="flex items-center space-x-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/createTeam') }}" class="text-sm font-semibold text-black hover:text-gray-900">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-semibold text-black hover:text-gray-900">Sign in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-4 py-2 text-sm font-semibold text-white bg-black rounded-lg hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">
                                    Get Started
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <main class="pt-16">
        <div class="relative overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute inset-0 z-0">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-50 to-blue-50 opacity-70"></div>
                <div class="absolute inset-y-0 right-0 w-1/2 bg-gradient-to-l from-blue-50 to-transparent"></div>
            </div>

            <!-- Content -->
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Column -->
                    <div class="space-y-8">
                        <div class="space-y-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-50 text-blue-700">
                                New Features Available
                            </span>
                            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight">
                                Manage tasks with ease and precision
                            </h1>
                            <p class="text-xl text-gray-600">
                                Stay organized, boost productivity, and achieve your goals with our intuitive task management platform.
                            </p>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-white bg-black rounded-lg hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">
                                Start for free
                                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                            <a href="#demo" class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200">
                                Watch demo
                                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="flex items-center gap-8">
                            <div class="flex -space-x-2">
                                @foreach(range(1, 4) as $i)
                                    <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="https://ui-avatars.com/api/?name=User+{{ $i }}&background=random" alt="User {{ $i }}">
                                @endforeach
                            </div>
                            <div class="text-sm text-gray-600">
                                <span class="font-semibold text-black">1,000+</span> users already joined
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="relative">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="Task Management Dashboard" class="w-full">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <section id="features" class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Everything you need to stay organized</h2>
                    <p class="mt-4 text-lg text-gray-600">Powerful features to help you manage tasks, collaborate with your team, and achieve your goals.</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @php
                    $features = [
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>',
                            'title' => 'Task Management',
                            'description' => 'Create, organize, and track tasks with ease. Set priorities, deadlines, and categories.'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>',
                            'title' => 'Team Collaboration',
                            'description' => 'Work together seamlessly. Share tasks, communicate, and stay in sync with your team.'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>',
                            'title' => 'Progress Tracking',
                            'description' => 'Monitor progress with visual charts and reports. Stay on top of deadlines and milestones.'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>',
                            'title' => 'Smart Notifications',
                            'description' => 'Get timely reminders and updates. Never miss important deadlines or updates.'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>',
                            'title' => 'Calendar Integration',
                            'description' => 'Sync with your calendar. View tasks alongside your schedule and events.'
                        ],
                        [
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>',
                            'title' => 'Detailed Reports',
                            'description' => 'Generate comprehensive reports. Analyze productivity and track performance.'
                        ]
                    ]
                    @endphp

                    @foreach($features as $feature)
                        <div class="relative p-8 bg-gray-50 rounded-2xl hover:bg-gray-100 transition-colors">
                            <div class="absolute top-8 right-8">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    {!! $feature['icon'] !!}
                                </svg>
                            </div>
                            <div class="pt-8">
                                <h3 class="text-xl font-semibold text-gray-900">{{ $feature['title'] }}</h3>
                                <p class="mt-4 text-gray-600">{{ $feature['description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="relative py-24 bg-black">
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute inset-0 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),theme(colors.black))] opacity-20"></div>
            </div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                        Ready to get started?
                    </h2>
                    <p class="mt-4 text-lg text-gray-300">
                        Join thousands of teams who are already using TaskPro to improve their productivity.
                    </p>
                    <div class="mt-8 flex justify-center gap-4">
                        <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-black bg-white rounded-lg hover:bg-gray-100">
                            Start for free
                        </a>
                        <a href="#contact" class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-white border border-white rounded-lg hover:bg-white/10">
                            Contact sales
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="col-span-2 md:col-span-1">
                    <div class="flex items-center space-x-3">
                        <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                        <span class="text-xl font-bold">TaskPro</span>
                    </div>
                    <p class="mt-4 text-gray-600">
                        Making task management simple and efficient for teams of all sizes.
                    </p>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 tracking-wider uppercase">Product</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-600 hover:text-gray-900">Features</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-gray-900">Pricing</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-gray-900">Security</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 tracking-wider uppercase">Company</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-600 hover:text-gray-900">About</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-gray-900">Blog</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-gray-900">Careers</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 tracking-wider uppercase">Support</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-600 hover:text-gray-900">Help Center</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-gray-900">Contact</a></li>
                        <li><a href="#" class="text-base text-gray-600 hover:text-gray-900">Status</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-200 pt-8">
                <p class="text-base text-gray-400 text-center">
                    © {{ date('Y') }} TaskPro. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>