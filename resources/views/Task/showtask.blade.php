<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks Table</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">

    <!-- Sidebar -->
    @include("layouts.sidebar")

    <!-- Main Content -->
    <div class="lg:ml-72 p-8">
        <!-- Header Section -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Tasks Overview</h1>
            <p class="text-gray-500">Manage and track your tasks efficiently.</p>
        </div>

        <!-- Tasks Table -->
        <div class="overflow-x-auto bg-white shadow-lg rounded-xl">
            <table class="min-w-full text-left text-gray-700">
                <!-- Table Header -->
                <thead class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white uppercase text-sm">
                    <tr>
                        <th class="py-3 px-6">Task Name</th>
                        <th class="py-3 px-6">Description</th>
                        <th class="py-3 px-6">Status</th>
                        <th class="py-3 px-6">Priority</th>
                        <th class="py-3 px-6">Team</th>
                        <th class="py-3 px-6 text-right">Actions</th>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody>
                    @forelse ($Tasks as $Task)
                        <tr class="border-b hover:bg-indigo-50">
                            <!-- Task Name -->
                            <td class="py-4 px-6 font-medium">{{ $Task->name }}</td>

                            <!-- Description -->
                            <td class="py-4 px-6">{{ Str::limit($Task->description, 50, '...') }}</td>

                            <!-- Status -->
                            <td class="py-4 px-6">
                                <form id="status-form-{{ $Task->id }}" action="{{ route('task.update', $Task->id) }}" method="POST">
                                    @csrf
                                    @method('PUT') <!-- Ensure the HTTP method is PUT for updating -->
                                    <select 
                                        name="status" 
                                        class="px-3 py-1 rounded-full text-sm font-medium border-0 bg-opacity-50 
                                               @if($Task->status === 'Pending') bg-red-200 text-red-800 
                                               @elseif($Task->status === 'In_progress') bg-yellow-200 text-yellow-800 
                                               @else bg-green-200 text-green-800 @endif"
                                        onchange="document.getElementById('status-form-{{ $Task->id }}').submit();">
                                        <option value="Pending" @if($Task->status === 'Pending') selected @endif>Pending</option>
                                        <option value="In_progress" @if($Task->status === 'In_progress') selected @endif>In Progress</option>
                                        <option value="Done" @if($Task->status === 'Done') selected @endif>Done</option>
                                    </select>
                                </form>
                                
                                
                            </td>
                            
                            

                            <!-- Priority -->
                            <td class="py-4 px-6">
                                <span class="px-3 py-1 rounded-full text-sm font-medium 
                                    @if($Task->priority === 'High') bg-red-200 text-red-800 
                                    @elseif($Task->priority === 'Medium') bg-yellow-200 text-yellow-800 
                                    @else bg-green-200 text-green-800 @endif">
                                    {{ $Task->priority }}
                                </span>
                            </td>

                            <!-- Team -->
                            <td class="py-4 px-6 font-medium">
                                @if ($Task->team)
                                    {{ $Task->team->name }}
                                @else
                                    <span class="text-gray-500">No team assigned</span>
                                @endif
                            </td>

                            <!-- Actions -->
                            <td class="py-4 px-6 text-right flex space-x-3">
                                <!-- Edit Button -->
                                <a  class="px-4 py-2 text-sm text-white bg-blue-600 rounded-md hover:bg-blue-700 transition-all duration-200">
                                    Edit
                                </a>
                                <!-- Delete Button -->
                                <form method="POST" action="{{ route('tasks.destroy', $Task->id) }}" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 py-2 text-sm text-white bg-red-600 rounded-md hover:bg-red-700 transition-all duration-200">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <!-- No Tasks Found -->
                        <tr>
                            <td colspan="6" class="py-6 px-4 text-center text-gray-500">
                                No tasks found. Start by adding some tasks!
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
