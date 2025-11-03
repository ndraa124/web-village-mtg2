<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfographicsResidentMustSelect extends Model
{
    use HasFactory;

    protected $table = 'infographics_resident_must_select';

    protected $fillable = [
        'year',
        'total',
    ];

    protected $casts = [
        'year' => 'integer',
        'total' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
