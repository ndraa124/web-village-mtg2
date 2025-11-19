<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

class OrganizationFunctionOfficial extends Model
{
  use HasFactory;

  protected $table = 'organization_function_officials';

  protected $fillable = [
    'icon_class',
    'position_name',
    'description',
  ];

  protected function shortDescription(): Attribute
  {
    return Attribute::make(
      get: fn() => Str::limit(strip_tags($this->description), 70),
    );
  }
}
