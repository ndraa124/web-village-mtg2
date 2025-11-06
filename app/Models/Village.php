<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
  use HasFactory;

  protected $table = 'villages';

  protected $fillable = [
    'name',
    'description',
    'village_head',
    'subdistrict',
    'regency',
    'province',
    'address',
    'phone',
    'email',
    'operational_hours_weekdays',
    'operational_hours_weekends',
    'map_latitude',
    'map_longitude',
    'map_zoom',
    'facebook',
    'instagram',
    'twitter',
    'youtube',
    'logo',
    'is_active',
  ];

  protected $casts = [
    'is_active' => 'boolean',
  ];
}
