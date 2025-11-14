<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSubmission extends Model
{
    use HasFactory;

    protected $table = 'service_submissions';

    protected $fillable = [
        'service_id',
        'name',
        'email',
        'phone',
        'user_description',
        'supporting_files',
        'status',
        'submission_data',
        'rejection_reason',
        'final_document_path',
        'admin_notes',
        'completed_at',
    ];

    protected $casts = [
        'submission_data' => 'array',
        'supporting_files' => 'array',
        'completed_at' => 'datetime',
    ];

    public function service()
    {
        return $this->belongsTo(Services::class, 'service_id');
    }
}
