<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom',
        'nom',
        'cin',
        'matricule',
        'email',
        'adresse',
        'type_vehicule',
        'numero_immatriculation',
        'capacite',
        'annee_fabrication',
        'couleur',
        'point_depart',
        'point_arrivee',
        'horaire_debut',
        'horaire_fin',
        'jours_travail',
        'distance_km',
        'type_licence',
        'registre_commerce',
        'identifiant_fiscal',
        'carte_grise_image',
        'assurance_image',
        'permis_conduire_image',
        'cin_image',
        'status',
        'notes_admin',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
