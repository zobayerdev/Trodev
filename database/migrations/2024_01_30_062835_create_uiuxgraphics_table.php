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
        Schema::create('uiuxgraphics', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('services');
            $table->string('licence');
            $table->string('file');
            $table->string('format');
            $table->integer('mockup');
            $table->integer('showcase');
            $table->integer('price');
            $table->integer('revision');
            $table->integer('service');
            $table->integer('landing')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uiuxgraphics');
    }
};
