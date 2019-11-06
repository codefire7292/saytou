<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquete extends Model
{
    public $timestamps = false;	
    protected $table = 'Enquete';
    protected $fillable = [
        'nom', 'libelle', 
        'debut','fin', 
        'cout', 'Com_id', 
        'Adm_id',
    ];
}
