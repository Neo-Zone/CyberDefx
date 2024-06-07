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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')->nullable()->constrained()->onDelete('cascade');
            $table->unsignedTinyInteger('rating');
            $table->text('comment')->nullable();
            $table->foreignId('reviewer_id')->constrained('users')->onDelete('cascade'); 
            $table->foreignId('reviewee_id')->constrained('users')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
