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
        Schema::create('birth_certificates', function (Blueprint $table) {
            // Certificate Information
            $table->string('certificate_type')->index();
            $table->string('type_of_request')->index();
            $table->integer('number_of_copies')->default(1);

            // Personal Details
            $table->string('first_name');
            $table->string('middle_name')->nullable();         // Middle name can be optional
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->enum('sex', ['Male', 'Female']);  // Adjust as needed

            // Place of Birth
            $table->string('country');
            $table->string('province')->nullable();
            $table->string('city_or_municipality');

            // Father's Details
            $table->string('fathers_last_name');
            $table->string('fathers_first_name');
            $table->string('fathers_middle_name')->nullable();

            // Mother's Details
            $table->string('mothers_last_name');
            $table->string('mothers_first_name');
            $table->string('mothers_middle_name')->nullable();

            // Requester Relationship
            $table->string('relationship_to_the_owner')->index();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('birth_certificates');
    }
};
