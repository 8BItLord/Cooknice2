<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cooknice')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="text-gray-800 min-h-screen flex flex-col" style="background-color: #F9E2AF;">
    <header class="bg-white shadow p-4">
        <h1 class="text-2xl font-bold text-center">Cooknice</h1>
    </header>

    <main class="flex-grow p-[0.3cm] bg-[#F9E2AF]">
        @yield('content')
    </main>

    <footer class="bg-white text-center text-sm py-4 border-t">
        &copy; {{ date('Y') }} Cooknice. All rights reserved.
    </footer>
</body>
</html>
