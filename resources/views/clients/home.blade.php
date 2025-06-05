@extends('layouts.app')

@section('content')
<div class="relative min-h-screen">
    <!-- Hero Section avec Video Background -->
    <div class="relative h-screen">
        <!-- Video Background avec Overlay -->
        <div class="absolute inset-0 overflow-hidden">
            <video class="absolute min-w-full min-h-full object-cover" autoplay loop muted playsinline>
                <source src="{{ asset('videos/background.mp4') }}" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-blue-800/80"></div>
        </div>

        <!-- Contenu Hero -->
        <div class="relative flex items-center justify-center h-full px-4">
            <div class="text-center transform transition-all duration-500 hover:scale-105">
                <!-- Logo -->
                <div class="mb-8">
                    <div class="w-32 h-32 mx-auto text-white transform hover:scale-110 transition-transform duration-300">
                        <x-application-logo class="w-full h-full" />
                    </div>
                </div>
                <h1 class="text-4xl sm:text-6xl font-bold text-white mb-6 animate-fade-in">
                    منصة طلبات رخص السير
                </h1>
                <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto animate-fade-in-delay">
                    خدمة رقمية متكاملة لإدارة وتتبع طلبات رخص السير الخاصة بالشاحنات في مدينة الرباط
                </p>
                <div class="space-x-4 space-x-reverse animate-fade-in-delay-2">
                    @auth
                        <a href="{{ route('demande') }}" class="inline-flex items-center px-8 py-4 border border-transparent text-lg font-medium rounded-xl text-[#1E3A8A] bg-white hover:bg-blue-50 transition duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            ابدأ طلبك الآن
                        </a>
                    @else
                        <a href="{{ route('register') }}" class="inline-flex items-center px-8 py-4 border border-transparent text-lg font-medium rounded-xl text-[#1E3A8A] bg-white hover:bg-blue-50 transition duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            إنشاء حساب جديد
                        </a>
                        <a href="{{ route('login') }}" class="inline-flex items-center px-8 py-4 border border-white text-lg font-medium rounded-xl text-white hover:bg-white/10 transition duration-300 transform hover:scale-105">
                            تسجيل الدخول
                        </a>
                    @endauth
                </div>
            </div>
        </div>

        <!-- Wave Shape -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg class="w-full h-auto" viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1440 120V0C1252.89 80 1019.89 120 720 120C420.107 120 187.107 80 0 0V120H1440Z" fill="white"/>
            </svg>
        </div>
    </div>

    <!-- Section Statistiques -->
    <div class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4 animate-fade-in">إحصائيات خدماتنا</h2>
                <p class="text-xl text-gray-600 animate-fade-in-delay">نفخر بتقديم خدمة سريعة وفعالة لجميع عملائنا</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 text-center transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl animate-fade-in">
                    <div class="text-5xl font-bold text-blue-600 mb-3">+5000</div>
                    <div class="text-lg text-gray-600">طلب تمت معالجته</div>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 text-center transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl animate-fade-in-delay">
                    <div class="text-5xl font-bold text-blue-600 mb-3">98%</div>
                    <div class="text-lg text-gray-600">نسبة رضا العملاء</div>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 text-center transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl animate-fade-in-delay-2">
                    <div class="text-5xl font-bold text-blue-600 mb-3">24/7</div>
                    <div class="text-lg text-gray-600">دعم متواصل</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Caractéristiques -->
    <div class="py-20 bg-gradient-to-b from-white to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4 animate-fade-in">مميزات المنصة</h2>
                <p class="text-xl text-gray-600 animate-fade-in-delay">نقدم لكم تجربة رقمية متكاملة وسهلة الاستخدام</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 animate-fade-in">
                    <div class="text-blue-600 text-4xl mb-6">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">معالجة سريعة</h3>
                    <p class="text-lg text-gray-600">نضمن معالجة طلبكم في أسرع وقت ممكن مع الحفاظ على الجودة</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 animate-fade-in-delay">
                    <div class="text-blue-600 text-4xl mb-6">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">متابعة إلكترونية</h3>
                    <p class="text-lg text-gray-600">تتبع حالة طلبك مباشرة عبر المنصة في أي وقت</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 animate-fade-in-delay-2">
                    <div class="text-blue-600 text-4xl mb-6">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">آمن وموثوق</h3>
                    <p class="text-lg text-gray-600">نضمن حماية بياناتكم الشخصية وسرية معلوماتكم</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Comment ça marche -->
    <div class="py-20 bg-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4 animate-fade-in">كيف تعمل المنصة؟</h2>
                <p class="text-xl text-gray-600 animate-fade-in-delay">خطوات بسيطة للحصول على رخصتك</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="relative">
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 animate-fade-in">
                        <div class="text-blue-600 text-4xl mb-6">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">إنشاء حساب</h3>
                        <p class="text-lg text-gray-600">قم بإنشاء حساب جديد في المنصة</p>
                    </div>
                    <div class="hidden lg:block absolute top-1/2 left-full w-16 border-t-2 border-blue-200 -translate-y-1/2"></div>
                </div>

                <!-- Step 2 -->
                <div class="relative">
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 animate-fade-in-delay">
                        <div class="text-blue-600 text-4xl mb-6">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">تقديم الطلب</h3>
                        <p class="text-lg text-gray-600">املأ نموذج الطلب بالمعلومات المطلوبة</p>
                    </div>
                    <div class="hidden lg:block absolute top-1/2 left-full w-16 border-t-2 border-blue-200 -translate-y-1/2"></div>
                </div>

                <!-- Step 3 -->
                <div class="relative">
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 animate-fade-in-delay-2">
                        <div class="text-blue-600 text-4xl mb-6">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">المعالجة</h3>
                        <p class="text-lg text-gray-600">انتظر معالجة طلبك من قبل الإدارة</p>
                    </div>
                    <div class="hidden lg:block absolute top-1/2 left-full w-16 border-t-2 border-blue-200 -translate-y-1/2"></div>
                </div>

                <!-- Step 4 -->
                <div class="relative">
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 animate-fade-in-delay-3">
                        <div class="text-blue-600 text-4xl mb-6">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">استلام الرخصة</h3>
                        <p class="text-lg text-gray-600">احصل على رخصتك الإلكترونية</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section CTA -->
    <div class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-[#1E3A8A] to-blue-600 rounded-3xl shadow-2xl overflow-hidden transform hover:scale-105 transition-all duration-300">
                <div class="px-8 py-16 sm:px-16 sm:py-20 lg:flex lg:items-center lg:justify-between">
                    <div class="lg:w-0 lg:flex-1">
                        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl animate-fade-in">
                            جاهز لتقديم طلبك؟
                        </h2>
                        <p class="mt-4 max-w-3xl text-xl text-blue-100 animate-fade-in-delay">
                            انضم إلينا اليوم وابدأ في إدارة طلبات رخص السير الخاصة بك بكل سهولة
                        </p>
                    </div>
                    <div class="mt-8 lg:mt-0 lg:flex-shrink-0">
                        <div class="inline-flex rounded-xl shadow-lg">
                            @auth
                                <a href="{{ route('demande') }}" class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-lg font-medium rounded-xl text-[#1E3A8A] bg-white hover:bg-blue-50 transition duration-300 transform hover:scale-105">
                                    ابدأ طلبك الآن
                                </a>
                            @else
                                <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-lg font-medium rounded-xl text-[#1E3A8A] bg-white hover:bg-blue-50 transition duration-300 transform hover:scale-105">
                                    إنشاء حساب جديد
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .animate-fade-in {
        animation: fadeIn 1s ease-out;
    }

    .animate-fade-in-delay {
        animation: fadeIn 1s ease-out 0.3s both;
    }

    .animate-fade-in-delay-2 {
        animation: fadeIn 1s ease-out 0.6s both;
    }

    .animate-fade-in-delay-3 {
        animation: fadeIn 1s ease-out 0.9s both;
    }
</style>
@endsection