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
        Schema::create('djs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('name',100);
            $table->string('user_name',50);
            $table->string('email',100);
            $table->string('contact',100);
            $table->string('ratings',50);
            $table->text('profile_img_url')->nullable();
            $table->text('cover_img_url')->nullable();
            $table->bigInteger('is_active')->default(0);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('djs');
    }
};
