<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserver extends Model
{
    use HasFactory;

    protected $table = 'reserver';
    protected $primaryKey = ['code_Abris', 'code_Randonnees'];
    public $incrementing = false;
    protected $keyType = 'bigInteger';

    protected $fillable = [
        'code_Abris',
        'code_Randonnees',
        'date_Reserver',
        'statut_Reserver',
    ];

    protected $dates = [
        'date_Reserver',
    ];

    public function abri()
    {
        return $this->belongsTo(Abri::class, 'code_Abris', 'code_abris');
    }

    public function randonnee()
    {
        return $this->belongsTo(Randonnee::class, 'code_Randonnees', 'code_randonnees');
    }
}
