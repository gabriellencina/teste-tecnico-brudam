<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $casts = [
        'title' => 'array',
        'description' => 'array',
        'city' => 'array'
    ];

    
    protected $guarded = [];


    public function user() {
        return $this->belongsTo('App\Models\User');
    }

 
}
