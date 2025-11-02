<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InfographicsResidentHamlet extends Model
{
    use HasFactory;

    protected $table = 'infographics_resident_hamlet';

    protected $fillable = [
        'hamlet_id',
        'total',
    ];

    protected $casts = [
        'hamlet_id' => 'integer',
        'total' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function hamlet(): BelongsTo
    {
        return $this->belongsTo(Hamlet::class, 'hamlet_id');
    }
}
