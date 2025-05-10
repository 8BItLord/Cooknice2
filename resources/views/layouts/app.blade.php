<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cooknice')</title>
    @vite('resources/css/app.css')
</head>
<body class="text-gray-800 min-h-screen flex flex-col" style="background-color: #F9E2AF;">
    <header class="bg-white shadow p-4">
        <h1 class="text-2xl font-bold text-center">Cooknice</h1>
    </header>

    <main class="flex-grow container mx-auto px-4 py-6">
        @yield('content')
    </main>

    <footer class="bg-white text-center text-sm py-4 border-t">
        &copy; {{ date('Y') }} Cooknice. All rights reserved.
    </footer>
</body>
</html>
