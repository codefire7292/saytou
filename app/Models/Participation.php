<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    public $timestamps = false;	
    protected $table = 'Participation';
    protected $fillable = [
        'Per_id', 
        'Enq_id', 
        'Rol_id', 
        'date', 
    ];
}
