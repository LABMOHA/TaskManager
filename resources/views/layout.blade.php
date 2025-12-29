<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Tasks</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

<div class="container mx-auto px-4 py-10 max-w-4xl">

    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Project Tasks</h1>
            <p class="text-gray-500 mt-1">Overview of all current tasks and their status.</p>
        </div>

        <a href="{{route('tasks.create')}}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition shadow-sm inline-block">
            + New Task

        </a>
    </div>
  @yield('content')

</div>

</body>
</html>
