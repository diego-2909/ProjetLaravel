<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Randonnee extends Model
{
    use HasFactory;

    protected $primaryKey = 'code_Randonnees';
    public $incrementing = true;

    protected $fillable = [
        'nbPersonnes_Randonnees',
        'dateDebut_Randonnees',
        'dateFin_Randonnees',
        'code_Guides',
    ];

    protected $dates = [
        'dateDebut_Randonnees',
        'dateFin_Randonnees',
    ];

    public function reservations()
    {
        return $this->hasMany(Reserver::class, 'code_Randonnees');
    }
    public function guide()
    {
        return $this->belongsTo(Guides::class, 'code_Guides');
    }
    public function sommets()
    {
        return $this->belongsToMany(Sommet::class, 'concerner', 'code_Randonnees', 'code_Sommets')
            ->withPivot('date_Concerner');
    }
    public function concerners()
    {
        return $this->hasMany(Concerner::class, 'code_Randonnees');
    }
}
