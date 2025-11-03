<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfographicsApbdYear extends Model
{
    use HasFactory;

    protected $table = 'infographics_apbd_year';

    protected $fillable = [
        'year',
        'income',
        'shopping',
    ];

    protected $casts = [
        'year' => 'integer',
        'income' => 'integer',
        'shopping' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
