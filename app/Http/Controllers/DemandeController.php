<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Horaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\License;

class DemandeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'cin' => 'required|string|max:255',
            'matricule' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'adresse' => 'required|string|max:500',
            'type_vehicule' => 'required|string|max:255',
            'numero_immatriculation' => 'required|string|max:255',
            'capacite' => 'required|integer|min:1',
            'annee_fabrication' => 'required|integer|min:1900',
            'couleur' => 'required|string|max:255',
            'point_depart' => 'required|string|max:255',
            'point_arrivee' => 'required|string|max:255',
            'jours_travail' => 'required|string|max:255',
            'distance_km' => 'required|integer|min:1',
            'type_licence' => 'required|string|in:فردية,معنوية',
            'registre_commerce' => 'nullable|string|max:255',
            'identifiant_fiscal' => 'nullable|string|max:255',
            'scanned_image_1' => 'required|string', // carte grise
            'scanned_image_2' => 'required|string', // assurance
            'scanned_image_3' => 'required|string', // CIN
            'scanned_image_4' => 'required|string', // permis
        ]);

        // Traitement des images de la webcam
        $carte_grise_image = $this->saveBase64Image($request->scanned_image_1, 'carte_grise');
        $assurance_image = $this->saveBase64Image($request->scanned_image_2, 'assurance');
        $cin_image = $this->saveBase64Image($request->scanned_image_3, 'cin');
        $permis_image = $this->saveBase64Image($request->scanned_image_4, 'permis');

        $demande = Demande::create([
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'cin' => $request->cin,
            'matricule' => $request->matricule,
            'email' => $request->email,
            'adresse' => $request->adresse,
            'type_vehicule' => $request->type_vehicule,
            'numero_immatriculation' => $request->numero_immatriculation,
            'capacite' => $request->capacite,
            'annee_fabrication' => $request->annee_fabrication,
            'couleur' => $request->couleur,
            'point_depart' => $request->point_depart,
            'point_arrivee' => $request->point_arrivee,
            'jours_travail' => $request->jours_travail,
            'distance_km' => $request->distance_km,
            'type_licence' => $request->type_licence,
            'registre_commerce' => $request->registre_commerce,
            'identifiant_fiscal' => $request->identifiant_fiscal,
            'carte_grise_image' => $carte_grise_image,
            'assurance_image' => $assurance_image,
            'cin_image' => $cin_image,
            'permis_conduire_image' => $permis_image,
            'user_id' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'تم تقديم طلبك بنجاح. رقم طلبك هو: ' . $demande->id . '. احتفظ بهذا الرقم لتتبع حالة طلبك.');
    }

    public function updateStatus(Request $request, Demande $demande)
    {
        $request->validate([
            'status' => 'required|in:accepte,refuse',
            'notes_admin' => 'nullable|string',
        ]);

        $demande->update([
            'status' => $request->status,
            'notes_admin' => $request->notes_admin,
        ]);

        return redirect()->back()->with('success', 'تم تحديث حالة الطلب بنجاح');
    }

    private function saveBase64Image($base64Image, $prefix)
    {
        $image_parts = explode(";base64,", $base64Image);
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = $prefix . '_' . uniqid() . '.jpg';
        Storage::disk('public')->put('demandes/' . $fileName, $image_base64);
        return 'demandes/' . $fileName;
    }

    public function index()
    {
        $demandes = Demande::with('user')->latest()->paginate(10);
        return view('clients.lwhatthakom', compact('demandes'));
    }

    public function show(Demande $demande)
    {
        return response()->json([
            'demande' => $demande,
            'carte_grise_url' => asset('storage/' . $demande->carte_grise_image),
            'assurance_url' => asset('storage/' . $demande->assurance_image),
            'cin_url' => asset('storage/' . $demande->cin_image),
            'permis_url' => asset('storage/' . $demande->permis_conduire_image),
            'created_at' => $demande->created_at->format('d/m/Y H:i'),
            'vehicule_info' => [
                'type' => $demande->type_vehicule,
                'immatriculation' => $demande->numero_immatriculation,
                'capacite' => $demande->capacite,
                'annee' => $demande->annee_fabrication,
                'couleur' => $demande->couleur
            ],
            'trajet_info' => [
                'depart' => $demande->point_depart,
                'arrivee' => $demande->point_arrivee,
                'jours_travail' => $demande->jours_travail,
                'distance' => $demande->distance_km
            ]
        ]);
    }

    public function trackDemande(Request $request)
    {
        $request->validate([
            'numero_demande' => 'required|string'
        ]);

        $demande = Demande::where('id', $request->numero_demande)
                         ->where('user_id', auth()->id())
                         ->first();

        if (!$demande) {
            return redirect()->back()->with('error', 'رقم الطلب غير صحيح أو غير موجود');
        }

        return view('clients.suivi', [
            'demande' => $demande,
            'vehicule_info' => [
                'type' => $demande->type_vehicule,
                'immatriculation' => $demande->numero_immatriculation,
                'capacite' => $demande->capacite,
                'annee' => $demande->annee_fabrication,
                'couleur' => $demande->couleur
            ],
            'trajet_info' => [
                'depart' => $demande->point_depart,
                'arrivee' => $demande->point_arrivee,
                'jours_travail' => $demande->jours_travail,
                'distance' => $demande->distance_km
            ]
        ]);
    }

    /**
     * Télécharger la licence
     */
    public function downloadLicense(License $license)
    {
        // Vérifier si l'utilisateur a le droit d'accéder à cette licence
        if (auth()->user()->id !== $license->user_id && !auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        // Vérifier si le fichier existe
        if (!Storage::exists('licenses/' . $license->file_path)) {
            abort(404, 'License file not found.');
        }

        return Storage::download('licenses/' . $license->file_path, 'license.pdf');
    }

    /**
     * Rechercher des demandes par CIN
     */
    public function search(Request $request)
    {
        $request->validate([
            'cin' => 'required|string'
        ]);

        $demandes = Demande::where('cin', 'like', '%' . $request->cin . '%')
                          ->latest()
                          ->paginate(10);

        return view('clients.lwhatthakom', compact('demandes'));
    }
}
