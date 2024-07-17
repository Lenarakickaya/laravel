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
        Schema::create('open_graphs', function (Blueprint $table) {
            $table->id();
            $table->string('og_type')->nullable();
            $table->string('og_title')->nullable();
            $table->string('og_url')->nullable();
            $table->string('og_image')->nullable();
            $table->text('og_descriptioon')->nullable();
            $table->string('og_plural_title')->nullable();
            $table->string('url')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('open_graphs');
    }
};
