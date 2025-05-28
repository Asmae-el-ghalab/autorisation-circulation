<?php

namespace App\Http\Controllers;

use App\Models\Horaire;
use Illuminate\Http\Request;

class HoraireController extends Controller
{
    public function index()
    {
        $horaires = Horaire::orderBy('heure_debut')->get();
        return view('admin.horaires.index', compact('horaires'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'heure_debut' => 'required|date_format:H:i',
            'heure_fin' => 'required|date_format:H:i|after:heure_debut',
        ]);

        Horaire::create($request->all());

        return redirect()->back()->with('success', 'تمت إضافة الوقت بنجاح');
    }

    public function update(Request $request, Horaire $horaire)
    {
        $request->validate([
            'heure_debut' => 'required|date_format:H:i',
            'heure_fin' => 'required|date_format:H:i|after:heure_debut',
            'is_active' => 'boolean'
        ]);

        $horaire->update($request->all());

        return redirect()->back()->with('success', 'تم تحديث الوقت بنجاح');
    }

    public function destroy(Horaire $horaire)
    {
        $horaire->delete();
        return redirect()->back()->with('success', 'تم حذف الوقت بنجاح');
    }

    public function getAvailableHoraires()
    {
        $horaires = Horaire::where('is_active', true)
            ->orderBy('heure_debut')
            ->get()
            ->map(function ($horaire) {
                return [
                    'id' => $horaire->id,
                    'label' => date('H:i', strtotime($horaire->heure_debut)) . ' - ' . date('H:i', strtotime($horaire->heure_fin))
                ];
            });

        return response()->json($horaires);
    }
}
