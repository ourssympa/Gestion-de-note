<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable =[
        'nom',
        'prenoms',
        'sexe',
        'datenaissance',
        'groupesanguin',
        'email',
        'niveau',
        'telephone',
        'idinstitut',
    ];
    public function Institut(): Attribute
    {
        $data = Institut::where('id',$this->idinstitut)->first();
        return new Attribute(
            get: fn ($value) => $data->nom,

        );
    }
}
