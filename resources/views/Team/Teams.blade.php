<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Teams</h1>
    
            <!-- Button to trigger modal -->
            <button 
                class="bg-teal-600 text-white px-4 py-2 rounded-lg hover:bg-teal-700 focus:outline-none"
                data-modal-target="create-team-modal"
                data-modal-toggle="create-team-modal"
            >
                <i class="fas fa-plus mr-2"></i> Create Team
            </button>
        </div>
    
        <!-- Modal for creating team -->
        <div id="create-team-modal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
            <div class="bg-white rounded-lg shadow-lg w-96 p-6">
                <h3 class="text-xl font-semibold mb-4">Create a New Team</h3>
                <form action="{{ route('task.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="team-name" class="block text-sm font-medium text-gray-700">Team Name</label>
                        <input type="text" id="team-name" name="name" class="mt-1 p-2 border border-gray-300 rounded-md w-full" placeholder="Enter team name" required>
                    </div>
    
                    <div class="mb-4">
                        <label for="team-description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="team-description" name="description" class="mt-1 p-2 border border-gray-300 rounded-md w-full" placeholder="Describe the team's purpose"></textarea>
                    </div>
    
                    <div class="flex justify-end space-x-4">
                        <button type="button" class="px-4 py-2 bg-gray-300 rounded-lg" data-modal-toggle="create-team-modal">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-teal-600 text-white rounded-lg">Save Team</button>
                    </div>
                </form>
            </div>
        </div>
    
        <!-- Team Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($teams as $team)
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $team->name }}</h2>
                        <p class="text-sm text-gray-500 mb-4">{{ $team->description }}</p>
    
                        <div class="flex items-center">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="{{ $team->owner->name }}'s avatar" class="w-10 h-10 rounded-full mr-3">
                            <span class="text-sm font-medium">{{ $team->owner->name }}</span>
                        </div>
                    </div>
    
                    <div class="px-6 pb-6">
                        <button class="w-full py-2 px-4 bg-teal-600 text-white font-medium rounded-lg hover:bg-teal-700 focus:ring focus:ring-teal-300">
                            <i class="fas fa-user-plus mr-2"></i> Invite Members
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        document.querySelectorAll('[data-modal-toggle]').forEach(button => {
            button.addEventListener('click', function () {
                const target = document.getElementById(this.getAttribute('data-modal-toggle'));
                target.classList.toggle('hidden');
            });
        });
    </script>
    
</body>
</html>
