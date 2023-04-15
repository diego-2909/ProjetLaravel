<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;



class Ascension extends Model
{
    use HasFactory;

    protected $table = 'ascension';

    protected $primaryKey = ['code_Sommets', 'ccode_Abris'];
    public $incrementing = false;

    protected $fillable = [
        'code_Sommets',
        'code_Abris',
        'difficulte_Ascension',
        'duree_Ascension',
    ];

    public function sommet()
    {
        return $this->belongsTo(Sommet::class, 'code_Sommets');
    }

    public function abris()
    {
        return $this->belongsTo(Abris::class, 'code_Abris');
    }

    protected function setKeysForSaveQuery($query)
    {
        return $query->where('code_Sommets', $this->getAttribute('code_Sommets'))
            ->where('code_Abris', $this->getAttribute('code_Abris'));
    }
}
