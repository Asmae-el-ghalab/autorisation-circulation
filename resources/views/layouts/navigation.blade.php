<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بلدية الرباط</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body {
            font-family: 'El Messiri', sans-serif;
        }
        .rtl-dir {
            direction: rtl;
        }
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            right: 0;
            background-color: currentColor;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .dropdown-menu {
            transform-origin: top;
            transform: scale(0.95);
            opacity: 0;
            visibility: hidden;
            transition: all 0.2s ease;
        }
        .group:hover .dropdown-menu {
            transform: scale(1);
            opacity: 1;
            visibility: visible;
        }
        .mobile-menu {
            transition: all 0.3s ease-in-out;
            transform: translateY(-100%);
        }
        .mobile-menu.show {
            transform: translateY(0);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeIn {
            animation: fadeIn 0.3s ease-out;
        }
        .logo-gradient {
            background: linear-gradient(135deg, #3b82f6 0%, #6366f1 100%);
        }
        .nav-gradient {
            background: linear-gradient(135deg, #ffffff 0%, #f0f9ff 100%);
        }
    </style>
</head>
<body class="rtl-dir bg-gray-50">
<div x-data="{ isOpen: false }">
    <nav class="nav-gradient shadow-lg border-b border-gray-200 fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <!-- Logo -->
                    <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 space-x-reverse transition duration-300 transform hover:scale-105">
                        <div class="w-12 h-12 text-blue-800">
                             <x-application-logo class="w-full h-full" />
                         </div>
                        <span class="text-xl font-bold text-blue-800 hidden md:inline">جماعة الرباط</span>
                    </a>

                    <!-- Navigation Links -->
                    <div class="hidden sm:mr-10 sm:flex sm:space-x-4 sm:space-x-reverse">
                        @auth
                            @if(auth()->user()->usertype === 'admin')
                            <a href="{{route('lwhatthakom')}}" class="nav-link px-4 py-2 text-blue-700 hover:text-blue-900 text-sm font-medium transition-all duration-300 flex items-center space-x-2 space-x-reverse">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>
                                <span>لوحة التحكم</span>
                            </a>
                            @endif
                        @endauth

                        <a href="{{ route('demande') }}" class="nav-link px-4 py-2 text-blue-700 hover:text-blue-900 text-sm font-medium transition-all duration-300 flex items-center space-x-2 space-x-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                            <span>تقديم طلب الرخصة</span>
                        </a>

                        <a href="{{ route('suivi') }}" class="nav-link px-4 py-2 text-blue-700 hover:text-blue-900 text-sm font-medium transition-all duration-300 flex items-center space-x-2 space-x-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>تتبع الطلب</span>
                        </a>

                        <a href="{{ route('license') }}" class="nav-link px-4 py-2 text-blue-700 hover:text-blue-900 text-sm font-medium transition-all duration-300 flex items-center space-x-2 space-x-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <span>الرخصة الإلكترونية</span>
                        </a>
                    </div>
                </div>

                <!-- User Menu -->
                <div class="flex items-center">
                    @auth
                    <div class="relative group ml-3" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center space-x-3 space-x-reverse bg-white px-4 py-2 rounded-lg text-blue-800 hover:bg-blue-50 transition duration-300 shadow-sm border border-gray-200">
                            <img class="h-8 w-8 rounded-full object-cover border-2 border-blue-100" src="https://ui-avatars.com/api/?name={{ auth()->user()->first_name }}+{{ auth()->user()->last_name }}&background=3b82f6&color=fff" alt="User avatar">
                            <div class="text-right">
                                <div class="text-sm font-medium">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</div>
                                <div class="text-xs text-blue-600">{{ auth()->user()->email }}</div>
                            </div>
                            <svg class="w-5 h-5 text-blue-600 transition-transform duration-200" :class="{'rotate-180': open}" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div x-show="open" 
                             @click.away="open = false"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 scale-95"
                             x-transition:enter-end="opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="opacity-100 scale-100"
                             x-transition:leave-end="opacity-0 scale-95"
                             class="absolute right-0 mt-2 w-56 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 z-50">
                            <a href="/profile" class="flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-blue-50 transition duration-150 border-b border-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                </svg>
                                الملف الشخصي
                            </a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-blue-50 transition duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                                    </svg>
                                    تسجيل الخروج
                                </button>
                            </form>
                        </div>
                    </div>
                    @else
                    <div class="flex items-center space-x-4 space-x-reverse">
                        <a href="{{ route('login') }}" class="text-blue-700 hover:text-blue-900 px-4 py-2 text-sm font-medium transition-colors duration-300">تسجيل الدخول</a>
                        <a href="{{ route('register') }}" class="bg-blue-600 text-white hover:bg-blue-700 px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-300 shadow-md">إنشاء حساب</a>
                    </div>
                    @endauth

                    <!-- Mobile menu button -->
                    <button @click="isOpen = !isOpen" class="sm:hidden ml-2 p-2 rounded-md text-blue-700 hover:text-blue-900 hover:bg-blue-100 focus:outline-none transition duration-150">
                        <svg class="h-6 w-6" :class="{'hidden': isOpen, 'block': !isOpen }" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="h-6 w-6" :class="{'block': isOpen, 'hidden': !isOpen }" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div x-show="isOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 transform -translate-y-2"
             x-transition:enter-end="opacity-100 transform translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 transform translate-y-0"
             x-transition:leave-end="opacity-0 transform -translate-y-2"
             class="sm:hidden bg-white shadow-lg">
            <div class="px-2 pt-2 pb-3 space-y-1">
                @auth
                    @if(auth()->user()->usertype === 'admin')
                    <a href="/lwhatthakom" class="flex items-center text-blue-700 hover:bg-blue-50 px-3 py-3 rounded-md text-base font-medium transition duration-150 border-b border-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg>
                        لوحة التحكم
                    </a>
                    @endif

                    <a href="/demande" class="flex items-center text-blue-700 hover:bg-blue-50 px-3 py-3 rounded-md text-base font-medium transition duration-150 border-b border-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                        تقديم طلب الرخصة
                    </a>

                    <a href="/suivi" class="flex items-center text-blue-700 hover:bg-blue-50 px-3 py-3 rounded-md text-base font-medium transition duration-150 border-b border-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        تتبع الطلب
                    </a>

                    <a href="/license" class="flex items-center text-blue-700 hover:bg-blue-50 px-3 py-3 rounded-md text-base font-medium transition duration-150 border-b border-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        الرخصة الإلكترونية
                    </a>

                    <div class="pt-4 pb-3">
                        <div class="flex items-center px-3">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full border-2 border-blue-100" src="https://ui-avatars.com/api/?name={{ auth()->user()->first_name }}+{{ auth()->user()->last_name }}&background=3b82f6&color=fff" alt="">
                            </div>
                            <div class="mr-3">
                                <div class="text-base font-medium text-blue-800">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</div>
                                <div class="text-sm font-medium text-blue-600">{{ auth()->user()->email }}</div>
                            </div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <a href="/profile" class="flex items-center text-blue-700 hover:bg-blue-50 px-3 py-3 rounded-md text-base font-medium transition duration-150 border-b border-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                </svg>
                                الملف الشخصي
                            </a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full flex items-center text-blue-700 hover:bg-blue-50 px-3 py-3 rounded-md text-base font-medium transition duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                                    </svg>
                                    تسجيل الخروج
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <div class="px-3 py-4 space-y-2">
                        <a href="{{ route('login') }}" class="flex justify-center text-blue-700 hover:bg-blue-50 px-3 py-3 rounded-md text-base font-medium transition duration-150 border border-blue-100">تسجيل الدخول</a>
                        <a href="{{ route('register') }}" class="flex justify-center bg-blue-600 text-white hover:bg-blue-700 px-3 py-3 rounded-md text-base font-medium transition duration-150 shadow-md">إنشاء حساب</a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>
</div>
<div class="h-20"></div> <!-- Spacer to account for fixed navigation -->

<script>
    // Add any additional JavaScript here if needed
</script>
</body>
</html>