<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class NewsCategory extends Model
{
  use HasFactory;

  protected $table = 'categories';

  protected $fillable = ['name', 'slug'];

  protected static function boot()
  {
    parent::boot();

    static::saving(function ($model) {
      $model->slug = Str::slug($model->name, '-');
    });
  }

  public function news()
  {
    return $this->hasMany(News::class, 'category_id');
  }
}
