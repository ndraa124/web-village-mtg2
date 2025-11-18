<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class OrganizationDeliberation extends Model
{
    use HasFactory;

    protected $table = 'organization_deliberation';

    protected $fillable = ['image', 'caption'];

    public function getImageUrlAttribute(): string
    {
        if ($this->image) {
            return Storage::disk('public')->url($this->image);
        }

        return asset('img/img_placeholder.png');
    }
}
