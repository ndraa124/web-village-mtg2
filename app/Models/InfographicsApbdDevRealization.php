<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfographicsApbdDevRealization extends Model
{
    use HasFactory;

    protected $table = 'infographics_apbd_development_realization';

    protected $fillable = [
        'year',
        'category_name',
        'percent',
    ];

    protected $casts = [
        'year' => 'integer',
        'percent' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
