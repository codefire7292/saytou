<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enqueter extends Model
{
    public $timestamps = false;	
    protected $table = 'Enqueter';
    protected $fillable = [
        'Per_id', 'Per_id2', 
        'lieu_habite','date',
    ];
}
