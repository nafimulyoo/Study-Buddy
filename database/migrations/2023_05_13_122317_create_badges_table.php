<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBadgesTable extends Migration
{
    public function up()
    {
        Schema::create('badges', function (Blueprint $table) {
            $table->id();
            $table->string('badge_name');
            $table->text('description');
            $table->string('icon');
            $table->unsignedInteger('badge_point');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('badges');
    }
}
