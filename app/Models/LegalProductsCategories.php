<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalProductsCategories extends Model
{
    use HasFactory;

    protected $table = 'legal_products_categories';

    protected $fillable = ['name'];
}
