<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sommet extends Model
{
    use HasFactory;

    protected $primaryKey = 'code_Sommets';
    public $incrementing = true;

    protected $fillable = [
        'code_Sommets',
        'nom_Sommets',
        'altitude_Sommets',
    ];

    public function ascensions()
    {
        return $this->hasMany(Ascension::class, 'code_Sommets');
    }
    public function randonnees()
    {
        return $this->belongsToMany(Randonnee::class, 'concerner', 'code_Sommets', 'code_Randonnees')
            ->withPivot('date_Concerner');
    }
}
