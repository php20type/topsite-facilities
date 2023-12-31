<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Property name
            $table->string('type'); // Property name
            $table->text('address1')->nullable(); // Property description (nullable)
            $table->text('address2')->nullable(); // Property description (nullable)
            $table->integer('bedrooms'); // Number of bedrooms
            $table->integer('bathrooms'); // Number of bathrooms
            $table->boolean('parking');
            $table->unsignedBigInteger('property_type_id');
            $table->unsignedBigInteger('property_service_id');
            $table->foreign('property_type_id')->references('id')->on('property_types')->onDelete('cascade');
            $table->foreign('property_service_id')->references('id')->on('property_services')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
