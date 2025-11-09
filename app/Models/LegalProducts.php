<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LegalProducts extends Model
{
    use HasFactory;

    protected $table = 'legal_products';

    protected $fillable = [
        'title',
        'category_id',
        'year',
        'link'
    ];

    protected $casts = [
        'category_id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(LegalProductsCategories::class, 'category_id');
    }
}
