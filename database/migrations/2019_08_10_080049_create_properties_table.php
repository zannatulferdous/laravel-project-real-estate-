<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->string('property_name');
            $table->string('property_type');
            $table->double('property_price');
            $table->string('property_city');
            $table->string('property_area');
            $table->integer('property_bedroom');
            $table->integer('property_bathroom');
            $table->integer('property_balcony');
            $table->double('square_feet');
            $table->text('short_description');
            $table->text('long_description');
            $table->string('property_image');
            $table->tinyInteger('publication_status');
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
