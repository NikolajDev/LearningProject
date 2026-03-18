<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ isset($title) ? $title . ' - Chirper' : 'Chirper' }} </title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [data-theme="dark"] {
            --b2: 20 20 20;
            background-color: #2c2c2c !important;
        }
        body {
            background-color: #2c2c2c;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col font-sans">

    <nav class="navbar bg-base-100/50 backdrop-blur-md sticky top-0 z-50 border-b border-white/5">
        <div class="navbar-start">
            <a href="/" class="btn btn-ghost text-xl font-bold">🐦 Chirper</a>
        </div>
        <div class="navbar-end gap-2">
            <a href="#" class="btn btn-ghost btn-sm">Sign In</a>
            <a href="#" class="btn btn-primary btn-sm">Sign Up</a>
        </div>
    </nav>

    <main class="flex-1 container mx-auto px-4 py-8">
        {{ $slot }}
    </main>

    <footer class="footer footer-center p-10 bg-base-100 text-base-content/60 text-xs">
        <div>
            <p>© 2026 Chirper - Built with Laravel and ❤️</p>
        </div>
    </footer>
</body>
</html>