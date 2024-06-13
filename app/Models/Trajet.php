<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trajet extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'conducteur_id',
        'date_depart',
        'heure_depart',
        'point_depart',
        'destination',
        'nombre_place',
        'image',
        'prix',
        'status',
        'description',
    ];

    public function conducteur(): BelongsTo
    {
        return $this->belongsTo(Conducteur::class);
    }

    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}
