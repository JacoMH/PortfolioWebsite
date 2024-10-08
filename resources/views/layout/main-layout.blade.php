<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- CSS and JS -->
</head>
<body class="bg-gray-100">
    <header>
        @include('components.navigation-bar') <!-- navigation bar -->
    </header>

    <main>
        @yield('content') <!-- Content from child views will be injected here -->
    </main>

    <footer>
        <p class="text-center p-4">© {{ date('Y') }} Jacob Heyes. LinkedIn. GitHub.</p>
    </footer>
</body>
</html>