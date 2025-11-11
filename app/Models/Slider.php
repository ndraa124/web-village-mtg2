<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
  use HasFactory;

  protected $table = 'slider';

  protected $fillable = [
    'title',
    'subtitle',
    'image',
    'is_active',
  ];

  protected $casts = [
    'is_active' => 'boolean',
  ];

  public function getImageUrlAttribute(): string
  {
    if ($this->image) {
      return Storage::disk('public')->url($this->image);
    }

    return asset('img/img_placeholder.png');
  }
}
