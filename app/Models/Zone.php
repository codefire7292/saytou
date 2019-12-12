<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
	public $timestamps = false;
	protected $table = 'Zone'; 
    protected $fillable = [
        'Per_id', 'departement', 
        'nom_zone','region', 
    ];
}
