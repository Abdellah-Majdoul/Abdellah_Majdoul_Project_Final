<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teams Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-relaxed">

    <!-- Sidebar -->
    @include("layouts.sidebar")

    <!-- Main Content -->
    <div class="lg:ml-72 p-8">
        <div class="container mx-auto p-6 bg-white shadow-md rounded-lg">
            <h1 class="text-4xl font-extrabold text-gray-800 mb-8">Team Tasks</h1>

            <!-- Tasks Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($team->tasks as $item)
                    <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-200">
                        <!-- Task Header -->
                        <div class="bg-gradient-to-r from-blue-400 to-blue-600 text-white p-4">
                            <h2 class="text-xl font-bold truncate">{{ $item->name }}</h2>
                            <p class="text-sm mt-1">Assigned to <span class="font-medium">{{ $item->team->name }}</span></p>
                        </div>

                        <!-- Task Details -->
                        <div class="p-5">
                            <p class="text-gray-700 text-sm mb-4">{{ $item->description }}</p>
                            <div class="text-sm text-gray-500 space-y-2">
                                <p>📅 <strong>Start:</strong> {{ $item->start }}</p>
                                <p>📅 <strong>End:</strong> {{ $item->end }}</p>
                                <p>👥 <strong>Team:</strong> {{ $item->team->name }}</p>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="bg-gray-50 px-4 py-3">
                            <button class="text-blue-600 font-semibold text-sm hover:underline">View Details</button>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- No Tasks Fallback -->
            @if ($team->tasks->isEmpty())
                <p class="text-center text-gray-500 mt-6">No tasks available for this team.</p>
            @endif
        </div>
    </div>

</body>
</html>
