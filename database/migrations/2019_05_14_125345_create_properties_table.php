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
            $table->uuid('uuid');
            $table->longText('head_description')->nullable();
            $table->longText('main_description')->nullable();
            $table->longText('utility_description')->nullable();
            $table->longText('accessibility_description')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->text('meta_description')->nullable();
            $table->string('mls_id')->nullable();
            $table->double('home_size')->nullable();
            $table->double('land_size')->nullable();
            $table->double('asking_price')->nullable();
            $table->double('rental_price')->nullable();
            $table->double('buy_now_price')->nullable();
            $table->string('price-details')->nullable();
            $table->string('available_date')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->integer('zip')->nullable();
            $table->string('zone')->nullable();
            $table->string('county')->nullable();
            $table->string('country')->nullable();
            $table->string('tenure')->nullable();
            $table->string('minimum_lease')->nullable();
            $table->integer('number_of_cars')->nullable();
            $table->integer('garage_car_space')->nullable();
            $table->double('garage_size')->nullable();
            $table->string('bedrooms')->nullable();
            $table->string('bathrooms')->nullable();
            $table->integer('beds')->nullable();
            $table->integer('year_built')->nullable();
            $table->timestamp('last_updated')->nullable(); 
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
