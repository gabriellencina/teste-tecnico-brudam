<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Pedido extends Model
{
    use HasFactory;
    protected $casts = [
        'title' => 'array',
        'description' => 'array',
        'city' => 'array',
        'created_at' => 'datetime:d-m-Y h:i:s',
    ];

    protected $dates = ['date'];


    protected $guarded = [];


    public function user() {
        return $this->belongsTo('App\Models\User');
    }



 
}
