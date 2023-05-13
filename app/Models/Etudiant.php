<?php

namespace App\Models;

use App\Models\Filiere;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'nom',
        'prenom',
        'niveau',
        'code_f'
    ];

    
    public function filiere():BelongsTo
    {
        return $this->belongsTo(Filiere::class);
    }
}
