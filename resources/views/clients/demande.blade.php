<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تقديم طلب الرخصة</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;900&display=swap" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        :root {
            --primary: #4361ee;
            --primary-dark: #3a56d4;
            --secondary: #3f37c9;
            --success: #4cc9f0;
            --danger: #f72585;
            --warning: #f8961e;
            --info: #4895ef;
            --dark: #1a1a2e;
            --light: #f8f9fa;
        }

        body {
            font-family: 'Tajawal', sans-serif;
            background-color: #f5f7fa;
            min-height: 100vh;
            color: #2d3748;
        }

        .container {
            width: 100% !important;
            max-width: none !important;
        }

        .form-container {
            width: 100% !important;
            max-width: none !important;
            margin: 0 !important;
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border-radius: 24px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 10px 10px -5px rgba(0, 0, 0, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(12px);
            overflow: hidden;
            position: relative;
        }

        .form-container::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 8px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
        }

        .form-header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            padding: 2.5rem;
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
            border-bottom-right-radius: 24px;
            border-bottom-left-radius: 24px;
        }

        .form-header::after {
            content: '';
            position: absolute;
            bottom: -50px;
            right: -50px;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }

        .form-header::before {
            content: '';
            position: absolute;
            top: -30px;
            left: -30px;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
        }

        .input-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .input-group input, 
        .input-group select,
        .input-group textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            font-size: 0.9375rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background-color: #ffffff;
            box-shadow: inset 0 1px 3px 0 rgba(0, 0, 0, 0.05);
        }

        .input-group input:focus, 
        .input-group select:focus,
        .input-group textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.15);
        }

        .input-group label {
            font-weight: 600;
            color: #4a5568;
            margin-bottom: 0.5rem;
            display: block;
            font-size: 0.9375rem;
        }

        .section-title {
            position: relative;
            color: var(--primary);
            font-weight: 700;
            font-size: 1.25rem;
            margin: 2.5rem 0 1.5rem;
            padding-bottom: 0.75rem;
            border-bottom: 1px solid #e2e8f0;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -1px;
            right: 0;
            width: 80px;
            height: 2px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
        }

        .btn {
            padding: 0.75rem 1.75rem;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            position: relative;
            overflow: hidden;
            font-size: 0.9375rem;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            box-shadow: 0 4px 6px -1px rgba(67, 97, 238, 0.3), 0 2px 4px -1px rgba(67, 97, 238, 0.1);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(67, 97, 238, 0.3), 0 4px 6px -2px rgba(67, 97, 238, 0.15);
        }

        .btn-outline {
            border: 1px solid #e2e8f0;
            color: #4a5568;
            background: white;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }

        .btn-outline:hover {
            border-color: var(--primary);
            color: var(--primary);
            transform: translateY(-2px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .document-card {
            background-color: #ffffff;
            border-radius: 16px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            border: 1px solid #e2e8f0;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.05);
        }

        .document-card:hover {
            border-color: var(--primary);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .document-card-header {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            color: var(--primary);
        }

        .document-card-header i {
            font-size: 1.5rem;
            margin-left: 0.75rem;
        }

        .document-card-header h3 {
            font-weight: 700;
            font-size: 1.125rem;
        }

        .camera-container {
            background-color: #f8fafc;
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
            border: 2px dashed #cbd5e0;
            transition: all 0.3s ease;
            margin-bottom: 1rem;
        }

        .camera-container:hover {
            border-color: var(--primary);
            background-color: #f0f7ff;
        }

        .camera {
            width: 100%;
            height: 240px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #edf2f7;
            border-radius: 12px;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .camera i {
            font-size: 3rem;
            color: #a0aec0;
            transition: all 0.3s ease;
        }

        .camera:hover i {
            color: var(--primary);
        }

        .required::after {
            content: ' *';
            color: var(--danger);
        }

        .preview-image {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            border: 1px solid #e2e8f0;
        }

        .success-message {
            background-color: #f0fdf4;
            border: 1px solid #bbf7d0;
            color: #166534;
            padding: 1rem;
            border-radius: 12px;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            animation: slideIn 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .error-message {
            background-color: #fef2f2;
            border: 1px solid #fecaca;
            color: #991b1b;
            padding: 1rem;
            border-radius: 12px;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            animation: shake 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        @keyframes slideIn {
            from { 
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }

        .animate-fade-in {
            animation: fadeIn 0.3s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }

        /* File upload styles */
        .file-upload {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            border: 2px dashed #cbd5e0;
            border-radius: 12px;
            background-color: #f8fafc;
            transition: all 0.3s ease;
            cursor: pointer;
            height: 100%;
        }

        .file-upload:hover {
            border-color: var(--primary);
            background-color: #f0f7ff;
        }

        .file-upload i {
            font-size: 2.5rem;
            color: #a0aec0;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }

        .file-upload:hover i {
            color: var(--primary);
        }

        .file-upload input[type="file"] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(4px);
            animation: fadeIn 0.3s ease-out;
        }

        .modal-content {
            background: white;
            padding: 2.5rem;
            border-radius: 20px;
            width: 90%;
            max-width: 500px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            animation: modalSlideIn 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }

        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .modal-close {
            position: absolute;
            top: 1rem;
            left: 1rem;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #718096;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .modal-close:hover {
            color: var(--danger);
            transform: rotate(90deg);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .form-header {
                padding: 1.5rem;
            }
            
            .section-title {
                font-size: 1.125rem;
                margin: 2rem 0 1.25rem;
            }
            
            .btn {
                padding: 0.65rem 1.5rem;
                font-size: 0.875rem;
            }
        }

        /* Floating label effect */
        .floating-label-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .floating-label {
            position: absolute;
            top: 0.75rem;
            right: 1rem;
            color: #718096;
            font-size: 0.9375rem;
            transition: all 0.2s ease;
            pointer-events: none;
            background-color: white;
            padding: 0 0.25rem;
            border-radius: 4px;
        }

        .floating-input:focus ~ .floating-label,
        .floating-input:not(:placeholder-shown) ~ .floating-label {
            top: -0.5rem;
            right: 0.75rem;
            font-size: 0.75rem;
            color: var(--primary);
        }

        /* Custom select arrow */
        .custom-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23718096' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: left 1rem center;
            background-size: 16px 12px;
            padding-left: 2.5rem !important;
        }

        /* Ajustement des marges et du padding */
        .px-4 {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        .mx-auto {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        /* Ajustement du conteneur principal */
        body > div.container {
            padding: 0 !important;
        }
    </style>
</head>
<body class="min-h-screen bg-gray-50">
    @include('layouts.navigation')
    
    <div class="container-fluid px-4 py-8 w-full">
        <div class="w-full">
            <div class="form-container">
                <div class="form-header">
                    <h1 class="text-2xl font-bold mb-2">
                        <i class="fas fa-file-alt ml-2"></i>
                        تقديم طلب الرخصة
                    </h1>
                    <p class="text-blue-100 opacity-90">يرجى ملء جميع المعلومات المطلوبة بدقة</p>
                </div>

                <div class="p-8">
                    <form method="POST" action="{{ route('demandes.store') }}" enctype="multipart/form-data" id="demandeForm" x-data="{ licenceType: '' }" onsubmit="return handleSubmit(event)">
                        @csrf

                        @if(session('success'))
                        <div class="success-message mb-6">
                            <i class="fas fa-check-circle text-green-600"></i>
                            <div>
                                <h4 class="font-bold">تم بنجاح!</h4>
                                <p class="text-sm">{{ session('success') }}</p>
                            </div>
                        </div>
                        @endif

                        @if($errors->any())
                        <div class="error-message mb-6">
                            <i class="fas fa-exclamation-circle text-red-600"></i>
                            <div>
                                <h4 class="font-bold">حدث خطأ!</h4>
                                <ul class="list-disc list-inside text-sm">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            </div>
                        </div>
                        @endif

                        <!-- Personal Information Section -->
                        <div class="section-title">
                            <i class="fas fa-user-circle ml-2"></i>المعلومات الشخصية
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="floating-label-group">
                                <input type="text" name="prenom" id="prenom" class="floating-input w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder=" " required>
                                <label for="prenom" class="floating-label required">الاسم الشخصي</label>
                                <i class="fas fa-user absolute left-3 top-3 text-gray-400"></i>
                            </div>

                            <div class="floating-label-group">
                                <input type="text" name="nom" id="nom" class="floating-input w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder=" " required>
                                <label for="nom" class="floating-label required">الاسم العائلي</label>
                                <i class="fas fa-user absolute left-3 top-3 text-gray-400"></i>
                            </div>

                            <div class="floating-label-group">
                                <input type="email" name="email" id="email" class="floating-input w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder=" " required>
                                <label for="email" class="floating-label required">البريد الإلكتروني</label>
                                <i class="fas fa-envelope absolute left-3 top-3 text-gray-400"></i>
                            </div>

                            <div class="floating-label-group">
                                <input type="text" name="adresse" id="adresse" class="floating-input w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder=" " required>
                                <label for="adresse" class="floating-label required">العنوان</label>
                                <i class="fas fa-map-marker-alt absolute left-3 top-3 text-gray-400"></i>
                            </div>

                            <div class="floating-label-group">
                                <input type="text" name="cin" id="cin" class="floating-input w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder=" " required>
                                <label for="cin" class="floating-label required">رقم البطاقة الوطنية</label>
                                <i class="fas fa-id-card absolute left-3 top-3 text-gray-400"></i>
                            </div>

                            <div class="floating-label-group">
                                <input type="text" name="matricule" id="matricule" class="floating-input w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder=" " required>
                                <label for="matricule" class="floating-label required">رقم السيارة</label>
                                <i class="fas fa-car absolute left-3 top-3 text-gray-400"></i>
                            </div>
                        </div>

                        <!-- Vehicle Information Section -->
                        <div class="section-title">
                            <i class="fas fa-car ml-2"></i>معلومات السيارة
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="floating-label-group">
                                <input type="text" name="type_vehicule" id="type_vehicule" class="floating-input w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder=" " required>
                                <label for="type_vehicule" class="floating-label required">نوع السيارة</label>
                                <i class="fas fa-car-side absolute left-3 top-3 text-gray-400"></i>
                            </div>

                            <div class="floating-label-group">
                                <input type="text" name="numero_immatriculation" id="numero_immatriculation" class="floating-input w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder=" " required>
                                <label for="numero_immatriculation" class="floating-label required">رقم التسجيل</label>
                                <i class="fas fa-hashtag absolute left-3 top-3 text-gray-400"></i>
                            </div>

                            <div class="floating-label-group">
                                <input type="number" name="capacite" id="capacite" class="floating-input w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder=" " required min="1">
                                <label for="capacite" class="floating-label required">اوحدة قياس السعة ب kg</label>
                                <i class="fas fa-users absolute left-3 top-3 text-gray-400"></i>
                            </div>

                            <div class="floating-label-group">
                                <input type="number" name="annee_fabrication" id="annee_fabrication" class="floating-input w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder=" " required min="1900">
                                <label for="annee_fabrication" class="floating-label required">سنة الصنع</label>
                                <i class="fas fa-calendar-alt absolute left-3 top-3 text-gray-400"></i>
                            </div>

                            <div class="floating-label-group">
                                <input type="text" name="couleur" id="couleur" class="floating-input w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder=" " required>
                                <label for="couleur" class="floating-label required">لون السيارة</label>
                                <i class="fas fa-paint-brush absolute left-3 top-3 text-gray-400"></i>
                            </div>
                        </div>

                        <!-- Route Information Section -->
                        <div class="section-title">
                            <i class="fas fa-route ml-2"></i>معلومات المسار
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="floating-label-group">
                                <input type="text" name="point_depart" id="point_depart" class="floating-input w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder=" " required>
                                <label for="point_depart" class="floating-label required">نقطة الانطلاق</label>
                                <i class="fas fa-map-marker absolute left-3 top-3 text-gray-400"></i>
                            </div>

                            <div class="floating-label-group">
                                <input type="text" name="point_arrivee" id="point_arrivee" class="floating-input w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder=" " required>
                                <label for="point_arrivee" class="floating-label required">نقطة الوصول</label>
                                <i class="fas fa-map-marker-alt absolute left-3 top-3 text-gray-400"></i>
                            </div>

                            <div class="floating-label-group">
                                <input type="text" name="jours_travail" id="jours_travail" class="floating-input w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder=" " required>
                                <label for="jours_travail" class="floating-label required">أيام العمل</label>
                                <i class="fas fa-calendar-week absolute left-3 top-3 text-gray-400"></i>
                            </div>

                            <div class="floating-label-group">
                                <input type="number" name="distance_km" id="distance_km" class="floating-input w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder=" " required min="1">
                                <label for="distance_km" class="floating-label required">المسافة التقريبية</label>
                                <i class="fas fa-road absolute left-3 top-3 text-gray-400"></i>
                            </div>
                        </div>

                        <!-- Documents Section -->
                        <div class="section-title">
                            <i class="fas fa-file-upload ml-2"></i>الوثائق المطلوبة
                        </div>

                        <!-- National ID Card -->
                        <div class="document-card">
                            <div class="document-card-header">
                                <i class="fas fa-id-card"></i>
                                <h3>البطاقة الوطنية</h3>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Camera Option -->
                                <div class="camera-container">
                                    <div id="camera_3" class="camera">
                                        <i class="fas fa-camera"></i>
                                    </div>
                                    <div class="flex justify-center gap-4 mt-4">
                                        <button type="button" class="btn btn-primary" onclick="initializeCamera(3)">
                                            <i class="fas fa-camera"></i>
                                            أخذ صورة
                                        </button>
                                        <button type="button" class="btn btn-outline" onclick="clearCamera(3)">
                                            <i class="fas fa-trash-alt"></i>
                                            مسح
                                        </button>
                                    </div>
                                </div>
                                
                                <!-- File Upload Option -->
                                <div class="file-upload">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <span class="text-sm font-medium text-gray-600 mb-2">رفع صورة من الجهاز</span>
                                    <span class="text-xs text-gray-500">JPG, PNG (الحجم الأقصى 5MB)</span>
                                    <input type="file" name="cin_file" accept="image/*" onchange="handleFileUpload(this, 3)">
                                </div>
                            </div>

                            <div id="results_3" class="mt-4"></div>
                            <input type="hidden" name="scanned_image_3" id="scanned_image_3">
                        </div>

                        <!-- Driving License -->
                        <div class="document-card">
                            <div class="document-card-header">
                                <i class="fas fa-id-badge"></i>
                                <h3>رخصة السياقة</h3>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Camera Option -->
                                <div class="camera-container">
                                    <div id="camera_4" class="camera">
                                        <i class="fas fa-camera"></i>
                                    </div>
                                    <div class="flex justify-center gap-4 mt-4">
                                        <button type="button" class="btn btn-primary" onclick="initializeCamera(4)">
                                            <i class="fas fa-camera"></i>
                                            أخذ صورة
                                        </button>
                                        <button type="button" class="btn btn-outline" onclick="clearCamera(4)">
                                            <i class="fas fa-trash-alt"></i>
                                            مسح
                                        </button>
                                    </div>
                                </div>
                                
                                <!-- File Upload Option -->
                                <div class="file-upload">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <span class="text-sm font-medium text-gray-600 mb-2">رفع صورة من الجهاز</span>
                                    <span class="text-xs text-gray-500">JPG, PNG (الحجم الأقصى 5MB)</span>
                                    <input type="file" name="permis_file" accept="image/*" onchange="handleFileUpload(this, 4)">
                                </div>
                            </div>
                            
                            <div id="results_4" class="mt-4"></div>
                            <input type="hidden" name="scanned_image_4" id="scanned_image_4">
                        </div>

                        <!-- License Type Section -->
                        <div class="section-title">
                            <i class="fas fa-id-badge ml-2"></i>معلومات الرخصة
                        </div>

                        <div class="grid grid-cols-1 gap-6">
                            <div class="floating-label-group">
                                <select name="type_licence" id="type_licence" x-model="licenceType" class="custom-select floating-input w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                                <option value="">-- اختر نوع الرخصة --</option>
                                <option value="فردية">ذاتية</option>
                                <option value="معنوية">معنوية</option>
                            </select>
                                <label for="type_licence" class="floating-label required">نوع الرخصة</label>
                                <i class="fas fa-tag absolute left-3 top-3 text-gray-400"></i>
                        </div>

                            <!-- Conditional Fields for Corporate License -->
                        <div x-show="licenceType === 'معنوية'" x-transition:enter="transition ease-out duration-300" 
                             x-transition:enter-start="opacity-0 transform -translate-y-2" 
                             x-transition:enter-end="opacity-100 transform translate-y-0">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="floating-label-group">
                                        <input type="text" name="registre_commerce" id="registre_commerce" class="floating-input w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder=" " x-bind:required="licenceType === 'معنوية'">
                                        <label for="registre_commerce" class="floating-label" x-bind:class="licenceType === 'معنوية' ? 'required' : ''">السجل التجاري</label>
                                        <i class="fas fa-file-contract absolute left-3 top-3 text-gray-400"></i>
                                </div>

                                    <div class="floating-label-group">
                                        <input type="text" name="identifiant_fiscal" id="identifiant_fiscal" class="floating-input w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder=" " x-bind:required="licenceType === 'معنوية'">
                                        <label for="identifiant_fiscal" class="floating-label" x-bind:class="licenceType === 'معنوية' ? 'required' : ''">التعريف الضريبي</label>
                                        <i class="fas fa-file-invoice-dollar absolute left-3 top-3 text-gray-400"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Documents -->
                        <div class="section-title">
                            <i class="fas fa-file-contract ml-2"></i>مستندات إضافية
                        </div>

                        <!-- Gray Card -->
                        <div class="document-card">
                            <div class="document-card-header">
                                <i class="fas fa-file-alt"></i>
                                <h3>البطاقة الرمادية</h3>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Camera Option -->
                            <div class="camera-container">
                                <div id="camera_1" class="camera">
                                    <i class="fas fa-camera"></i>
                                </div>
                                <div class="flex justify-center gap-4 mt-4">
                                    <button type="button" class="btn btn-primary" onclick="initializeCamera(1)">
                                        <i class="fas fa-camera"></i>
                                        أخذ صورة
                                    </button>
                                    <button type="button" class="btn btn-outline" onclick="clearCamera(1)">
                                        <i class="fas fa-trash-alt"></i>
                                        مسح
                                    </button>
                                </div>
                                </div>
                                
                                <!-- File Upload Option -->
                                <div class="file-upload">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <span class="text-sm font-medium text-gray-600 mb-2">رفع صورة من الجهاز</span>
                                    <span class="text-xs text-gray-500">JPG, PNG (الحجم الأقصى 5MB)</span>
                                    <input type="file" name="carte_grise_file" accept="image/*" onchange="handleFileUpload(this, 1)">
                                </div>
                            </div>
                            
                            <div id="results_1" class="mt-4"></div>
                            <input type="hidden" name="scanned_image_1" id="scanned_image_1">
                        </div>

                        <!-- Insurance Certificate -->
                        <div class="document-card">
                            <div class="document-card-header">
                                <i class="fas fa-file-signature"></i>
                                <h3>شهادة التأمين</h3>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Camera Option -->
                            <div class="camera-container">
                                <div id="camera_2" class="camera">
                                    <i class="fas fa-camera"></i>
                                </div>
                                <div class="flex justify-center gap-4 mt-4">
                                    <button type="button" class="btn btn-primary" onclick="initializeCamera(2)">
                                        <i class="fas fa-camera"></i>
                                        أخذ صورة
                                    </button>
                                    <button type="button" class="btn btn-outline" onclick="clearCamera(2)">
                                        <i class="fas fa-trash-alt"></i>
                                        مسح
                                    </button>
                                </div>
                                </div>
                                
                                <!-- File Upload Option -->
                                <div class="file-upload">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <span class="text-sm font-medium text-gray-600 mb-2">رفع صورة من الجهاز</span>
                                    <span class="text-xs text-gray-500">JPG, PNG (الحجم الأقصى 5MB)</span>
                                    <input type="file" name="assurance_file" accept="image/*" onchange="handleFileUpload(this, 2)">
                                </div>
                            </div>
                            
                            <div id="results_2" class="mt-4"></div>
                            <input type="hidden" name="scanned_image_2" id="scanned_image_2">
                        </div>

                        <!-- Form Submission -->
                        <div class="mt-12 text-center">
                            <button type="submit" class="btn btn-primary px-8 py-3 text-lg">
                                <i class="fas fa-paper-plane ml-2"></i>
                                إرسال الطلب
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeLoginModal()">
                <i class="fas fa-times"></i>
            </button>
            
            <div class="text-center">
                <div class="text-6xl text-blue-600 mb-4">
                    <i class="fas fa-user-lock"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-4">يجب تسجيل الدخول أولاً</h2>
                <p class="text-gray-600 mb-6">للمتابعة، يرجى تسجيل الدخول أو إنشاء حساب جديد</p>
                
                <div class="flex flex-col gap-4">
                    <a href="{{ route('login') }}" class="btn btn-primary px-6 py-3 rounded-xl">
                        <i class="fas fa-sign-in-alt ml-2"></i>
                        تسجيل الدخول
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-outline px-6 py-3 rounded-xl border-blue-200 hover:border-blue-500">
                        <i class="fas fa-user-plus ml-2"></i>
                        إنشاء حساب جديد
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>
    <script>
        let cameraInitialized = {
            1: false,
            2: false,
            3: false,
            4: false
        };

        function initializeCamera(cameraId) {
            if (cameraInitialized[cameraId]) {
                Webcam.reset('#camera_' + cameraId);
            }

            try {
                Webcam.set({
                    width: 320,
                    height: 240,
                    image_format: 'jpeg',
                    jpeg_quality: 90,
                    flip_horiz: true
                });

                Webcam.attach('#camera_' + cameraId);
                cameraInitialized[cameraId] = true;

                const buttons = document.querySelectorAll(`#camera_${cameraId} ~ .flex .btn-primary`);
                buttons[0].innerHTML = '<i class="fas fa-camera ml-2"></i>التقاط الصورة';
                buttons[0].onclick = function() {
                    take_snapshot(cameraId);
                };
            } catch (error) {
                showError(cameraId, 'يرجى السماح بالوصول إلى الكاميرا');
            }
        }

        function take_snapshot(cameraId) {
            if (!cameraInitialized[cameraId]) {
                showError(cameraId, 'يرجى تشغيل الكاميرا أولاً');
                return;
            }

            Webcam.snap(function(data_uri) {
                if (data_uri) {
                    const resultsDiv = document.getElementById('results_' + cameraId);
                    resultsDiv.innerHTML = `
                        <div class="success-message animate-fade-in">
                            <i class="fas fa-check-circle text-green-600"></i>
                            <div>
                                <h4 class="font-bold">تم بنجاح!</h4>
                                <p class="text-sm">تم التقاط الصورة بنجاح</p>
                            </div>
                        </div>
                        <img src="${data_uri}" class="preview-image animate-fade-in mt-4"/>
                    `;
                    document.getElementById('scanned_image_' + cameraId).value = data_uri;
                    
                    const buttons = document.querySelectorAll(`#camera_${cameraId} ~ .flex .btn-primary`);
                    buttons[0].innerHTML = '<i class="fas fa-camera ml-2"></i>إعادة المحاولة';
                    buttons[0].onclick = function() {
                        initializeCamera(cameraId);
                    };
                    
                    Webcam.reset('#camera_' + cameraId);
                    cameraInitialized[cameraId] = false;
                }
            });
        }

        function clearCamera(cameraId) {
            Webcam.reset('#camera_' + cameraId);
            document.getElementById('results_' + cameraId).innerHTML = '';
            document.getElementById('scanned_image_' + cameraId).value = '';
            cameraInitialized[cameraId] = false;
            
            const buttons = document.querySelectorAll(`#camera_${cameraId} ~ .flex .btn-primary`);
            buttons[0].innerHTML = '<i class="fas fa-camera ml-2"></i>إعادة المحاولة';
            buttons[0].onclick = function() {
                initializeCamera(cameraId);
            };
        }
    </script>
</body>
</html>