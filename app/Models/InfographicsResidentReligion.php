<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InfographicsResidentReligion extends Model
{
    use HasFactory;

    protected $table = 'infographics_resident_religion';

    protected $fillable = [
        'religion_id',
        'total',
    ];

    protected $casts = [
        'religion_id' => 'integer',
        'total' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function religion(): BelongsTo
    {
        return $this->belongsTo(Religion::class, 'religion_id');
    }
}
