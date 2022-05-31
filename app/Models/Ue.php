<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ue extends Model
{
    use HasFactory;
    protected $fillable = [
        'intitule',
        'codematiere',
        'credit',
        'idinstitut',
        'idprof',
        'niveau',
    ];
    public function Institut(): Attribute
    {
        $data = Institut::where('id',$this->idinstitut)->first();
        return new Attribute(
            get: fn ($value) => $data->nom,
        );
    }

    public function Prof(): Attribute
    {
        $data = Enseignant::where('id',$this->idprof)->first();
        return new Attribute(
            get: fn ($value) => $data->nom .''.$data->prenoms,
        );
    }
}
