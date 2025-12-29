<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

<div class="min-h-screen flex flex-col items-center justify-start pt-10 px-4">

    <div class="w-full max-w-lg bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden">

        <div class="bg-gray-900 px-6 py-4">
            <h2 class="text-xl font-bold text-white">Create New Task</h2>
            <p class="text-gray-400 text-sm mt-1">Fill in the details below to add a new task.</p>
        </div>

        <form action="{{route('tasks.store')}}" method="POST" class="p-6 space-y-6">
            @csrf

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Task Title</label>
                <input
                    type="text"
                    id="title"
                    name="title"
                    placeholder="e.g., Fix Navigation Bar"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                    required
                >
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea
                    id="description"
                    name="description"
                    rows="4"
                    placeholder="Describe the task details..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
                ></textarea>
            </div>

            <!--<div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Initial Status</label>
                <div class="flex items-center space-x-6">

                    <div class="flex items-center">
                        <input
                            id="status_not_completed"
                            name="is_completed"
                            type="radio"
                            value="0"
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300"
                            checked
                        >
                        <label for="status_not_completed" class="ml-2 block text-sm text-gray-700 cursor-pointer">
                            Not Completed
                        </label>
                    </div>

                    <div class="flex items-center">
                        <input
                            id="status_completed"
                            name="is_completed"
                            type="radio"
                            value="1"
                            class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300"
                        >
                        <label for="status_completed" class="ml-2 block text-sm text-gray-700 cursor-pointer">
                            Completed
                        </label>
                    </div>
                </div>
            </div>-->

            <div class="flex items-center justify-end space-x-3 pt-4 border-t border-gray-100">
                <a href="{{route('tasks.index')}}"
                   class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 transition text-center"
                >
                    Cancel
                </a>
                <button
                    type="submit"
                    class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 shadow-sm transition"
                >
                    Save Task
                </button>
            </div>

        </form>
    </div>
</div>

</body>
</html><?php
