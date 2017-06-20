<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProperiesFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properies_facilities', function (Blueprint $table) {
            $table->integer('property_id')->unsigned();
            $table->integer('facility_id')->unsigned();


            $table->foreign('property_id')->references('id')->on('property');
            $table->foreign('facility_id')->references('id')->on('facilities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properies_facilities');
    }
}
