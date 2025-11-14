<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Services extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'slug',
        'title',
        'description',
        'requirements_content',
        'icon_class',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($service) {
            $service->slug = Str::slug($service->title, '-');
        });
    }

    public function submissions()
    {
        return $this->hasMany(ServiceSubmission::class, 'service_id');
    }
}
