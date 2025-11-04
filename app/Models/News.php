<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
  use HasFactory;

  protected $table = 'news';

  protected $fillable = [
    'title',
    'slug',
    'content',
    'image',
    'status',
    'user_id',
    'published_at',
  ];

  protected $casts = [
    'published_at' => 'datetime',
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
  ];

  protected static function boot()
  {
    parent::boot();

    static::saving(function ($model) {
      $model->slug = Str::slug($model->title, '-');
    });
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

    return "https://placehold.co/600x400/e2e8f0/e2e8f0?text=No+Image";
  }
}
