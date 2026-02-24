<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->string('cover_image')->nullable();
            $table->string('model_name');
            $table->string('serial_number');
            $table->string('cpu_type');
            $table->string('memory');
            $table->string('primary_storage');
            $table->text('admin_notes');
            $table->decimal('price', 10, 2)->nullable(); // Add ->nullable()
            $table->string('slug')->unique();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('laptops');
    }
};
