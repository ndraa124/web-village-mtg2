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
        'tracking_number',
        'nik',
        'name',
        'email',
        'phone',
        'purpose',
        'supporting_files',
        'status',
        'rejection_reason',
        'final_document_path',
        'admin_notes',
        'verified_at',
        'processing_at',
        'rejected_at',
        'completed_at',
    ];

    protected $casts = [
        'supporting_files' => 'array',
        'verified_at' => 'datetime',
        'processing_at' => 'datetime',
        'rejected_at' => 'datetime',
        'completed_at' => 'datetime',
    ];

    public function service()
    {
        return $this->belongsTo(Services::class, 'service_id');
    }
}
