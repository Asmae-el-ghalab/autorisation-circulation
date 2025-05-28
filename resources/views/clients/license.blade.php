<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الرخصة الإلكترونية</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    
<style>
        body {
            font-family: 'Tajawal', sans-serif;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            min-height: 100vh;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
        border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 102, 255, 0.1);
        transition: all 0.3s ease;
    }

        .glass-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0, 102, 255, 0.15);
        }

        .btn-gradient {
            background: linear-gradient(135deg, #3b82f6 0%, #60a5fa 100%);
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.4);
    }

    .license-preview {
            background: rgba(255, 255, 255, 0.95);
        border-radius: 16px;
            border: 2px solid rgba(59, 130, 246, 0.1);
        overflow: hidden;
        }

        .expiration-badge {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            border: 1px solid rgba(217, 119, 6, 0.1);
        }

        .status-badge {
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-weight: 500;
        display: inline-flex;
        align-items: center;
            gap: 0.5rem;
        }
        .status-badge.accepted {
            background-color: #dcfce7;
            color: #166534;
            border: 1px solid #86efac;
        }
        .status-badge.refused {
            background-color: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
        }
        .status-badge.pending {
            background-color: #fef3c7;
            color: #92400e;
            border: 1px solid #fde68a;
        }

        @media print {
            body { 
                background: white;
            }
            .glass-card {
                box-shadow: none;
                border: none;
            }
            .no-print {
                display: none;
        }
    }
