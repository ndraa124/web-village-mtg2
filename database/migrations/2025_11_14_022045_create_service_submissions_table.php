<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('service_submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade');
            $table->string('tracking_number', 100);
            $table->string('nik', 16);
            $table->string('name', 100);
            $table->string('email', 100);
            $table->string('phone', 16)->nullable();
            $table->text('purpose');
            $table->json('supporting_files')->nullable();
            $table->enum('status', ['pending', 'verified', 'processing', 'rejected', 'completed'])->default('pending');
            $table->text('rejection_reason')->nullable();
            $table->string('final_document_path')->nullable();
            $table->text('admin_notes')->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->timestamp('processing_at')->nullable();
            $table->timestamp('rejected_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_submissions');
    }
};
