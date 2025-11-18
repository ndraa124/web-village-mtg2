<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationFunctionOfficial extends Model
{
  use HasFactory;

  protected $table = 'organization_function_officials';

  protected $fillable = [
    'icon_class',
    'position_name',
    'description',
  ];
}
