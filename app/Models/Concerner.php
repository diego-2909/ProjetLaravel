<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concerner extends Model
{
    use HasFactory;

    protected $table = 'concerner';
    protected $primaryKey = ['code_Sommets', 'code_Randonnees'];
    public $incrementing = false;

    protected $fillable = [
        'code_Sommets',
        'code_Randonnees',
        'date_Concerner',
    ];

    protected $dates = [
        'date_Concerner',
    ];

    public function sommet()
    {
        return $this->belongsTo(Sommet::class, 'code_Sommets', 'code_sommets');
    }

    public function randonnee()
    {
        return $this->belongsTo(Randonnee::class, 'code_Randonnees', 'code_randonnees');
    }
}
