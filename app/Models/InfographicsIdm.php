<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InfographicsIdm extends Model
{
    use HasFactory;

    protected $table = 'infographics_idm';

    protected $fillable = [
        'year',
        'idm_status_id',
        'min_score',
        'iks_score',
        'ike_score',
        'ikl_score',
        'addition_score',
        'total_score',
    ];

    protected $casts = [
        'year' => 'integer',
        'idm_status_id' => 'integer',
        'min_score' => 'decimal:4',
        'iks_score' => 'decimal:4',
        'ike_score' => 'decimal:4',
        'ikl_score' => 'decimal:4',
        'addition_score' => 'decimal:4',
        'total_score' => 'decimal:4',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function idmStatus(): BelongsTo
    {
        return $this->belongsTo(IdmStatus::class, 'idm_status_id');
    }
}
