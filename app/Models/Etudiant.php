<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
	public $timestamps = false;	//Si on ne souhaitez pas que createde_at et updated_at soient gérées automatiquement
    protected $table = 'Enqueter'; //specification table
    protected $fillable = [
        'nom', 'email', 
        'password','adresse', 
        'ville', 'prenom', 
        'date_naissance',
    ];
}
