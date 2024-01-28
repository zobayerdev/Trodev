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
        Schema::create('app_software_pricings', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('Service');
            $table->integer('Validity');
            $table->string('Updateable');
            $table->string('Protection');
            $table->integer('Revision');
            $table->string('Administration_Setup');
            $table->string('Responsive_UI_UX');
            $table->string('A_B_Testing');
            $table->string('Training_Test');
            $table->string('Project_Manager');
            $table->string('Website_Integration');
            $table->string('Platform_Support');
            $table->integer('Maintenance_Charge');
            $table->integer('Monthly_Packages');
            $table->integer('Storage_Charge')->nullable();
            $table->integer('Offer_Percentage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_software_pricings');
    }
};
