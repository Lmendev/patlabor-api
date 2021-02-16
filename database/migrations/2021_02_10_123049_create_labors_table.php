<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaborsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labors', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('unit_type')->nullable(); 
            $table->string('release_date')->nullable(); 
            $table->string('manufacturer')->nullable(); 
            $table->string('height')->nullable();
            $table->string('width')->nullable();
            $table->string('standard_weight')->nullable();
            $table->string('full_equipment_weight')->nullable();
            $table->string('maximum_weight_lifting_capacity')->nullable();
            $table->string('armour_materials')->nullable();
            $table->string('standard_equipment')->nullable();
            $table->string('optional_equipment')->nullable();
            $table->string('minimum_revolving_radius')->nullable();
            $table->string('affiliation')->nullable();
            $table->string('image')->nullable();
            $table->longtext('description')->nullable(); 
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('labors');
    }
}
