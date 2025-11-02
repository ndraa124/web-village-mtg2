<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdmStatus extends Model
{
    use HasFactory;

    protected $table = 'm_idm_status';

    protected $fillable = [
        'status_desc',
    ];
}
