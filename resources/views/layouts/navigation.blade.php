<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نظام الرخصة</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Tajawal', sans-serif;
        }
        .rtl-dir {
            direction: rtl;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body class="rtl-dir">
<nav class="bg-gradient-to-r from-blue-600 to-blue-800 shadow-lg" dir="rtl">
    <!-- Barre de navigation principale -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <!-- Logo et liens de navigation -->
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center">
                        <div class="block h-10 w-auto fill-current text-white">
                            <!-- Remplacez ceci par votre logo -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 0v12h8V4H6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="mr-3 text-xl font-bold text-white hidden md:inline">نظام الرخصة</span>
                    </a>
                </div>
                <!-- Liens de navigation - Bureau -->
                <div class="hidden sm:flex sm:mr-10">
                    <div class="flex space-x-1 space-x-reverse">
                        @auth
                            @if(auth()->user()->usertype === 'admin')
                            <div class="relative group">
                                <a href="{{route('lwhatthakom')}}" class="px-4 py-2 rounded-lg text-sm font-medium text-white hover:bg-blue-700 transition duration-300 flex items-center">
                                    <span class="hidden md:inline">لوحة التحكم</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:hidden" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                    </svg>
                                </a>
                            </div>
                            @endif
                        @endauth
                        
                        <div class="relative group">
                            <a href="{{ route('demande') }}" class="px-4 py-2 rounded-lg text-sm font-medium text-white hover:bg-blue-700 transition duration-300 flex items-center">
                                <span class="hidden md:inline">تقديم طلب الرخصة</span>
                                <span class="md:hidden">📝</span>
                            </a>
                        </div>
                        
                        <div class="relative group">
                            <a href="{{ route('suivi') }}" class="px-4 py-2 rounded-lg text-sm font-medium text-white hover:bg-blue-700 transition duration-300 flex items-center">
                                <span class="hidden md:inline">تتبع الطلب</span>
                                <span class="md:hidden">🔎</span>
                            </a>
                        </div>
                        
                        <div class="relative group">
                            <a href="{{ route('license') }}" class="px-4 py-2 rounded-lg text-sm font-medium text-white hover:bg-blue-700 transition duration-300 flex items-center">
                                <span class="hidden md:inline">الرخصة الإلكترونية</span>
                                <span class="md:hidden">📄</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Côté droit - Menu utilisateur ou liens de connexion -->
             @auth
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <div class="relative group">
                    <button class="flex items-center space-x-1 text-sm font-medium text-white hover:text-blue-200 transition-colors duration-200">
                        <div class="flex items-center">
                            <span class="ml-1 hidden md:inline">اسم المستخدم</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    
                    <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 hidden group-hover:block">
                        <a href="/profile" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                            </svg>
                            الملف الشخصي
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                                </svg>
                                تسجيل الخروج
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @else 
            <div>
                <a href="{{ route('login') }}">login</a>
                <a href="{{ route('register') }}">register</a>
            </div>
            @endauth

            <!-- Bouton du menu mobile -->
            <div class="-ml-2 flex items-center sm:hidden">
                <button id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-blue-200 hover:bg-blue-700 focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path id="menu-icon-open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path id="menu-icon-close" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menu de navigation responsive -->
    <div id="mobile-menu" class="hidden sm:hidden bg-blue-700">
        <div class="pt-2 pb-3 space-y-1">
            @auth
                @if(auth()->user()->usertype === 'admin')
                <a href="/lwhatthakom" class="flex items-center text-white hover:bg-blue-600 px-4 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    لوحة التحكم
                </a>
                @endif
            @endauth
            
            <a href="/demande" class="flex items-center text-white hover:bg-blue-600 px-4 py-3">
                <span class="ml-2">📝</span>
                تقديم طلب الرخصة
            </a>
            <a href="/suivi" class="flex items-center text-white hover:bg-blue-600 px-4 py-3">
                <span class="ml-2">🔎</span>
                تتبع الطلب
            </a>
            <a href="/license" class="flex items-center text-white hover:bg-blue-600 px-4 py-3">
                <span class="ml-2">📄</span>
                الرخصة الإلكترونية
            </a>
        </div>

        <!-- Options paramètres responsive -->
        <div class="pt-4 pb-1 border-t border-blue-600">
            <div class="px-4">
                <div class="font-medium text-base text-white">اسم المستخدم</div>
                <div class="font-medium text-sm text-blue-200">user@example.com</div>
            </div>

            <div class="mt-3 space-y-1">
                <a href="/profile" class="flex items-center text-white hover:bg-blue-600 px-4 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                    </svg>
                    الملف الشخصي
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left flex items-center text-white hover:bg-blue-600 px-4 py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                        </svg>
                        تسجيل الخروج
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>

<script>
    // Gestion du menu mobile
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIconOpen = document.getElementById('menu-icon-open');
        const menuIconClose = document.getElementById('menu-icon-close');
        
        if (mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.remove('hidden');
            menuIconOpen.classList.add('hidden');
            menuIconClose.classList.remove('hidden');
        } else {
            mobileMenu.classList.add('hidden');
            menuIconOpen.classList.remove('hidden');
            menuIconClose.classList.add('hidden');
        }
    });
</script>
</body>
</html>