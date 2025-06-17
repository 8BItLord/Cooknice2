<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'Cooknice')</title>

        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('build/assets/app-CMmxYR91.css') }}" >
        <link rel="icon" href="{{ asset('gambar/fixlogo.png') }}" type="image/png">
    </head>
    <body class="bg-[#F9E2AF]">
        @yield('content')
    </body>

</html>
