@extends('layout')

@section('content')

    <h1 class="text-lg font-semibold text-amber-800 mb-4">Tasks Not Completed</h1>
    <div class="grid gap-4 border-amber-300 border-2 rounded-2xl p-4 mb-8">

        @forelse($tasks->where('is_completed', false) as $task)
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-lg font-semibold text-gray-900">{{$task->title}}</h3>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium text-red-800 bg-red-100">
                        <span class="w-2 h-2 mr-1.5 bg-red-500 rounded-full"></span>
                        Non Completed
                    </span>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                    {{$task->description}}
                </p>

                <div class="flex justify-between items-center">
                    <div class="flex space-x-2">
                        <a href="{{route('tasks.edit', $task)}}" class="text-white bg-blue-400 hover:bg-blue-500 font-medium text-sm transition-colors rounded-md px-3 py-2">
                            Edit
                        </a>
                        <form action="{{route('tasks.destroy', $task)}}" method="post" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white bg-red-400 hover:bg-red-500 text-sm font-medium transition-colors rounded-md px-3 py-2">
                                Delete
                            </button>
                        </form>
                    </div>

                    <div class="flex items-center">
                        <form action="{{ route('tasks.changestatus', $task) }}" method="post" id="form-complete-{{$task->id}}">
                            @csrf
                            @method('PATCH')
                            <label class="flex items-center cursor-pointer space-x-2">
                                <input
                                    type="checkbox"
                                    name="is_completed"
                                    onchange="document.getElementById('form-complete-{{$task->id}}').submit()"
                                    class="h-5 w-5 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                                >
                                <span class="text-sm font-medium text-gray-700">Mark Completed</span>
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-500 text-center py-4">Great job! No pending tasks.</p>
        @endforelse
    </div>


    <h1 class="text-lg font-semibold text-green-800 mb-4">Tasks Completed</h1>
    <div class="grid gap-4 border-green-300 border-2 rounded-2xl p-4 opacity-75">

        @forelse($tasks->where('is_completed', true) as $task)
            <div class="bg-gray-50 p-6 rounded-xl shadow-sm border border-gray-200">
                <div class="flex justify-between items-start mb-2">
                    {{-- Title with strikethrough for visual effect --}}
                    <h3 class="text-lg font-semibold text-gray-500 line-through">{{$task->title}}</h3>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium text-green-800 bg-green-100">
                        <span class="w-2 h-2 mr-1.5 bg-green-500 rounded-full"></span>
                        Completed
                    </span>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed mb-4">
                    {{$task->description}}
                </p>

                <div class="flex justify-between items-center">
                    {{-- Delete Button Only (Optional: Can remove Edit button for completed tasks) --}}
                    <div class="flex space-x-2">
                        <form action="{{route('tasks.destroy', $task)}}" method="post" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white bg-gray-400 hover:bg-red-500 text-sm font-medium transition-colors rounded-md px-3 py-2">
                                Delete
                            </button>
                        </form>
                    </div>


                </div>
            </div>
        @empty
            <p class="text-gray-500 text-center py-4">No completed tasks yet.</p>
        @endforelse
    </div>

@endsection
