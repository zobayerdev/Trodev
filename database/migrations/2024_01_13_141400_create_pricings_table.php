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
            $table->integer('projectid');
            $table->string('projecttypes');
            $table->string('packagestype');
            $table->string('validity');
            $table->string('monthlycharge');
            $table->string('softwareprice');
            $table->string('ssl');
            $table->string('training');
            $table->string('revision');
            $table->string('domain');
            $table->string('storage');
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
