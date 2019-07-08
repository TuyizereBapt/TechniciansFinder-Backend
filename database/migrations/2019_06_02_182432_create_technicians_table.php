<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechniciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technicians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('f_name');
            $table->string('l_name');
            $table->date('birth_date');
            $table->char('sex');
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('marital_status');
            $table->string('work_place');
            $table->float('work_place_lat');
            $table->float('work_place_long');
            $table->string('image')->nullable();

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
        Schema::dropIfExists('technicians');
    }
}
