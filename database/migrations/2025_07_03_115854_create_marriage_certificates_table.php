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
        Schema::create('marriage_certificates', function (Blueprint $table) {
            $table->id();
            $table->string('certificate_type')->index();
            $table->string('type_of_request')->index();
            $table->integer('number_of_copies')->default(1);
            $table->string('husband_last_name');
            $table->string('husband_middle_name');
            $table->string('husband_first_name');
            $table->string('wife_last_name');
            $table->string('wife_middle_name');
            $table->string('wife_first_name');
            $table->string('country');
            $table->string('province')->nullable();
            $table->string('city_or_municipality');
            $table->date('date_of_marriage');
            $table->string('purpose');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marriage_certificates');
    }
};