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
        Schema::create('request_boxes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('dj_id');
            $table->string('event_name',150);
            $table->string('activated_from',50);
            $table->string('expired_at',50);
            $table->string('max_songs',50);
            $table->text('event_description')->nullable();
            $table->bigInteger('is_closed')->default(0);
            $table->string('pin_code',50)->nullable();
            $table->text('cover_photo')->nullable();
            $table->string('current_song',150)->nullable();
            $table->string('play_list_url',500)->nullable();
            $table->string('ratings',50)->nullable();
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
        Schema::dropIfExists('request_boxes');
    }
};
