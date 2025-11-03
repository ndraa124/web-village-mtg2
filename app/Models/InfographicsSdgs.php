<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfographicsSdgs extends Model
{
    use HasFactory;

    protected $table = 'infographics_sdgs';

    protected $fillable = [
        'purpose',
        'value',
        'icon',
    ];

    protected $casts = [
        'value' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
