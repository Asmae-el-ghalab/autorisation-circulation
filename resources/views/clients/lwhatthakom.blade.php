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
        
        <!-- إحصائيات الطلبات -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- طلبات جديدة -->
            <div class="bg-white rounded-lg shadow p-6 border-r-4 border-blue-500">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">الطلبات الجديدة</p>
                        <h3 class="text-2xl font-bold text-gray-800">1,245</h3>
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
                        <h3 class="text-2xl font-bold text-gray-800">856</h3>
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
                        <h3 class="text-2xl font-bold text-gray-800">189</h3>
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
                        <p class="text-gray-500">طلبات قيد الدراسة</p>
                        <h3 class="text-2xl font-bold text-gray-800">200</h3>
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
            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex-1">
                    <input type="text" placeholder="ابحث بالاسم..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="flex-1">
                    <input type="text" placeholder="ابحث برقم CIN..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="flex-1">
                    <input type="text" placeholder="ابحث برقم الطلب..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    بحث
                </button>
            </div>
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
                        <!-- طلب 1 -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=محمد+علي&background=random" alt="">
                                    </div>
                                    <div class="mr-4">
                                        <div class="text-sm font-medium text-gray-900">محمد علي</div>
                                        <div class="text-sm text-gray-500">CIN: EA123456</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">الدار البيضاء ➔ الرباط</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">08:00 - 18:00</div>
                                <div class="text-sm text-gray-500">يومياً</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">قيد المراجعة</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="text-blue-600 hover:text-blue-900 mr-3" onclick="openRequestModal()">معاينة</button>
                                <button class="text-green-600 hover:text-green-900 mr-3">قبول</button>
                                <button class="text-red-600 hover:text-red-900 mr-3">رفض</button>
                                <button class="text-purple-600 hover:text-purple-900">طلب وثائق</button>
                            </td>
                        </tr>
                        
                        <!-- طلب 2 -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=فاطمة+زهراء&background=random" alt="">
                                    </div>
                                    <div class="mr-4">
                                        <div class="text-sm font-medium text-gray-900">فاطمة زهراء</div>
                                        <div class="text-sm text-gray-500">CIN: EB654321</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">مراكش ➔ أكادير</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">07:00 - 19:00</div>
                                <div class="text-sm text-gray-500">من الإثنين إلى الجمعة</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">قيد المراجعة</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="text-blue-600 hover:text-blue-900 mr-3">معاينة</button>
                                <button class="text-green-600 hover:text-green-900 mr-3">قبول</button>
                                <button class="text-red-600 hover:text-red-900 mr-3">رفض</button>
                                <button class="text-purple-600 hover:text-purple-900">طلب وثائق</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
                <div class="text-sm text-gray-500">
                    عرض <span class="font-medium">1</span> إلى <span class="font-medium">2</span> من <span class="font-medium">1245</span> طلب
                </div>
                <div class="flex space-x-2">
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                        السابق
                    </button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                        التالي
                    </button>
                </div>
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
                                        <p class="text-sm"><span class="font-medium text-gray-700">الاسم الكامل:</span> محمد علي</p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">رقم CIN:</span> EA123456</p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">رقم الهاتف:</span> 0612345678</p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">البريد الإلكتروني:</span> mohamed.ali@example.com</p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">العنوان:</span> 123 شارع محمد الخامس، الدار البيضاء</p>
                                    </div>
                                </div>
                                
                                <!-- بيانات السيارة -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="text-md font-semibold text-gray-800 mb-3">بيانات السيارة</h4>
                                    <div class="space-y-2">
                                        <p class="text-sm"><span class="font-medium text-gray-700">نوع السيارة:</span> مرسيدس VITO</p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">رقم التسجيل:</span> 12345 أ 56</p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">السعة:</span> 8 ركاب</p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">سنة الصنع:</span> 2020</p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">لون السيارة:</span> أبيض</p>
                                    </div>
                                </div>
                                
                                <!-- المسار المطلوب -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="text-md font-semibold text-gray-800 mb-3">المسار المطلوب</h4>
                                    <div class="space-y-2">
                                        <p class="text-sm"><span class="font-medium text-gray-700">نقطة الانطلاق:</span> الدار البيضاء</p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">نقطة الوصول:</span> الرباط</p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">توقيت السير:</span> 08:00 - 18:00</p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">الأيام:</span> يومياً</p>
                                        <p class="text-sm"><span class="font-medium text-gray-700">المسافة التقريبية:</span> 90 كم</p>
                                    </div>
                                </div>
                                
                                <!-- الوثائق المرفوعة -->
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="text-md font-semibold text-gray-800 mb-3">الوثائق المرفوعة</h4>
                                    <div class="space-y-3">
                                        <div class="flex items-center justify-between">
                                            <span class="text-sm font-medium text-gray-700">صورة CIN</span>
                                            <div class="flex space-x-2">
                                                <button class="text-blue-600 text-sm hover:text-blue-800">معاينة</button>
                                                <button class="text-green-600 text-sm hover:text-green-800">تحميل</button>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <span class="text-sm font-medium text-gray-700">رخصة السياقة</span>
                                            <div class="flex space-x-2">
                                                <button class="text-blue-600 text-sm hover:text-blue-800">معاينة</button>
                                                <button class="text-green-600 text-sm hover:text-green-800">تحميل</button>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <span class="text-sm font-medium text-gray-700">بطاقة رمادية</span>
                                            <div class="flex space-x-2">
                                                <button class="text-blue-600 text-sm hover:text-blue-800">معاينة</button>
                                                <button class="text-green-600 text-sm hover:text-green-800">تحميل</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- ملاحظات الإدارة -->
                            <div class="mt-6 bg-gray-50 p-4 rounded-lg">
                                <h4 class="text-md font-semibold text-gray-800 mb-3">ملاحظات الإدارة</h4>
                                <textarea rows="3" class="w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500" placeholder="أضف ملاحظات هنا..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
                        قبول الطلب
                    </button>
                    <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        رفض الطلب
                    </button>
                    <button type="button" class="w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" onclick="closeRequestModal()">
                        إغلاق
                    </button>
                    <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-purple-600 text-base font-medium text-white hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:ml-3 sm:w-auto sm:text-sm">
                        طلب وثيقة إضافية
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openRequestModal() {
            document.getElementById('requestModal').classList.remove('hidden');
        }
        
        function closeRequestModal() {
            document.getElementById('requestModal').classList.add('hidden');
        }
        
        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('requestModal');
            if (event.target === modal) {
                closeRequestModal();
            }
        }
    </script>
</body>
</html>