<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InfographicsResidentAge extends Model
{
    use HasFactory;

    protected $table = 'infographics_resident_age';

    protected $fillable = [
        'gender_id',
        'age',
        'total',
    ];

    public function gender(): BelongsTo
    {
        return $this->belongsTo(Gender::class, 'gender_id');
    }
}
