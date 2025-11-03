<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InfographicsApbdShopping extends Model
{
    use HasFactory;

    protected $table = 'infographics_apbd_shopping';

    protected $fillable = [
        'year',
        'shopping_id',
        'budget',
        'percent',
    ];

    protected $casts = [
        'year' => 'integer',
        'shopping_id' => 'integer',
        'budget' => 'integer',
        'percent' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function shopping(): BelongsTo
    {
        return $this->belongsTo(Shopping::class, 'shopping_id');
    }
}
