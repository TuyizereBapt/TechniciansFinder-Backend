<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnicianWorkCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technician_work_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('technician_id');
            $table->foreign('technician_id')->references('id')->on('technicians')->onDelete('cascade');
            $table->unsignedBigInteger('work_category_id');
            $table->foreign('work_category_id')->references('id')->on('work_categories')->onDelete('cascade');
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
        Schema::dropIfExists('technician_work_categories');
    }
}
