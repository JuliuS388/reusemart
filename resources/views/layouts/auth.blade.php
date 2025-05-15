<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('section', 'Login')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <main class="w-full h-screen">
        @yield('content')

    </main>

</body>

</html>