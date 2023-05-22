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
        Schema::create('user_role_permissions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('role_id');
            $table->bigInteger('module_id');
            $table->string('module_code',50);
            $table->string('md_group',50);
            $table->bigInteger('is_enable')->default(0);
            $table->bigInteger('can_create')->default(0);
            $table->bigInteger('can_update')->default(0);
            $table->bigInteger('can_view')->default(0);
            $table->bigInteger('can_delete')->default(0);
            $table->bigInteger('can_approve')->default(0);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_role_permissions');
    }
};
