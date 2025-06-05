<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-950 to-blue-800 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white/95 backdrop-blur-sm p-8 rounded-2xl shadow-xl">
            <!-- Logo et Titre -->
            <div class="text-center">
                <h2 class="mt-6 text-3xl font-bold text-blue-900">
                    التحقق من البريد الإلكتروني
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    شكراً لتسجيلك! قبل البدء، هل يمكنك التحقق من عنوان بريدك الإلكتروني بالنقر على الرابط الذي أرسلناه إليك للتو؟ إذا لم تتلق البريد الإلكتروني، فسنقوم بإرسال رابط آخر لك.
                </p>
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600 bg-green-50 p-4 rounded-xl text-center">
                    تم إرسال رابط تحقق جديد إلى عنوان البريد الإلكتروني الذي قدمته أثناء التسجيل.
                </div>
            @endif

            <div class="mt-8 space-y-4">
                <form method="POST" action="{{ route('verification.send') }}" class="space-y-4">
                    @csrf
                    <button type="submit" 
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 transition-all duration-200 ease-in-out transform hover:-translate-y-0.5">
                        إعادة إرسال رابط التحقق
                    </button>
                </form>

                <form method="POST" action="{{ route('logout') }}" class="space-y-4">
                    @csrf
                    <button type="submit" 
                        class="w-full flex justify-center py-3 px-4 border border-gray-300 rounded-xl shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 transition-all duration-200 ease-in-out">
                        تسجيل الخروج
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
