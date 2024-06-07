<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Trajet extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [];

    public function conducteur(): BelongsTo
    {
        return $this->belongsTo(Conducteur::class);
    }
}
