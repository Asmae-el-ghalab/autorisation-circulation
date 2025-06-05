   <!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة تحكم الإدارة</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Tajawal', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    
@include('layouts.navigation')
    <!-- Barre de navigation -->
  
                
                <!-- Menu utilisateur -->
                <div class="hidden sm:flex sm:items-center">
                    <div class="relative group">
                        <button class="flex items-center space-x-1 text-sm font-medium text-white">
                            <span class="ml-1 hidden md:inline">مدير النظام</span>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 hidden group-hover:block">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50">تسجيل الخروج</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">لوحة تحكم الإدارة</h1>
        
        @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
        @endif

        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        @endif
        
        <!-- إحصائيات الطلبات -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- طلبات جديدة -->
            <div class="bg-white rounded-lg shadow p-6 border-r-4 border-blue-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">الطلبات الجديدة</p>
                        <h3 class="text-2xl font-bold text-gray-800">{{ $totalNouveau }}</h3>
                    </div>
                    <div class="bg-blue-100 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                </div>
            </div>
            
            <!-- طلبات مقبولة -->
            <div class="bg-white rounded-lg shadow p-6 border-r-4 border-green-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">الطلبات المقبولة</p>
                        <h3 class="text-2xl font-bold text-gray-800">{{ $totalAccepte }}</h3>
                    </div>
                    <div class="bg-green-100 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                </div>
            </div>
            
            <!-- طلبات مرفوضة -->
            <div class="bg-white rounded-lg shadow p-6 border-r-4 border-red-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">الطلبات المرفوضة</p>
                        <h3 class="text-2xl font-bold text-gray-800">{{ $totalRefuse }}</h3>
                    </div>
                    <div class="bg-red-100 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                </div>
            </div>
            
            <!-- طلبات قيد الدراسة -->
            <div class="bg-white rounded-lg shadow p-6 border-r-4 border-yellow-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">طلبات في طور المعالجة</p>
                        <h3 class="text-2xl font-bold text-gray-800">{{ $totalEnAttente }}</h3>
                    </div>
                    <div class="bg-yellow-100 p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- بحث سريع -->
        <div class="bg-white rounded-lg shadow p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">بحث سريع</h2>
            <form action="{{ route('lwhatthakom') }}" method="GET">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex-1">
                        <input type="text" name="cin" placeholder="ابحث برقم CIN..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                </div>
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    بحث
                </button>
            </div>
            </form>
        </div>
        
        <!-- قائمة الطلبات الجديدة -->
        <div class="bg-white rounded-lg shadow overflow-hidden mb-8">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-800">الطلبات الجديدة</h2>
            </div>
            
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">اسم السائق</th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">المسار</th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">توقيت السير</th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">حالة الطلب</th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($demandes as $demande)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name={{ urlencode($demande->prenom . ' ' . $demande->nom) }}&background=random" alt="">
                                    </div>
                                    <div class="mr-4">
                                        <div class="text-sm font-medium text-gray-900">{{ $demande->prenom }} {{ $demande->nom }}</div>
                                        <div class="text-sm text-gray-500">CIN: {{ $demande->cin }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $demande->type_licence }}</div>
                                <div class="text-sm text-gray-500">Matricule: {{ $demande->matricule }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $demande->created_at->format('d/m/Y') }}</div>
                                <div class="text-sm text-gray-500">{{ $demande->created_at->format('H:i') }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($demande->status === 'en_attente')
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">قيد المراجعة</span>
                                @elseif($demande->status === 'accepte')
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">مقبول</span>
                                @else
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">مرفوض</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="text-blue-600 hover:text-blue-900 mr-3" onclick="openRequestModal('{{ $demande->id }}')">معاينة</button>
                                <form action="{{ route('demandes.update-status', $demande) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="accepte">
                                    <button type="submit" class="text-green-600 hover:text-green-900 mr-3">قبول</button>
                                </form>
                                <form action="{{ route('demandes.update-status', $demande) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="refuse">
                                    <button type="submit" class="text-red-600 hover:text-red-900">رفض</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                                لا توجد طلبات جديدة
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
                <div class="text-sm text-gray-500">
                    عرض {{ $demandes->firstItem() ?? 0 }} إلى {{ $demandes->lastItem() ?? 0 }} من {{ $demandes->total() ?? 0 }} طلب
                </div>
                <div class="flex space-x-2 rtl:space-x-reverse">
                    {{ $demandes->appends(request()->query())->links() }}
                </div>
            </div>
    </div>

    <!-- Modal معاينة الطلب -->
    <div id="requestModal" class="fixed z-50 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            
            <div class="inline-block align-bottom bg-white rounded-lg text-right overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:mr-4 sm:text-right w-full">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">معاينة تفاصيل الطلب</h3>
                            
                            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- بيانات السائق -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="text-md font-semibold text-gray-800 mb-3">بيانات السائق</h4>
                                    <div class="space-y-2">
                                        <p class="text-sm"><span class="font-medium text-gray-700">الاسم الكامل:</span> <span id="modal-nom"></span></p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">رقم CIN:</span> <span id="modal-cin"></span></p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">رقم السيارة:</span> <span id="modal-matricule"></span></p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">نوع الرخصة:</span> <span id="modal-type-licence"></span></p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">تاريخ الطلب:</span> <span id="modal-date"></span></p>
                                    </div>
                                </div>

                                <!-- معلومات السيارة -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="text-md font-semibold text-gray-800 mb-3">معلومات السيارة</h4>
                                    <div class="space-y-2">
                                        <p class="text-sm"><span class="font-medium text-gray-700">نوع السيارة:</span> <span id="modal-type-vehicule"></span></p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">رقم التسجيل:</span> <span id="modal-immatriculation"></span></p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">السعة:</span> <span id="modal-capacite"></span></p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">سنة الصنع:</span> <span id="modal-annee"></span></p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">اللون:</span> <span id="modal-couleur"></span></p>
                                    </div>
                                </div>

                                <!-- معلومات المسار -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="text-md font-semibold text-gray-800 mb-3">معلومات المسار</h4>
                                    <div class="space-y-2">
                                        <p class="text-sm"><span class="font-medium text-gray-700">نقطة الانطلاق:</span> <span id="modal-depart"></span></p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">نقطة الوصول:</span> <span id="modal-arrivee"></span></p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">أيام العمل:</span> <span id="modal-jours"></span></p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">المسافة:</span> <span id="modal-distance"></span></p>
                                    </div>
                                </div>
                                
                                <!-- معلومات إضافية للرخصة المعنوية -->
                                <div class="bg-gray-50 p-4 rounded-lg" id="modal-info-supplementaire">
                                    <h4 class="text-md font-semibold text-gray-800 mb-3">معلومات إضافية</h4>
                                    <div class="space-y-2">
                                        <p class="text-sm"><span class="font-medium text-gray-700">السجل التجاري:</span> <span id="modal-registre-commerce"></span></p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">التعريف الضريبي:</span> <span id="modal-identifiant-fiscal"></span></p>
                                    </div>
                                </div>
                                
                                <!-- الوثائق المرفقة -->
                                <div class="bg-gray-50 p-4 rounded-lg col-span-2">
                                    <h4 class="text-md font-semibold text-gray-800 mb-3">الوثائق المرفقة</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <p class="text-sm font-medium text-gray-700 mb-2">البطاقة الرمادية:</p>
                                            <img id="modal-carte-grise" class="w-full h-48 object-cover rounded-lg" src="" alt="البطاقة الرمادية">
                                            <a id="modal-carte-grise-download" href="" download class="inline-flex items-center justify-center mt-2 px-4 py-2 text-sm font-medium text-blue-700 bg-blue-100 rounded-md hover:bg-blue-200">
                                                <i class="fas fa-download ml-2"></i>
                                                تحميل البطاقة الرمادية
                                            </a>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-700 mb-2">شهادة التأمين:</p>
                                            <img id="modal-assurance" class="w-full h-48 object-cover rounded-lg" src="" alt="شهادة التأمين">
                                            <a id="modal-assurance-download" href="" download class="inline-flex items-center justify-center mt-2 px-4 py-2 text-sm font-medium text-blue-700 bg-blue-100 rounded-md hover:bg-blue-200">
                                                <i class="fas fa-download ml-2"></i>
                                                تحميل شهادة التأمين
                                            </a>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-700 mb-2">البطاقة الوطنية:</p>
                                            <img id="modal-cin" class="w-full h-48 object-cover rounded-lg" src="" alt="البطاقة الوطنية">
                                            <a id="modal-cin-download" href="" download class="inline-flex items-center justify-center mt-2 px-4 py-2 text-sm font-medium text-blue-700 bg-blue-100 rounded-md hover:bg-blue-200">
                                                <i class="fas fa-download ml-2"></i>
                                                تحميل البطاقة الوطنية
                                            </a>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-700 mb-2">رخصة السياقة:</p>
                                            <img id="modal-permis" class="w-full h-48 object-cover rounded-lg" src="" alt="رخصة السياقة">
                                            <a id="modal-permis-download" href="" download class="inline-flex items-center justify-center mt-2 px-4 py-2 text-sm font-medium text-blue-700 bg-blue-100 rounded-md hover:bg-blue-200">
                                                <i class="fas fa-download ml-2"></i>
                                                تحميل رخصة السياقة
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- ملاحظات الإدارة -->
                            <div class="mt-6">
                                <form id="updateStatusForm" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="bg-gray-50 p-4 rounded-lg">
                                        <h4 class="text-md font-semibold text-gray-800 mb-3">ملاحظات الإدارة</h4>
                                        <textarea name="notes_admin" rows="3" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" placeholder="أضف ملاحظات هنا..."></textarea>
                                    </div>
                                    
                                    <div class="mt-6 flex justify-end space-x-3 rtl:space-x-reverse">
                                        <button type="submit" name="status" value="accepte" class="inline-flex justify-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">
                                            <i class="fas fa-check ml-2"></i>
                                            قبول الطلب
                                        </button>
                                        <button type="submit" name="status" value="refuse" class="inline-flex justify-center px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">
                                            <i class="fas fa-times ml-2"></i>
                                            رفض الطلب
                                        </button>
                                        <button type="button" onclick="closeRequestModal()" class="inline-flex justify-center px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">
                                            <i class="fas fa-times ml-2"></i>
                                            إغلاق
                                        </button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        async function openRequestModal(id) {
            try {
                const response = await fetch(`/demandes/${id}`);
                const data = await response.json();
                
                // Mise à jour des informations de base
                document.getElementById('modal-nom').textContent = `${data.demande.prenom} ${data.demande.nom}`;
                document.getElementById('modal-cin').textContent = data.demande.cin;
                document.getElementById('modal-matricule').textContent = data.demande.matricule;
                document.getElementById('modal-type-licence').textContent = data.demande.type_licence;
                document.getElementById('modal-date').textContent = data.created_at;

                // Informations du véhicule
                document.getElementById('modal-type-vehicule').textContent = data.vehicule_info.type;
                document.getElementById('modal-immatriculation').textContent = data.vehicule_info.immatriculation;
                document.getElementById('modal-capacite').textContent = data.vehicule_info.capacite;
                document.getElementById('modal-annee').textContent = data.vehicule_info.annee;
                document.getElementById('modal-couleur').textContent = data.vehicule_info.couleur;

                // Informations du trajet
                document.getElementById('modal-depart').textContent = data.trajet_info.depart;
                document.getElementById('modal-arrivee').textContent = data.trajet_info.arrivee;
                document.getElementById('modal-jours').textContent = data.trajet_info.jours_travail;
                document.getElementById('modal-distance').textContent = data.trajet_info.distance + ' كم';

                // Informations supplémentaires pour licence معنوية
                const infoSupplementaire = document.getElementById('modal-info-supplementaire');
                if (data.demande.type_licence === 'معنوية') {
                    infoSupplementaire.classList.remove('hidden');
                    document.getElementById('modal-registre-commerce').textContent = data.demande.registre_commerce || '-';
                    document.getElementById('modal-identifiant-fiscal').textContent = data.demande.identifiant_fiscal || '-';
                } else {
                    infoSupplementaire.classList.add('hidden');
                }

                // Images
                document.getElementById('modal-carte-grise').src = data.carte_grise_url;
                document.getElementById('modal-carte-grise-download').href = data.carte_grise_url;
                document.getElementById('modal-assurance').src = data.assurance_url;
                document.getElementById('modal-assurance-download').href = data.assurance_url;
                document.getElementById('modal-cin').src = data.cin_url;
                document.getElementById('modal-cin-download').href = data.cin_url;
                document.getElementById('modal-permis').src = data.permis_url;
                document.getElementById('modal-permis-download').href = data.permis_url;

                // Formulaire de mise à jour
                document.getElementById('updateStatusForm').action = `/demandes/${id}/status`;

                // Afficher le modal
                document.getElementById('requestModal').classList.remove('hidden');
            } catch (error) {
                console.error('Erreur lors du chargement des détails:', error);
                alert('حدث خطأ أثناء تحميل تفاصيل الطلب');
            }
        }
        
        function closeRequestModal() {
            document.getElementById('requestModal').classList.add('hidden');
        }
        
        // Fermer le modal en cliquant à l'extérieur
        window.onclick = function(event) {
            const modal = document.getElementById('requestModal');
            if (event.target === modal) {
                closeRequestModal();
            }
        }
    </script>
</body>
</html>