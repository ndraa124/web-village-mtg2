<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InfographicsStunting extends Model
{
    use HasFactory;

    protected $table = 'infographics_stunting';

    protected $fillable = [
        'year',
        'stunting_id',
        'total',
        'is_active',
    ];

    protected $casts = [
        'year' => 'integer',
        'stunting_id' => 'integer',
        'total' => 'integer',
        'is_active' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function stunting(): BelongsTo
    {
        return $this->belongsTo(Stunting::class, 'stunting_id');
    }
}
