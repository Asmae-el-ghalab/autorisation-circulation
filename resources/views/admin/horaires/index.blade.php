@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-bold mb-6">إدارة الأوقات المتاحة</h2>

        <!-- Formulaire d'ajout -->
        <form action="{{ route('admin.horaires.store') }}" method="POST" class="mb-8">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">وقت البداية</label>
                    <input type="time" name="heure_debut" required class="w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">وقت النهاية</label>
                    <input type="time" name="heure_fin" required class="w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="flex items-end">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                        إضافة وقت جديد
                    </button>
                </div>
            </div>
        </form>

        <!-- Liste des horaires -->
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            وقت البداية
                        </th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            وقت النهاية
                        </th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            الحالة
                        </th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            الإجراءات
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($horaires as $horaire)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ date('H:i', strtotime($horaire->heure_debut)) }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ date('H:i', strtotime($horaire->heure_fin)) }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <form action="{{ route('admin.horaires.update', $horaire) }}" method="POST" class="inline">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="is_active" value="{{ $horaire->is_active ? '0' : '1' }}">
                                <button type="submit" class="px-3 py-1 rounded-full text-sm {{ $horaire->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $horaire->is_active ? 'متاح' : 'غير متاح' }}
                                </button>
                            </form>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <form action="{{ route('admin.horaires.destroy', $horaire) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('هل أنت متأكد من حذف هذا الوقت؟')">
                                    حذف
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 