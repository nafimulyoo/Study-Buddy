<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToDoListTable extends Migration
{
    public function up()
    {
        Schema::create('to_do_list', function (Blueprint $table) {
            $table->id();
            $table->string('to_do_list_name');
            $table->text('description');
            $table->unsignedInteger('point');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('to_do_list');
    }
}
