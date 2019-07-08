<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnicianWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technician_works', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('technician_id');
            $table->foreign('technician_id')->references('id')->on('technicians')->onDelete('cascade');

            $table->unsignedBigInteger('work_id');
            $table->foreign('work_id')->references('id')->on('works')->onDelete('cascade');

            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('status')->default('pending');
            $table->boolean('approved')->default(false);
            $table->integer('rating')->default(0);
            $table->text('feedback')->nullable();
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
        Schema::dropIfExists('technician_works');
    }
}
