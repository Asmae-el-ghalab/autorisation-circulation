<!DOCTYPE html>
<html dir="rtl" lang="ar">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>نظام الرخصة</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <style>
            body {
                font-family: 'Tajawal', sans-serif;
            }
            .rtl-dir {
                direction: rtl;
            }
        </style>
        @stack('styles')
    </head>
    <body class="rtl-dir bg-gray-50">
        @include('layouts.navigation')
        
        <main>
            @yield('content')
        </main>

        @stack('scripts')
    </body>
</html>
