<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vallee extends Model
{
    use HasFactory;

    protected $primaryKey = 'code_Vallees';
    public $incrementing = true;

    protected $fillable = [
        'nom_Vallees',
    ];

    public function abris()
    {
        return $this->hasMany(Abri::class, 'code_Vallees');
    }
}
