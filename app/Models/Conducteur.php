<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conducteur extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     * 
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'dateNais',
        'lieu_naissance',
        'sexe',
        'cni',
        'cni_verso',
        'cni_recto',
        'photos',
        'adresse',
        'ville',
        'numero_permis',
        'image_permis',
        'date_obtention',
        'marque',
        'immatriculation',
        'type_vehicule',
        'couleur',
        'status',
    ];

    /**
     * handle the relationship
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * handle the relationship
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function trajets(): HasMany
    {
        return $this->hasMany(Trajet::class);
    }
}
