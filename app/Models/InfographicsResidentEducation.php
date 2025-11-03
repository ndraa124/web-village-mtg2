<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InfographicsResidentEducation extends Model
{
    use HasFactory;

    protected $table = 'infographics_resident_education';

    protected $fillable = [
        'education_id',
        'total',
    ];

    protected $casts = [
        'education_id' => 'integer',
        'total' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function education(): BelongsTo
    {
        return $this->belongsTo(Education::class, 'education_id');
    }
}
