<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfographicsResident extends Model
{
    use HasFactory;

    protected $table = 'infographics_resident';

    protected $fillable = [
        't_resident',
        't_man',
        't_woman',
        't_head_of_family',
        't_temporary',
        't_mutation',
    ];

    protected $casts = [
        't_resident' => 'integer',
        't_man' => 'integer',
        't_woman' => 'integer',
        't_head_of_family' => 'integer',
        't_temporary' => 'integer',
        't_mutation' => 'integer',
    ];
}
