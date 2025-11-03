<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InfographicsSocialAssistance extends Model
{
    use HasFactory;

    protected $table = 'infographics_social_assistance';

    protected $fillable = [
        'social_assistance_id',
        'total',
    ];

    protected $casts = [
        'social_assistance_id' => 'integer',
        'total' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function socialAssistance(): BelongsTo
    {
        return $this->belongsTo(SocialAssistance::class, 'social_assistance_id');
    }
}
