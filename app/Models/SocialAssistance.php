<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialAssistance extends Model
{
    use HasFactory;

    protected $table = 'm_social_assistance';

    protected $fillable = [
        'social_assistance_name',
    ];
}
