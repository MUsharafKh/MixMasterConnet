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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('module_name',50)->unique();
            $table->string('icon',5000)->nullable();
            $table->string('module_code',50)->unique();
            $table->string('module_group',50)->nullable();
            $table->string('url_slug',500);
            $table->bigInteger('is_active')->default(1);
            $table->bigInteger('is_enable')->default(1);
            $table->string('can_create',50)->nullable();
            $table->string('can_update',50)->nullable();
            $table->string('can_view',50)->nullable();
            $table->string('can_delete',50)->nullable();
            $table->string('can_approve',50)->nullable();
            $table->bigInteger('display_order')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