</style>
</head>
<body>
@include('layouts.navigation')

    <div class="container mx-auto px-4 py-8">
        <div class="max-w-5xl mx-auto">
            <div class="glass-card p-6 md:p-8">
                <!-- Header -->
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold text-gray-800 mb-2 flex items-center justify-center gap-3">
                        <i class="fas fa-id-card text-blue-600"></i>
                        الرخصة الإلكترونية
                    </h1>
                    <p class="text-gray-600">الرخصة الرسمية المعتمدة من الوزارة</p>
                </div>

                @if(!$demande)
                    <!-- No Request Found -->
                    <div class="text-center py-12">
                        <div class="mb-4">
                            <i class="fas fa-search text-gray-400 text-5xl"></i>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-700 mb-2">لم يتم العثور على طلب</h2>
                        <p class="text-gray-600 mb-6">يرجى تقديم طلب جديد للحصول على رخصة</p>
                        <a href="{{ route('demande') }}" class="btn-gradient text-white px-6 py-3 rounded-xl inline-flex items-center gap-2">
                            <i class="fas fa-plus"></i>
                            تقديم طلب جديد
                        </a>
                    </div>
                @elseif($demande->status === 'en_attente')
                    <!-- Pending Request -->
                    <div class="text-center py-12">
                        <div class="mb-4">
                            <span class="status-badge pending">
                                <i class="fas fa-clock"></i>
                                قيد المعالجة
                            </span>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-700 mb-2">طلبك قيد المراجعة</h2>
                        <p class="text-gray-600">سيتم إخطارك عند اتخاذ قرار بشأن طلبك</p>
                    </div>
                @elseif($demande->status === 'refuse')
                    <!-- Refused Request -->
                    <div class="text-center py-12">
                        <div class="mb-4">
                            <span class="status-badge refused">
                                <i class="fas fa-times-circle"></i>
                                مرفوض
                            </span>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-700 mb-4">تم رفض طلبك</h2>
                        @if($demande->notes_admin)
                            <div class="bg-red-50 border border-red-200 rounded-lg p-4 max-w-2xl mx-auto mb-6">
                                <h3 class="font-semibold text-red-800 mb-2">سبب الرفض:</h3>
                                <p class="text-red-700">{{ $demande->notes_admin }}</p>
                            </div>
                        @endif
                        <a href="{{ route('demande') }}" class="btn-gradient text-white px-6 py-3 rounded-xl inline-flex items-center gap-2">
                            <i class="fas fa-redo"></i>
                            تقديم طلب جديد
                        </a>
                    </div>
                @elseif($demande->status === 'accepte')
                    <!-- Accepted Request - License Display -->
                    <div class="mb-4 text-center">
                        <span class="status-badge accepted">
                            <i class="fas fa-check-circle"></i>
                            تمت الموافقة
                        </span>
                    </div>

                    <!-- License Preview -->
                    <div class="license-preview mb-8">
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-8">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <!-- Left Column -->
                                <div class="space-y-6">
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-700 mb-4 flex items-center gap-2">
                                            <i class="fas fa-user text-blue-600"></i>
                                            معلومات شخصية
                                        </h3>
                                        <div class="space-y-3">
                                            <div class="flex items-center gap-2">
                                                <span class="text-gray-600">الاسم الكامل:</span>
                                                <span class="font-semibold">{{ $demande->prenom }} {{ $demande->nom }}</span>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <span class="text-gray-600">رقم البطاقة الوطنية:</span>
                                                <span class="font-semibold">{{ $demande->cin }}</span>
                                            </div>
                                        </div>
        </div>

                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-700 mb-4 flex items-center gap-2">
                                            <i class="fas fa-car text-blue-600"></i>
                                            معلومات المركبة
                                        </h3>
                                        <div class="space-y-3">
                                            <div class="flex items-center gap-2">
                                                <span class="text-gray-600">نوع المركبة:</span>
                                                <span class="font-semibold">{{ $demande->type_vehicule }}</span>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <span class="text-gray-600">رقم التسجيل:</span>
                                                <span class="font-semibold">{{ $demande->numero_immatriculation }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right Column -->
                                <div class="space-y-6">
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-700 mb-4 flex items-center gap-2">
                                            <i class="fas fa-route text-blue-600"></i>
                                            معلومات المسار
                                        </h3>
                                        <div class="space-y-3">
                                            <div class="flex items-center gap-2">
                                                <span class="text-gray-600">نقطة الانطلاق:</span>
                                                <span class="font-semibold">{{ $demande->point_depart }}</span>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <span class="text-gray-600">نقطة الوصول:</span>
                                                <span class="font-semibold">{{ $demande->point_arrivee }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-700 mb-4 flex items-center gap-2">
                                            <i class="fas fa-calendar-alt text-blue-600"></i>
                                            معلومات الصلاحية
                                        </h3>
                                        <div class="space-y-3">
                                            <div class="flex items-center gap-2">
                                                <span class="text-gray-600">تاريخ الإصدار:</span>
                                                <span class="font-semibold">{{ $demande->updated_at->format('Y-m-d') }}</span>
                                            </div>
                                            <div class="flex items-center gap-2">
                                                <span class="text-gray-600">تاريخ الانتهاء:</span>
                                                <span class="font-semibold">{{ $demande->updated_at->addYear()->format('Y-m-d') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- QR Code -->
                            <div class="mt-8 flex justify-center">
                                <div class="text-center">
                                    <div class="w-32 h-32 mx-auto mb-2 bg-white p-2 rounded-lg shadow">
                                        {!! QrCode::size(120)->generate(route('license.verify', $demande->id)) !!}
                                    </div>
                                    <p class="text-sm text-gray-600">امسح الرمز للتحقق من صحة الرخصة</p>
                                </div>
                            </div>
                        </div>
        </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-wrap justify-center gap-4 mb-8 no-print">
                        <button onclick="window.print()" 
                                class="flex items-center gap-2 px-6 py-3 bg-white text-blue-600 rounded-xl border-2 border-blue-100 hover:bg-blue-50 transition-colors duration-200">
                            <i class="fas fa-print"></i>
                            طباعة الرخصة
                        </button>
                        <a href="{{ route('license.download', $demande->id) }}" 
                           class="flex items-center gap-2 px-6 py-3 btn-gradient text-white rounded-xl">
                            <i class="fas fa-download"></i>
                            تحميل PDF
                        </a>
        </div>

                    <!-- Expiration Notice -->
                    <div class="text-center space-y-4 no-print">
                        <div class="expiration-badge inline-flex items-center gap-2 px-4 py-2 rounded-full">
                            <i class="fas fa-exclamation-circle text-amber-600"></i>
                            <span class="text-amber-800">تنتهي الصلاحية في: <strong>{{ $demande->updated_at->addYear()->format('Y-m-d') }}</strong></span>
            </div>
                        <p class="text-gray-600 flex items-center justify-center gap-2">
                            <i class="fas fa-bell text-blue-600"></i>
                سيصلك إشعار بالتجديد قبل 30 يوماً من تاريخ الانتهاء
            </p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
