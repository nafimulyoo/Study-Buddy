<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserStudyPostsTable extends Migration
{
    public function up()
    {
        Schema::create('user_study_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('post_content');
            $table->unsignedInteger('likes')->default(0);
            $table->unsignedInteger('replies')->default(0);
            $table->unsignedInteger('study_duration');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_study_posts');
    }
}
