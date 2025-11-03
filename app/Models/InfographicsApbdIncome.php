<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InfographicsApbdIncome extends Model
{
    use HasFactory;

    protected $table = 'infographics_apbd_income';

    protected $fillable = [
        'year',
        'income_id',
        'budget',
        'percent',
    ];

    protected $casts = [
        'year' => 'integer',
        'income_id' => 'integer',
        'budget' => 'integer',
        'percent' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function income(): BelongsTo
    {
        return $this->belongsTo(Income::class, 'income_id');
    }
}
