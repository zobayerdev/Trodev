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
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->integer('maintainance');
            $table->integer('storage');
            $table->integer('peroff');
            $table->string('development');
            $table->string('UI/UX');
            $table->string('logo');
            $table->string('business-card');
            $table->string('training-time');
            $table->string('revision');
            $table->string('project-manager');
            $table->string('edit-request');
            $table->string('technical');
            $table->string('development-request');
            $table->string('security');
            $table->string('hosting');
            $table->string('sqa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricings');
    }
};
