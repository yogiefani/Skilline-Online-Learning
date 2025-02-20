<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skilline - Online Learning Platform</title>
    @vite('resources/css/app.css')
</head>
<body class="">
    @include('components.header')
    <main class="relative">
        @yield('content')
    </main>
</body>
</html>