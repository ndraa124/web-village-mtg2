<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InfographicsApbdFinancing extends Model
{
    use HasFactory;

    protected $table = 'infographics_apbd_financing';

    protected $fillable = [
        'year',
        'financing_id',
        'budget',
        'percent',
    ];

    protected $casts = [
        'year' => 'integer',
        'financing_id' => 'integer',
        'budget' => 'integer',
        'percent' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function financing(): BelongsTo
    {
        return $this->belongsTo(Financing::class, 'financing_id');
    }
}
