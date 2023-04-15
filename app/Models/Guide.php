<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;

    protected $table = 'guides';
    protected $primaryKey = 'code_Guides';

    protected $fillable = [
        'nom_Guides',
        'prenom_Guides',
        'email_Guides',
        'motdepasse_Guides',
    ];
    protected $hidden = [
        'motdepasse_Guides',
    ];

    public function randonnees()
    {
        return $this->hasMany(Randonnee::class, 'code_Guides');
    }
}
