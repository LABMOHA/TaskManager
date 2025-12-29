
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <div class="min-h-screen flex flex-col items-center justify-start pt-10 px-4">

        <div class="w-full max-w-lg bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden">

            <div class="bg-blue-900 px-6 py-4 flex justify-between items-center">
                <div>
                    <h2 class="text-xl font-bold text-white">Edit Task</h2>
                    <p class="text-blue-200 text-sm mt-1">Update the task details below.</p>
                </div>
                <button type="button" class="text-red-300 hover:text-white transition text-sm font-medium">
Delete
                </button>
            </div>

            <form action="{{route('tasks.update',$task)}}" method="POST" class="p-6 space-y-6">
@csrf
@method('PUT')
                <input type="hidden" name="id" value="12">

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Task Title</label>
                    <input
                        type="text"
                        id="title"
                        name="title"
                        value="{{$task->title}}"
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
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-colors"
>{{$task->description}}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2"> Status</label>

                </div>

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
Update Task
</button>
                </div>

            </form>
        </div>
    </div>

</body>
</html>
