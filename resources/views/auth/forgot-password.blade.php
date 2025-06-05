<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-950 to-blue-800 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white/95 backdrop-blur-sm p-8 rounded-2xl shadow-xl">
            <!-- Logo et Titre -->
            <div class="text-center">
                <h2 class="mt-6 text-3xl font-bold text-blue-900">
                    استعادة كلمة المرور
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    أدخل بريدك الإلكتروني وسنرسل لك رابطاً لإعادة تعيين كلمة المرور
                </p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}" class="mt-8 space-y-6">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('البريد الإلكتروني')" class="text-right" />
                    <div class="mt-1">
                        <x-text-input id="email" 
                            class="block w-full px-4 py-3 rounded-xl border-gray-300 shadow-sm focus:border-blue-600 focus:ring-blue-600 text-right" 
                            type="email" 
                            name="email" 
                            :value="old('email')" 
                            required 
                            autofocus 
                            placeholder="أدخل بريدك الإلكتروني" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-right" />
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" 
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 transition-all duration-200 ease-in-out transform hover:-translate-y-0.5">
                        إرسال رابط إعادة التعيين
                    </button>
                </div>

                <!-- Back to Login -->
                <div class="text-center mt-4">
                    <p class="text-sm text-gray-600">
                        <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-700 transition-colors duration-200">
                            العودة إلى تسجيل الدخول
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
