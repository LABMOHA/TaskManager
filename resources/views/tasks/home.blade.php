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
        <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition shadow-sm">
            + New Task
        </button>
    </div>

    <div class="grid gap-4">

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <div class="flex justify-between items-start mb-2">
                <h3 class="text-lg font-semibold text-gray-900">Database Migration</h3>
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        <span class="w-2 h-2 mr-1.5 bg-green-500 rounded-full"></span>
                        Completed
                    </span>
            </div>
            <p class="text-gray-600 text-sm leading-relaxed">
                Set up the initial database schema and run the migrations for the users and tasks tables.
            </p>
            <div class="mt-4 flex items-center text-xs text-gray-400 font-medium">
                <span>Due: Oct 24, 2023</span>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <div class="flex justify-between items-start mb-2">
                <h3 class="text-lg font-semibold text-gray-900">API Authentication</h3>
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                        <span class="w-2 h-2 mr-1.5 bg-blue-500 rounded-full"></span>
                        In Progress
                    </span>
            </div>
            <p class="text-gray-600 text-sm leading-relaxed">
                Implement JWT authentication for the API endpoints to ensure secure data access for mobile clients.
            </p>
            <div class="mt-4 flex items-center text-xs text-gray-400 font-medium">
                <span>Due: Dec 01, 2023</span>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <div class="flex justify-between items-start mb-2">
                <h3 class="text-lg font-semibold text-gray-900">Frontend Dashboard UI</h3>
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                        <span class="w-2 h-2 mr-1.5 bg-yellow-500 rounded-full"></span>
                        Pending
                    </span>
            </div>
            <p class="text-gray-600 text-sm leading-relaxed">
                Design the main dashboard layout using Tailwind CSS including the sidebar and top navigation bar.
            </p>
            <div class="mt-4 flex items-center text-xs text-gray-400 font-medium">
                <span>Due: Dec 15, 2023</span>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition opacity-75">
            <div class="flex justify-between items-start mb-2">
                <h3 class="text-lg font-semibold text-gray-700 line-through">Legacy Data Import</h3>
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-600">
                        Cancelled
                    </span>
            </div>
            <p class="text-gray-500 text-sm leading-relaxed">
                Importing data from the old XML system. This has been deprecated in favor of a fresh start.
            </p>
        </div>

    </div>
</div>

</body>
</html>
