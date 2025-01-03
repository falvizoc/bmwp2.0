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
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('solution_id')->nullable();
            $table->foreign('solution_id')->references('id')->on('solutions')->onDelete('set null');

            $table->string('name');
            $table->string('description');
            
            $table->string('slug');
            $table->string('icon');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
