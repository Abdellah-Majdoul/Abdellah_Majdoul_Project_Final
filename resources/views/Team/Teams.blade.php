<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teams Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body class="bg-gray-100">
    <div>
        @include("layouts.sidebar")

        <!-- Display Session Messages -->
       

        <!-- Main Content -->
        <div class="lg:ml-72 p-6">
            @if(session('errors'))
            <div id="errors-message" class="bg-red-500 text-white p-4 rounded-lg mb-4 animate__animated animate__fadeIn">
                {{ session('errors') }}
            </div>
            @endif
            @if(session('error'))
            <div id="errorss-message" class="bg-red-500 text-white p-4 rounded-lg mb-4 animate__animated animate__fadeIn">
                {{ session('error') }}
            </div>
            @endif
    
            @if(session('success'))
            <div id="success-message" class="bg-green-500 text-white p-4 rounded-lg mb-4 animate__animated animate__fadeIn">
                {{ session('success') }}
            </div>
            @endif
            <div class="container mx-auto px-4 py-8">
                <!-- Header -->
                <div class="flex justify-between items-center mb-8">
                    <h1 class="text-3xl font-bold text-gray-900">Teams</h1>
                    <!-- Create Team Button -->
                   
                </div>
                <div id="modal1" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-800 bg-opacity-70">
                    <div class="modal-content w-full max-w-md bg-white rounded-xl shadow-lg transform transition-all">
                        <div class="flex justify-between items-center p-4 border-b border-gray-200">
                            <h2 class="text-xl font-semibold text-gray-800">Create New Task</h2>
                            <button id="closeModal1" class="text-gray-500 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                
                        <form method="POST" action="{{ route('task.store') }}" class="px-6 py-4">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="team_id" value="{{ Auth::user()->id }}">
                
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-gray-700">Task Name</label>
                                <input type="text" name="name" id="name"
                                    class="w-full px-4 py-2 text-sm rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500"
                                    placeholder="Enter task name" required>
                            </div>
                
                            <div class="mb-4">
                                <label for="description" class="block text-sm font-medium text-gray-700">Task Description</label>
                                <textarea name="description" id="description"
                                    class="w-full px-4 py-2 text-sm rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500"
                                    placeholder="Describe your task" rows="4" required></textarea>
                            </div>
                
                            <div class="mb-4 flex space-x-4">
                                <div class="w-1/2">
                                    <label for="start" class="block text-sm font-medium text-gray-700">Start Date</label>
                                    <input type="datetime-local" name="start" id="start"
                                        class="w-full px-4 py-2 text-sm rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500" required>
                                </div>
                                <div class="w-1/2">
                                    <label for="end" class="block text-sm font-medium text-gray-700">End Date</label>
                                    <input type="datetime-local" name="end" id="end"
                                        class="w-full px-4 py-2 text-sm rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500" required>
                                </div>
                            </div>
                
                            <div class="mb-4">
                                <label for="priority" class="block text-sm font-medium text-gray-700">Priority</label>
                                <select name="priority" id="priority"
                                    class="w-full px-4 py-2 text-sm rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500">
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </div>
                
                            <div>
                                <button type="submit"
                                    class="w-full py-2 text-white bg-teal-600 rounded-lg hover:bg-teal-700 transition duration-300">
                                    Create Task
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Teams Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($teams as $team)
                        <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                            <div class="p-6">
                                <div class="flex justify-between items-center">
                                    <h2 class="text-xl font-semibold text-gray-800">{{ $team->name }}</h2>
                                    <button 
                                        class="flex items-center justify-center text-gray-500 hover:text-black focus:outline-none transition-colors duration-200"
                                        >
                                        <i class="bi bi-arrow-right-circle-fill text-2xl"></i>
                                    </button>
                                </div>
                                <p class="text-sm text-gray-500 mb-4 line-clamp-2">{{ $team->description }}</p>
                                <div class="flex items-center">
                                    <img src="{{ asset('storage/images/'.$team->owner->image) }}" 
                                         alt="{{ $team->owner->name }}" 
                                         class="w-10 h-10 rounded-full ring-2 ring-gray-200 mr-3">
                                    <span class="text-sm font-medium text-gray-700">{{ $team->owner->name }}</span>
                                </div>
                            </div>
                            <div class="px-6 pb-6 flex justify-end gap-4">
                                <button 
                                    class="bg-black text-white text-sm font-medium rounded-md px-4 py-2 hover:bg-gray-900 transition"
                                    onclick="openModal('modal-{{ $team->id }}')">
                                    Invite Members
                                </button>
                                <button id="openTaskModal1"
                                    class="bg-gray-200 text-gray-700 text-sm font-medium rounded-md px-4 py-2 hover:bg-gray-300 transition">
                                    Add Task
                                </button>
                            </div>
                            
                        </div>

                        <!-- Confirmation Modal -->
                        <div id="modal-{{ $team->id }}" class="modal hidden fixed inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center px-4">
                            <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
                                <div class="flex justify-end">
                                    <button onclick="closeModal('modal-{{ $team->id }}')" class="text-gray-400 hover:text-gray-900 focus:outline-none">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="text-center">
                                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Invite a Member</h2>
                                    <form action="{{ route('invitation.store', $team->id) }}" method="post">
                                        @csrf
                                        <input 
                                            name="email"
                                            type="email" 
                                            placeholder="Enter email address" 
                                            class="w-full border border-gray-300 rounded-md p-2 mb-4 focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                                            required>
                                        <div class="flex justify-center gap-4">
                                            <button type="submit" class="px-4 py-2 bg-black text-white rounded-lg hover:bg-gray-800 transition">Send</button>
                                            <button type="button" onclick="closeModal('modal-{{ $team->id }}')" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

     <!-- Scripts -->
     <script>
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }

        document.onkeydown = function(event) {
            if (event.key === "Escape") {
                document.querySelectorAll('.modal').forEach(modal => modal.classList.add('hidden'));
            }
        };



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
    </script>
</body>
</html>
