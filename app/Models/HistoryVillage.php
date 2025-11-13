<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryVillage extends Model
{
    use HasFactory;

    protected $table = 'history_village';

    protected $fillable = [
        'origin_description',
        'history_image',
    ];

    public function getHistoryImageUrlAttribute()
    {
        if ($this->history_image) {
            return asset('storage/' . $this->history_image);
        }

        return asset('img/img_placeholder.png');
    }
}
