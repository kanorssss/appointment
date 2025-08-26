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
        Schema::create('death_certificates', function (Blueprint $table) {
            $table->id();
            $table->string('certificate_type')->index();
            $table->string('type_of_request')->index();
            $table->integer('number_of_copies')->default(1);
            $table->string('deceased_last_name');
            $table->string('deceased_middle_name');
            $table->string('deceased_first_name');
            $table->string('country');
            $table->string('province')->nullable();
            $table->string('city_or_municipality');
            $table->date('date_of_death');
            $table->string('sex');

            $table->string('fathers_last_name');
            $table->string('fathers_middle_name');
            $table->string('fathers_first_name');


            $table->string('mothers_last_name');
            $table->string('mothers_middle_name');
            $table->string('mothers_first_name');

            $table->string('purpose');

            $table->string('relationship_to_the_owner');
            $table->string('delivery_to');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('death_certificates');
    }
};
