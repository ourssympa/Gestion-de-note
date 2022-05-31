<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable =[
    'idetudiant',
    'idue',
    'note1',
    'note2',
    'status',
    'idinstitut',
    'niveau',
];

public function intitule(): Attribute
{
    $data=Ue::where('id',$this->idue)->first();
    return new Attribute(
        get: fn ($value) => $data->intitule,

    );
}

public function etudiant(): Attribute
{
    $data=Etudiant::where('id',$this->idetudiant)->first();
    return new Attribute(
        get: fn ($value) => $data->nom .' '.$data->prenoms,
    );
}

}
