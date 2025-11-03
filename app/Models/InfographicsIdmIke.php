<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfographicsIdmIke extends Model
{
    use HasFactory;

    protected $table = 'infographics_idm_indicator_ike';

    protected $fillable = [
        'indicator_name',
        'score',
        'description',
        'activities',
        'value',
        'center',
        'province',
        'regency',
        'village',
        'csr',
        'other',
    ];

    protected $casts = [
        'score' => 'integer',
        'activities' => 'string',
        'value' => 'decimal:4',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
