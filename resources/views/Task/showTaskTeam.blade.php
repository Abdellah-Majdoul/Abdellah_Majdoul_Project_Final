<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teams Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Sidebar -->
    @include("layouts.sidebar")

    <div class="lg:ml-72 p-8">
      <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">Team Tasks</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($team->tasks as $item)
                <div class="bg-gray-50 border border-gray-200 rounded-lg shadow-lg overflow-hidden">
                    <div class="p-5">
                        <h2 class="text-2xl font-semibold text-gray-800">{{ $item->name }}</h2>
                        <p class="text-gray-600 mt-2">{{ $item->description }}</p>
                        <div class="mt-4">
                            <p class="text-sm text-gray-500">📅 <strong>Start:</strong> {{ $item->start }}</p>
                            <p class="text-sm text-gray-500">📅 <strong>End:</strong> {{ $item->end }}</p>
                            <p class="text-sm text-gray-500">👥 <strong>Team:</strong> {{ $item->team->name }}</p>
                            {{-- <p class="text-sm text-gray-500">✍️ <strong>Created by:</strong> {{ $item->user->name }}</p> --}}
                        </div>
                    </div>
                    {{-- <div class="bg-gray-100 px-5 py-3 text-right">
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                            View Details
                        </button>
                    </div> --}}
                </div>
            @endforeach
        </div>
    </div>
    
        
    </div>

</body>
</html>
