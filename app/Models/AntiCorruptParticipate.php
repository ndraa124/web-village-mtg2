<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

class AntiCorruptParticipate extends Model
{
  use HasFactory;

  protected $table = 'anti_corrupt_participate';

  protected $fillable = ['content', 'user_id'];

  protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
  ];

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
}
