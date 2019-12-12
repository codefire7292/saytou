<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;	
    protected $table = 'Personne'; 
    protected $fillable = [
        'nom', 'prenom', 'email', 
        'password','adresse', 
        'ville', 'role', 
        'date_naissance',
    ];
    public function admin(){
    	return $this->hasMany(Admin::class, 'id');
    }
    public function coordinator(){
    	return $this->hasMany(Coordinator::class, 'id');
    }
    public function patron(){
    	return $this->hasMany(Patron::class, 'id');
    }
}
