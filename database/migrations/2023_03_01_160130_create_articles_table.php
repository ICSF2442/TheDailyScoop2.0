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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('content')->nullable();
            $table->text("sumary")->nullable();
            $table->string('thumbnailURL')->nullable();
            $table->string('mediaType')->nullable();
            $table->string('mediaURL')->nullable();
            $table->boolean('leadStory') ->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
