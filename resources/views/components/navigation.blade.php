<nav x-data="{ open: false }" dir="rtl" class="bg-gradient-to-r from-blue-600 to-blue-800 shadow-lg">
    <!-- Barre de navigation principale -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <!-- Logo et liens de navigation -->
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center">
                        <div class="w-12 h-12 text-white transform hover:scale-110 transition-transform duration-300">
                            <x-application-logo class="w-full h-full" />
                        </div>
                        <span class="mr-3 text-xl font-bold text-white hidden md:inline">بلدية الرباط</span>
                    </a>
                </div>

                <!-- Liens de navigation - Bureau -->
                <div class="hidden sm:flex sm:items-center sm:mr-6">
                    <div class="flex space-x-4 space-x-reverse">
                        <x-nav-link href="{{ route('dashboard') }}" class="px-4 py-2 rounded-lg text-sm font-medium text-white hover:bg-blue-700 transition duration-300">
                            <span class="hidden md:inline">{{ __('لوحة التحكم') }}</span>
                            <span class="md:hidden">📊</span>
                        </x-nav-link>
                        <x-nav-link href="{{ route('demande') }}" class="px-4 py-2 rounded-lg text-sm font-medium text-white hover:bg-blue-700 transition duration-300">
                            <span class="hidden md:inline">{{ __('تقديم طلب') }}</span>
                            <span class="md:hidden">📝</span>
                        </x-nav-link>
                        <x-nav-link href="{{ route('suivi') }}" class="px-4 py-2 rounded-lg text-sm font-medium text-white hover:bg-blue-700 transition duration-300">
                            <span class="hidden md:inline">{{ __('تتبع الطلب') }}</span>
                            <span class="md:hidden">🔍</span>
                        </x-nav-link>
                        <x-nav-link href="{{ route('license') }}" class="px-4 py-2 rounded-lg text-sm font-medium text-white hover:bg-blue-700 transition duration-300">
                            <span class="hidden md:inline">{{ __('الرخصة الإلكترونية') }}</span>
                            <span class="md:hidden">📄</span>
                        </x-nav-link>
                    </div>
                </div>
            </div>

            <!-- Côté droit - Menu utilisateur ou liens de connexion -->
            @auth
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="left" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center space-x-1 text-sm font-medium text-white hover:text-blue-200 transition-colors duration-200">
                                <div class="flex items-center">
                                    <span class="ml-1 hidden md:inline">{{ Auth::user()->name }}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')" class="flex items-center text-gray-700 hover:bg-blue-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                </svg>
                                {{ __('الملف الشخصي') }}
                            </x-dropdown-link>

                            <!-- Déconnexion -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="flex items-center text-gray-700 hover:bg-blue-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                                    </svg>
                                    {{ __('تسجيل الخروج') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @else
                <div class="hidden sm:flex sm:items-center sm:ml-6 space-x-4 rtl:space-x-reverse">
                    <a href="{{ route('login') }}" class="text-sm font-medium text-white hover:text-blue-200 transition-colors duration-200">
                        {{ __('تسجيل الدخول') }}
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-sm font-medium bg-white text-blue-600 px-4 py-2 rounded-lg hover:bg-blue-50 transition-colors duration-200">
                            {{ __('تسجيل جديد') }}
                        </a>
                    @endif
                </div>
            @endauth

            <!-- Bouton du menu mobile -->
            <div class="-ml-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-blue-200 hover:bg-blue-700 focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menu de navigation responsive -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="flex items-center text-white hover:bg-blue-600 px-4 py-3">
                <span class="ml-2">📊</span>
                {{ __('لوحة التحكم') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('demande')" :active="request()->routeIs('demande')" class="flex items-center text-white hover:bg-blue-600 px-4 py-3">
                <span class="ml-2">📝</span>
                {{ __('تقديم طلب') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('suivi')" :active="request()->routeIs('suivi')" class="flex items-center text-white hover:bg-blue-600 px-4 py-3">
                <span class="ml-2">🔍</span>
                {{ __('تتبع الطلب') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('license')" :active="request()->routeIs('license')" class="flex items-center text-white hover:bg-blue-600 px-4 py-3">
                <span class="ml-2">📄</span>
                {{ __('الرخصة الإلكترونية') }}
            </x-responsive-nav-link>
        </div>

        <!-- Menu utilisateur responsive -->
        @auth
            <div class="pt-4 pb-3 border-t border-blue-600">
                <div class="flex items-center px-4">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full border-2 border-blue-100" src="https://ui-avatars.com/api/?name={{ auth()->user()->first_name }}+{{ auth()->user()->last_name }}&background=3b82f6&color=fff" alt="">
                    </div>
                    <div class="mr-3">
                        <div class="text-base font-medium text-white">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</div>
                        <div class="text-sm font-medium text-blue-200">{{ auth()->user()->email }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')" class="flex items-center text-white hover:bg-blue-600 px-4 py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg>
                        {{ __('الملف الشخصي') }}
                    </x-responsive-nav-link>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="flex items-center text-white hover:bg-blue-600 px-4 py-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                            </svg>
                            {{ __('تسجيل الخروج') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @else
            <div class="pt-2 pb-3 space-y-1 border-t border-blue-600">
                <x-responsive-nav-link :href="route('login')" class="flex items-center justify-center text-white hover:bg-blue-600 px-4 py-3">
                    {{ __('تسجيل الدخول') }}
                </x-responsive-nav-link>
                @if (Route::has('register'))
                <x-responsive-nav-link :href="route('register')" class="flex items-center justify-center bg-white text-blue-600 hover:bg-blue-50 px-4 py-3 mx-4 rounded-lg">
                    {{ __('تسجيل جديد') }}
                </x-responsive-nav-link>
                @endif
            </div>
        @endauth
    </div>
</nav>