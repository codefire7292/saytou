<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    public $timestamps = false;	
    protected $table = 'Affectation';
    protected $fillable = [
        'Per_id', 
        'Zon_id', 
    ];
}
