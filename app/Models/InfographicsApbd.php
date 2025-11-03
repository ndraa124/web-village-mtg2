<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfographicsApbd extends Model
{
    use HasFactory;

    protected $table = 'infographics_apbd';

    protected $fillable = [
        'year',
        'income',
        'shopping',
        'financing',
        'expenditure',
        'surplus_deficit',
    ];

    protected $casts = [
        'year' => 'integer',
        'income' => 'integer',
        'shopping' => 'integer',
        'financing' => 'integer',
        'expenditure' => 'integer',
        'surplus_deficit' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
