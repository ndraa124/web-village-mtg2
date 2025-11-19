<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AntiCorruptMaklumat extends Model
{
    use HasFactory;

    protected $table = 'anti_corrupt_maklumat';

    protected $fillable = ['content', 'image'];

    protected function shortContent(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->content
                ? Str::limit(strip_tags($this->content), 100)
                : null,
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getImageUrlAttribute(): string
    {
        if ($this->image) {
            return Storage::disk('public')->url($this->image);
        }

        return asset('img/img_placeholder.png');
    }
}
