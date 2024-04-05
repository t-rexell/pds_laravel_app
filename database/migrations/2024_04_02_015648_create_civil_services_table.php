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
        Schema::create('civil_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_information_id')->constrained('profile_informations')->onDelete('cascade');
            $table->string('career_service')->nullable();
            $table->float('rating')->nullable();
            $table->date('examination_date')->nullable();
            $table->string('examination_place')->nullable();
            $table->string('license_number')->nullable();
            $table->date('license_validity_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('civil_services');
    }
};
