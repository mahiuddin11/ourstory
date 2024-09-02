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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('image')->nullable();
            // $table->string('slug');
            $table->string('discaption')->nullable();
            $table->integer('catagory_id');
            $table->integer('status_id');
            // $table->integer('user_id');
            $table->integer('tag_id');
            // $table->timestamp('time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
