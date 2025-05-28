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
            <div class="text-center">
                <h1 class="text-4xl sm:text-5xl font-bold text-white mb-6">
                    منصة طلبات رخص السير
                </h1>
                <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                    خدمة رقمية متكاملة لإدارة وتتبع طلبات رخص السير الخاصة بالشاحنات في مدينة الرباط
                </p>
                <div class="space-x-4 space-x-reverse">
                    @auth
                        <a href="{{ route('demande') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-[#1E3A8A] bg-white hover:bg-blue-50 transition duration-150">
                            ابدأ طلبك الآن
                        </a>
                    @else
                        <a href="{{ route('register') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-[#1E3A8A] bg-white hover:bg-blue-50 transition duration-150">
                            إنشاء حساب جديد
                        </a>
                        <a href="{{ route('login') }}" class="inline-flex items-center px-6 py-3 border border-white text-base font-medium rounded-lg text-white hover:bg-white/10 transition duration-150">
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
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">إحصائيات خدماتنا</h2>
                <p class="text-lg text-gray-600">نفخر بتقديم خدمة سريعة وفعالة لجميع عملائنا</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6 text-center transform hover:scale-105 transition-transform duration-200">
                    <div class="text-4xl font-bold text-blue-600 mb-2">+5000</div>
                    <div class="text-gray-600">طلب تمت معالجته</div>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6 text-center transform hover:scale-105 transition-transform duration-200">
                    <div class="text-4xl font-bold text-blue-600 mb-2">98%</div>
                    <div class="text-gray-600">نسبة رضا العملاء</div>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6 text-center transform hover:scale-105 transition-transform duration-200">
                    <div class="text-4xl font-bold text-blue-600 mb-2">24/7</div>
                    <div class="text-gray-600">دعم متواصل</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Caractéristiques -->
    <div class="py-16 bg-gradient-to-b from-white to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">مميزات المنصة</h2>
                <p class="text-lg text-gray-600">نقدم لكم تجربة رقمية متكاملة وسهلة الاستخدام</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-200">
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">معالجة سريعة</h3>
                    <p class="text-gray-600">نضمن معالجة طلبكم في أسرع وقت ممكن مع الحفاظ على الجودة</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-200">
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">متابعة إلكترونية</h3>
                    <p class="text-gray-600">تتبع حالة طلبك مباشرة عبر المنصة في أي وقت</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-200">
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">آمن وموثوق</h3>
                    <p class="text-gray-600">نضمن حماية بياناتكم الشخصية وسرية معلوماتكم</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Comment ça marche -->
    <div class="py-16 bg-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">كيف تعمل المنصة؟</h2>
                <p class="text-lg text-gray-600">خطوات بسيطة للحصول على رخصتك</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="relative">
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-200">
                        <div class="text-blue-600 text-3xl mb-4">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">إنشاء حساب</h3>
                        <p class="text-gray-600">قم بإنشاء حساب جديد في المنصة</p>
                    </div>
                    <div class="hidden lg:block absolute top-1/2 left-full w-16 border-t-2 border-blue-200 -translate-y-1/2"></div>
                </div>

                <!-- Step 2 -->
                <div class="relative">
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-200">
                        <div class="text-blue-600 text-3xl mb-4">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">تقديم الطلب</h3>
                        <p class="text-gray-600">املأ نموذج الطلب بالمعلومات المطلوبة</p>
                    </div>
                    <div class="hidden lg:block absolute top-1/2 left-full w-16 border-t-2 border-blue-200 -translate-y-1/2"></div>
                </div>

                <!-- Step 3 -->
                <div class="relative">
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-200">
                        <div class="text-blue-600 text-3xl mb-4">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">المعالجة</h3>
                        <p class="text-gray-600">انتظر معالجة طلبك من قبل الإدارة</p>
                    </div>
                    <div class="hidden lg:block absolute top-1/2 left-full w-16 border-t-2 border-blue-200 -translate-y-1/2"></div>
                </div>

                <!-- Step 4 -->
                <div class="relative">
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-200">
                        <div class="text-blue-600 text-3xl mb-4">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">استلام الرخصة</h3>
                        <p class="text-gray-600">احصل على رخصتك الإلكترونية</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section FAQ -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">الأسئلة الشائعة</h2>
                <p class="text-lg text-gray-600">إجابات على أكثر الأسئلة شيوعاً</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- FAQ Item 1 -->
                <div class="bg-blue-50 rounded-xl p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">كم تستغرق معالجة الطلب؟</h3>
                    <p class="text-gray-600">عادةً ما تتم معالجة الطلبات خلال 2-3 أيام عمل.</p>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-blue-50 rounded-xl p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">ما هي الوثائق المطلوبة؟</h3>
                    <p class="text-gray-600">تحتاج إلى بطاقة الهوية الوطنية ورخصة السياقة وأوراق المركبة.</p>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-blue-50 rounded-xl p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">هل يمكنني تتبع حالة طلبي؟</h3>
                    <p class="text-gray-600">نعم، يمكنك تتبع حالة طلبك مباشرة عبر المنصة باستخدام رقم الطلب.</p>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-blue-50 rounded-xl p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">ما هي مدة صلاحية الرخصة؟</h3>
                    <p class="text-gray-600">الرخصة صالحة لمدة سنة واحدة من تاريخ الإصدار.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section CTA -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-[#1E3A8A] to-blue-600 rounded-2xl shadow-xl overflow-hidden">
                <div class="px-6 py-12 sm:px-12 sm:py-16 lg:flex lg:items-center lg:justify-between">
                    <div class="lg:w-0 lg:flex-1">
                        <h2 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">
                            جاهز لتقديم طلبك؟
                        </h2>
                        <p class="mt-3 max-w-3xl text-lg text-blue-100">
                            انضم إلينا اليوم وابدأ في إدارة طلبات رخص السير الخاصة بك بكل سهولة
                        </p>
                    </div>
                    <div class="mt-8 lg:mt-0 lg:flex-shrink-0">
                        <div class="inline-flex rounded-md shadow">
                            @auth
                                <a href="{{ route('demande') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-[#1E3A8A] bg-white hover:bg-blue-50">
                                    ابدأ طلبك الآن
                                </a>
                            @else
                                <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-[#1E3A8A] bg-white hover:bg-blue-50">
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
@endsection