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
        Schema::create('profile_informations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('surname');
            $table->string('extension')->nullable();
            $table->string('birthday');
            $table->string('birthplace');
            $table->string('sex');
            $table->string('civil_status');
            $table->string('other_civil_status')->nullable();
            $table->string('height');
            $table->string('weight');
            $table->string('blood_type');
            $table->string('gsis_id')->nullable();
            $table->string('pagibig_id')->nullable();
            $table->string('sss_id')->nullable();
            $table->string('philhealth_id')->nullable();
            $table->string('tin')->nullable();
            $table->string('agency_id')->nullable();
            $table->string('citizenship1');
            $table->string('citizenship2');
            $table->string('citizenship3');
            $table->string('res_house');
            $table->string('res_street');
            $table->string('res_subdivision');
            $table->string('res_barangay');
            $table->string('res_municipality');
            $table->string('res_province');
            $table->string('res_zipcode');
            $table->string('per_house');
            $table->string('per_street');
            $table->string('per_subdivision');
            $table->string('per_barangay');
            $table->string('per_municipality');
            $table->string('per_province');
            $table->string('per_zipcode');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_information');
    }
};
