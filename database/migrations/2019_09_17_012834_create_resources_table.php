<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('book_catagory');
            $table->string('book_sub_catagory');
            $table->string('book_name');
            $table->string('book_des');
            $table->string('book_author');
            $table->string('book_image');
            $table->string('file_name');
            $table->string('file_size');
            $table->Integer('total_view')->default('0');
            $table->Integer('total_download')->default('0');
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
        Schema::dropIfExists('resources');
    }
}
