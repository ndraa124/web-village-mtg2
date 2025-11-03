<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InfographicsResidentMarriage extends Model
{
    use HasFactory;

    protected $table = 'infographics_resident_marriage';

    protected $fillable = [
        'marriage_id',
        'total',
    ];

    protected $casts = [
        'marriage_id' => 'integer',
        'total' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function marriage(): BelongsTo
    {
        return $this->belongsTo(Marriage::class, 'marriage_id');
    }
}
