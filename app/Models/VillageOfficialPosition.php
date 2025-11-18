<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VillageOfficialPosition extends Model
{
    use HasFactory;

    protected $table = 'm_village_officials_position';

    protected $fillable = [
        'position_name',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
