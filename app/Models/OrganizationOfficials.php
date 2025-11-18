<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class OrganizationOfficials extends Model
{
    use HasFactory;

    protected $table = 'organization_officials';

    protected $fillable = [
        'image',
        'name',
        'officials_position_id',
        'order',
    ];

    protected $casts = [
        'order' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function position(): BelongsTo
    {
        return $this->belongsTo(VillageOfficialPosition::class, 'officials_position_id');
    }

    public function getImageUrlAttribute(): string
    {
        if ($this->image) {
            return Storage::disk('public')->url($this->image);
        }

        return asset('img/img_placeholder.png');
    }
}
