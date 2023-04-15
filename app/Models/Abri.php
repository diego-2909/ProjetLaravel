<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abri extends Model
{
    use HasFactory;

    protected $table = 'abris';
    protected $primaryKey = 'code_Abris';
    protected $fillable = [
        'nom_Abris',
        'type_Abris',
        'altitude_Abris',
        'places_Abris',
        'prixNuit_Abris',
        'prixRepas_Abris',
        'telGardien_Abris',
        'code_Vallees',
    ];

    public function reservations()
    {
        return $this->hasMany(Reserver::class, 'code_Abris', 'code');
    }
    public function ascensions()
    {
        return $this->hasMany(Ascension::class, 'code_Abris');
    }
    public function vallee()
    {
        return $this->belongsTo(Vallee::class, 'code_Vallees');
    }
}
