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
        Schema::create('content_directories', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('directory_id')->nullable()->constrained('content_directories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name');
            $table->string('codename')->unique();
            $table->integer('order')->default(1);
            $table->integer('depth');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_directories');
    }
};
