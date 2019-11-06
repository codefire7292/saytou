<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;	
    protected $table = 'Personne'; 
    protected $fillable = [
        'nom', 'email', 
        'password','adresse', 
        'ville', 'is_admin', 
        'date_naissance',
    ];
}
