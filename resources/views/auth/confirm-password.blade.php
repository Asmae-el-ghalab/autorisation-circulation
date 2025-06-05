<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-950 to-blue-800 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white/95 backdrop-blur-sm p-8 rounded-2xl shadow-xl">
            <!-- Logo et Titre -->
            <div class="text-center">
                <h2 class="mt-6 text-3xl font-bold text-blue-900">
                    تأكيد كلمة المرور
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    هذه منطقة آمنة من التطبيق. يرجى تأكيد كلمة المرور قبل المتابعة.
                </p>
            </div>

            <form method="POST" action="{{ route('password.confirm') }}" class="mt-8 space-y-6">
                @csrf

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('كلمة المرور')" class="text-right" />
                    <div class="mt-1">
                        <x-text-input id="password" 
                            class="block w-full px-4 py-3 rounded-xl border-gray-300 shadow-sm focus:border-blue-600 focus:ring-blue-600 text-right" 
                            type="password"
                            name="password"
                            required 
                            autocomplete="current-password" 
                            placeholder="أدخل كلمة المرور" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-right" />
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" 
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 transition-all duration-200 ease-in-out transform hover:-translate-y-0.5">
                        تأكيد
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
