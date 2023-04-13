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
            $table->id()->autoIncrement();
            $table->string('name')->nullable(false);
            $table->string('image')->nullable();
            $table->boolean('is_active')->nullable();
            $table->text('description')->nullable(false);
            $table->string('location')->nullable(false);
            $table->decimal('price', 8,2);
            $table->decimal('sale', 8,2)->nullable();
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

