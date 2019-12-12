<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquete extends Model
{
    public $timestamps = false;	
    protected $table = 'Enquete';
    protected $fillable = [
        'motif', 'contexte', 
        'debut','fin', 
        'cout', 'Com_id', 
        'Adm_id',
    ];

    public function commanditaire(){
    	return $this->belongsTo(Commanditaire::class, 'Com_id');
    }
    public function admin(){
    	return $this->belongsTo(Admin::class, 'Adm_id');
    }
}
