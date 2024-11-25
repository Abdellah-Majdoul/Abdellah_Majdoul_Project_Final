<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskPro - Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 font-['Plus_Jakarta_Sans']">
    <div class=" flex">
        <!-- Sidebar -->
        <aside class="hidden lg:flex lg:flex-col fixed inset-y-0 z-50 w-72 bg-gradient-to-r from-gray-800 to-gray-700 text-white shadow-lg">
            <div class="flex flex-col flex-1 min-h-0">
                <!-- Logo -->
                <div class="flex items-center h-16 px-6 border-b border-gray-600">
                    <div class="p-2 bg-black rounded-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                    </div>
                    <span class="ml-3 text-xl font-bold">TaskPro</span>
                </div>
        
                <!-- Navigation -->
                <nav class="flex-1 px-4 py-6 space-y-6 ">
                    <a href="/createTeam" class="flex items-center px-3 py-2 text-sm font-medium rounded-lg bg-gray-900 hover:bg-gray-800 hover:text-white group">
                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        Dashboard
                    </a>
                    <a href="/teams" class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-gray-300 hover:bg-gray-800 hover:text-white group">
                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        Teams
                    </a>
                    <a href="/calendar" class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-gray-300 hover:bg-gray-800 hover:text-white group">
                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Calendar Task
                    </a>
                    <a href="calendarr" class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-gray-300 hover:bg-gray-800 hover:text-white group">
                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-white" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                            <!-- Calendar Icon -->
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            <!-- People Group Icon -->
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 17a4 4 0 01-8 0 4 4 0 018 0zm6-4a4 4 0 110 8 4 4 0 010-8zm2-6a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        
                        Calendar Teams
                    </a>
                    <a href="{{ route('showTasks') }}" class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-gray-300 hover:bg-gray-800 hover:text-white group">
                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                        Tasks
                    </a>
                    <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-gray-300 hover:bg-gray-800 hover:text-white group">
                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-white" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M21 16c0 .97-.78 1.75-1.75 1.75H6.66l-4.24 3.38V4.75C2.42 3.78 3.2 3 4.16 3h15.09C20.22 3 21 3.78 21 4.75v11.25z"/>
                        </svg>
                        
                        Chat
                    </a>
                    <a href="/profile" class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-gray-300 hover:bg-gray-800 hover:text-white group">
                        <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Settings
                    </a>
                </nav>
        
                <!-- User Menu -->
                <div class="flex items-center justify-between px-4 py-6 border-t border-gray-600">
                    <div class="flex items-center min-w-0">
                        <img class="w-12 h-12 rounded-full object-cover" src="{{ asset('storage/images/' .Auth::user()->image) }}" alt="User avatar">
                        <div class="ml-4">
                            <p class="text-sm font-semibold">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-gray-400">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="p-2 text-gray-400 hover:text-gray-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="lg:pl-72 flex flex-col flex-1">
            <!-- Top Navigation -->
            <nav class="flex items-center justify-between h-16 px-4 sm:px-6 lg:px-8 bg-gray-50 border-b border-gray-200 shadow-md">
                <div class="flex items-center flex-1">
                    <!-- Sidebar Toggle Button -->
                    <button type="button" class="lg:hidden p-2 rounded-md text-gray-600 hover:text-gray-900 focus:outline-none transition ease-in-out duration-200">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
            
                    <!-- Search Bar -->
                    <div class="flex-1 flex items-center justify-center sm:justify-start">
                        <form class="w-full flex md:ml-0" action="#" method="GET">
                            <label for="search-field" class="sr-only">Search</label>
                            <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                    </svg>
                                </div>
                                <input id="search-field" name="search" class="block w-full pl-8 pr-3 py-2 bg-white text-gray-900 border-transparent placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm rounded-md transition ease-in-out duration-200" placeholder="Search tasks..." type="search">
                            </div>
                        </form>
                    </div>
                </div>
            
                <!-- Notifications and Profile Menu -->
                <div class="ml-4 flex items-center space-x-4 md:ml-6">
                    <!-- Notifications Button -->
                    <button type="button" class="p-2 rounded-full text-gray-500 hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition ease-in-out duration-200">
                        <span class="sr-only">View notifications</span>
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                    </button>
            
                    
                </div>
            </nav>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto focus:outline-none">
                <div class="py-6">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
                    </div>
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <!-- Stats -->
                        <div class="mt-8">
                            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                                <!-- Stat card -->
                                <div class="bg-gradient-to-r from-indigo-500 via-purple-600 to-pink-600 shadow-lg rounded-xl p-6 text-white hover:scale-105 transform transition-all duration-300">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                            </svg>
                                        </div>
                                        <div class="ml-4 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium">Total Team Members</dt>
                                                <dd class="text-3xl font-semibold">12</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                        
                                <!-- Stat card -->
                                <div class="bg-gradient-to-r from-blue-400 to-teal-500 shadow-lg rounded-xl p-6 text-white hover:scale-105 transform transition-all duration-300">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                                            </svg>
                                        </div>
                                        <div class="ml-4 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium">Active Tasks</dt>
                                                <dd class="text-3xl font-semibold">24</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                        
                                <!-- Stat card -->
                                <div class="bg-gradient-to-r from-yellow-500 via-orange-400 to-red-500 shadow-lg rounded-xl p-6 text-white hover:scale-105 transform transition-all duration-300">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                        <div class="ml-4 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium">Tasks Due Today</dt>
                                                <dd class="text-3xl font-semibold">8</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                        
                                <!-- Stat card -->
                                <div class="bg-gradient-to-r from-green-400 to-lime-500 shadow-lg rounded-xl p-6 text-white hover:scale-105 transform transition-all duration-300">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                        <div class="ml-4 flex-1">
                                            <dl>
                                                <dt class="text-sm font-medium">Completed Tasks</dt>
                                                <dd class="text-3xl font-semibold">64</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                </div>
            </main>
        </div>
    </div>
</body>



</html>