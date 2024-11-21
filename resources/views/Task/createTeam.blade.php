<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskPro - Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 font-['Plus_Jakarta_Sans']">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="hidden lg:flex lg:flex-col fixed inset-y-0 z-50 w-72 bg-white border-r border-gray-200">
            <div class="flex flex-col flex-1 min-h-0">
                <!-- Logo -->
                <div class="flex items-center h-16 px-4 border-b border-gray-200 gap-2">
                    <div class="p-2 bg-black rounded-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                    </div>
                    <span class="text-xl font-bold">TaskPro</span>
                </div>

                <!-- Navigation -->
                <nav class="flex-1 px-2 py-4 space-y-1 overflow-y-auto">
                    <a href="/createTeam" class="flex items-center px-3 py-2 text-sm font-medium rounded-lg bg-gray-100 text-gray-900 group">
                        <svg class="w-5 h-5 mr-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                        Dashboard
                    </a>
                    <a href="/teams" class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-gray-600 hover:bg-gray-50 hover:text-gray-900 group">
                        <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        Teams
                    </a>
                    <a href="/calendar" class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-gray-600 hover:bg-gray-50 hover:text-gray-900 group">
                        <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Calendar
                    </a>
                    <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-gray-600 hover:bg-gray-50 hover:text-gray-900 group">
                        <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                        Tasks
                    </a>
                    <a href="#" class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-gray-600 hover:bg-gray-50 hover:text-gray-900 group">
                        <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Settings
                    </a>
                </nav>

                <!-- User Menu -->
                <div class="flex items-center justify-between px-4 py-4 border-t border-gray-200">
                    <div class="flex items-center min-w-0">
                        <img class="w-10 h-10 rounded-full" src="{{ asset('storage/images/' .Auth::user()->image) }}" alt="User avatar">
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900 truncate">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-gray-500 truncate">{{ Auth::user()->email }}</p>
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
            <nav class="flex items-center justify-between h-16 px-4 sm:px-6 lg:px-8 bg-white border-b border-gray-200">
                <div class="flex items-center flex-1">
                    <button type="button" class="lg:hidden -ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                    <div class="flex-1 flex justify-between px-4 sm:px-6 lg:px-8">
                        <div class="flex-1 flex">
                            <form class="w-full flex md:ml-0" action="#" method="GET">
                                <label for="search-field" class="sr-only">Search</label>
                                <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                        </svg>
                                    </div>
                                    <input id="search-field" name="search" class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-0 focus:border-transparent sm:text-sm" placeholder="Search tasks..." type="search">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="ml-4 flex items-center md:ml-6">
                    <button type="button" class="p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
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
                            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                                <!-- Stat card -->
                                <div class="bg-white overflow-hidden shadow rounded-lg">
                                    <div class="p-5">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                                </svg>
                                            </div>
                                            <div class="ml-5 w-0 flex-1">
                                                <dl>
                                                    <dt class="text-sm font-medium text-gray-500 truncate">Total Team Members</dt>
                                                    <dd class="flex items-baseline">
                                                         <div class="text-2xl font-semibold text-gray-900">12</div>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Stat card -->
                                <div class="bg-white overflow-hidden shadow rounded-lg">
                                    <div class="p-5">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                                                </svg>
                                            </div>
                                            <div class="ml-5 w-0 flex-1">
                                                <dl>
                                                    <dt class="text-sm font-medium text-gray-500 truncate">Active Tasks</dt>
                                                    <dd class="flex items-baseline">
                                                        <div class="text-2xl font-semibold text-gray-900">24</div>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Stat card -->
                                <div class="bg-white overflow-hidden shadow rounded-lg">
                                    <div class="p-5">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                </svg>
                                            </div>
                                            <div class="ml-5 w-0 flex-1">
                                                <dl>
                                                    <dt class="text-sm font-medium text-gray-500 truncate">Tasks Due Today</dt>
                                                    <dd class="flex items-baseline">
                                                        <div class="text-2xl font-semibold text-gray-900">8</div>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Stat card -->
                                <div class="bg-white overflow-hidden shadow rounded-lg">
                                    <div class="p-5">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                </svg>
                                            </div>
                                            <div class="ml-5 w-0 flex-1">
                                                <dl>
                                                    <dt class="text-sm font-medium text-gray-500 truncate">Completed Tasks</dt>
                                                    <dd class="flex items-baseline">
                                                        <div class="text-2xl font-semibold text-gray-900">64</div>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Task Board -->
                        <div class="mt-8">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-2xl font-semibold text-gray-900">Task Board</h2>
                                <div class="flex gap-5">
                                    <div class="flex space-x-4">
                                        <button id="openTaskModal" 
                                            class="px-6 py-2 text-sm font-medium text-white bg-black rounded-lg shadow-md hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:ring-offset-2 transition duration-300">
                                            + Add Team
                                        </button>
                                    </div>
                                    <div class="flex space-x-4">
                                        <button  id="openTaskModal1"
                                            class="px-6 py-2 text-sm font-medium text-white bg-black rounded-lg shadow-md hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:ring-offset-2 transition duration-300">
                                            + Add Task
                                        </button>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                                <!-- To Do Column -->
                                <div class="bg-white p-4 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
                                    <h3 class="text-lg font-semibold text-gray-900 mb-4">To Do</h3>
                                    <div class="space-y-4">
                                        <!-- Task Card -->
                                        <div class="bg-gray-100 p-4 rounded-lg shadow-md hover:shadow-xl transition duration-200">
                                            <div class="flex items-center justify-between">
                                                <p class="text-sm font-medium text-gray-900">Design System Update</p>
                                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-200 text-blue-800">Design</span>
                                            </div>
                                            <p class="mt-2 text-sm text-gray-500">Update the design system with new components and documentation.</p>
                                            <div class="mt-4 flex items-center justify-between">
                                                <div class="flex space-x-2">
                                                    <img class="h-6 w-6 rounded-full ring-2 ring-white" src="https://ui-avatars.com/api/?name=John+Doe" alt="">
                                                    <img class="h-6 w-6 rounded-full ring-2 ring-white" src="https://ui-avatars.com/api/?name=Jane+Smith" alt="">
                                                </div>
                                                <span class="text-sm text-gray-500">Due in 3 days</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <!-- In Progress Column -->
                                <div class="bg-white p-4 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
                                    <h3 class="text-lg font-semibold text-gray-900 mb-4">In Progress</h3>
                                    <div class="space-y-4">
                                        <!-- Task Card -->
                                        <div class="bg-gray-100 p-4 rounded-lg shadow-md hover:shadow-xl transition duration-200">
                                            <div class="flex items-center justify-between">
                                                <p class="text-sm font-medium text-gray-900">API Integration</p>
                                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-200 text-yellow-800">Development</span>
                                            </div>
                                            <p class="mt-2 text-sm text-gray-500">Integrate the new payment gateway API with the existing system.</p>
                                            <div class="mt-4 flex items-center justify-between">
                                                <div class="flex space-x-2">
                                                    <img class="h-6 w-6 rounded-full ring-2 ring-white" src="https://ui-avatars.com/api/?name=Mike+Johnson" alt="">
                                                </div>
                                                <span class="text-sm text-gray-500">Due tomorrow</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <!-- Review Column -->
                                <div class="bg-white p-4 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
                                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Review</h3>
                                    <div class="space-y-4">
                                        <!-- Task Card -->
                                        <div class="bg-gray-100 p-4 rounded-lg shadow-md hover:shadow-xl transition duration-200">
                                            <div class="flex items-center justify-between">
                                                <p class="text-sm font-medium text-gray-900">User Testing</p>
                                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-purple-200 text-purple-800">Testing</span>
                                            </div>
                                            <p class="mt-2 text-sm text-gray-500">Conduct user testing sessions for the new feature.</p>
                                            <div class="mt-4 flex items-center justify-between">
                                                <div class="flex space-x-2">
                                                    <img class="h-6 w-6 rounded-full ring-2 ring-white" src="https://ui-avatars.com/api/?name=Sarah+Wilson" alt="">
                                                    <img class="h-6 w-6 rounded-full ring-2 ring-white" src="https://ui-avatars.com/api/?name=Tom+Brown" alt="">
                                                </div>
                                                <span class="text-sm text-gray-500">Due in 5 days</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <!-- Done Column -->
                                <div class="bg-white p-4 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
                                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Done</h3>
                                    <div class="space-y-4">
                                        <!-- Task Card -->
                                        <div class="bg-gray-100 p-4 rounded-lg shadow-md hover:shadow-xl transition duration-200">
                                            <div class="flex items-center justify-between">
                                                <p class="text-sm font-medium text-gray-900">Documentation</p>
                                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-200 text-green-800">Completed</span>
                                            </div>
                                            <p class="mt-2 text-sm text-gray-500">Write technical documentation for the new API endpoints.</p>
                                            <div class="mt-4 flex items-center justify-between">
                                                <div class="flex space-x-2">
                                                    <img class="h-6 w-6 rounded-full ring-2 ring-white" src="https://ui-avatars.com/api/?name=Alex+Lee" alt="">
                                                </div>
                                                <span class="text-sm text-gray-500">Completed</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @if(session('success'))
                        <div id="success-message" class="bg-green-500 text-white p-4 rounded-lg mb-4 animate__fadeIn">
                            {{ session('success') }}
                        </div>
                        @endif
                        @if(session('error'))
                        <div id="error-message" class="bg-red-500 text-white p-4 rounded-lg mb-4 animate__fadeIn">
                            {{ session('error') }}
                        </div>
                        @endif
                        <!-- Recent Activity -->
                        <div class="mt-8">
                            <h2 class="text-lg font-medium text-gray-900">Recent Activity</h2>
                            <div class="mt-4 bg-white shadow rounded-lg">
                                <ul class="divide-y divide-gray-200">
                                    @foreach ($users as $user)
                                        
                                    <li class="p-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0">
                                                <img class="h-8 w-8 rounded-full" src="{{ asset('storage/images/'.$user->image) }}" alt="">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm font-medium text-gray-900">{{ $user->name }}</p>
                                                <p class="text-sm text-gray-500">Create new account"</p>
                                            </div>
                                            <div class="flex-shrink-0 text-sm text-gray-500">{{ $user->created_at->format('Y-m-d') }}</div>
                                        </div>
                                    </li>
                                    @endforeach
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
<!-- Modal  team-->
<div id="modal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
    <div class="modal-content p-6 w-full max-w-md bg-white rounded-lg shadow-xl transform transition-all">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Create Team</h2>
            <button id="closeModal" class="text-gray-400 hover:text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <form method="POST" action="{{ route('teams.store') }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Team Name</label>
                <input type="text" name="name" id="name"
                    class="w-full px-4 py-2 text-sm rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500"
                    placeholder="Enter team name" required>
            </div>
            <div class="mb-6">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Team Description</label>
                <textarea name="description" id="description"
                    class="w-full px-4 py-2 text-sm rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500"
                    placeholder="Describe your team" rows="4" required></textarea>
            </div>
            <button type="submit"
                class="w-full py-2 text-white bg-black rounded-lg hover:bg-gray-900 transition duration-200">
                Create Team
            </button>
        </form>
    </div>
</div>
<!-- Modal  task-->
<div id="modal1" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
    <div class="modal-content p-6 w-full max-w-lg bg-white rounded-lg shadow-xl transform transition-all">
        <div class="flex justify-between items-center mb-3">
            <h2 class="text-2xl font-semibold text-gray-800">Create Task</h2>
            <button id="closeModal1" class="text-gray-400 hover:text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <form method="POST" action="{{ route('task.store') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Task Name</label>
                <input type="text" name="name" id="name"
                    class="w-full px-4 py-2 text-sm rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500"
                    placeholder="Enter task name" required>
            </div>

            <div class="">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Task Description</label>
                <textarea name="description" id="description"
                    class="w-full px-4 py-2 text-sm rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500"
                    placeholder="Describe your task" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="start" class="block text-sm font-medium text-gray-700 mb-1">Task Start</label>
                <input type="datetime-local" name="start" id="start"
                    class="w-full px-4 py-2 text-sm rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500"
                    required>
            </div>

            <div class="mb-3">
                <label for="end" class="block text-sm font-medium text-gray-700 mb-1">Task End</label>
                <input type="datetime-local" name="end" id="end"
                    class="w-full px-4 py-2 text-sm rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500"
                    required>
            </div>

            <div class="mb-3">
                <label for="priority" class="block text-sm font-medium text-gray-700 mb-1">Priority</label>
                <select name="priority" id="priority"
                    class="w-full px-4 py-2 text-sm rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500">
                    <option value="High">High</option>
                    <option value="Medium">Medium</option>
                    <option value="Low">Low</option>
                </select>
            </div>

            <button type="submit"
                class="w-full py-2 text-white bg-black rounded-lg hover:bg-gray-900 transition duration-200">
                Create Task
            </button>
        </form>
    </div>
</div>

<script>
    // Modal toggle 1
const openModalBtn = document.getElementById('openTaskModal');
const closeModalBtn = document.getElementById('closeModal');
const modal = document.getElementById('modal');

if (openModalBtn && closeModalBtn && modal) {
    openModalBtn.addEventListener('click', () => {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });

    closeModalBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    });

    modal.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    });
}

// Modal toggle for Task Creation
const openModalBtn1 = document.getElementById('openTaskModal1');
const closeModalBtn1 = document.getElementById('closeModal1');
const modal1 = document.getElementById('modal1');

if (openModalBtn1 && closeModalBtn1 && modal1) {
    openModalBtn1.addEventListener('click', () => {
        modal1.classList.remove('hidden');
        modal1.classList.add('flex');
    });

    closeModalBtn1.addEventListener('click', () => {
        modal1.classList.add('hidden');
        modal1.classList.remove('flex');
    });

    modal1.addEventListener('click', (event) => {
        if (event.target === modal1) {
            modal1.classList.add('hidden');
            modal1.classList.remove('flex');
        }
    });
}




    
    
        setTimeout(function() {
            const successMessage = document.getElementById('success-message');
            const errorMessage = document.getElementById('error-message');
            
            if (successMessage) {
                successMessage.style.display = 'none';
            }
            if (errorMessage) {
                errorMessage.style.display = 'none';
            }
        }, 5000); 
</script>
</html>