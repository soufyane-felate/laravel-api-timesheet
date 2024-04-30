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
        Schema::create('time_records', function (Blueprint $table) {
            $table->id();
            $table->string('selectedProject');
            $table->string('client');
            $table->string('timeIn')->nullable();
            $table->string('timeOut')->nullable();
            $table->integer('break')->default(0); 
            $table->string('workingHours')->nullable();
            $table->string('hourlyRate')->nullable();
            $table->string('description')->nullable();
            $table->string('notes')->nullable();
            $table->boolean('status')->default(false);
            $table->boolean('billable')->default(false); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('time_records');
    }
};
