<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('short_desc')->nullable();
            $table->text('content')->nullable();
            $table->string('image')->nullable();
            $table->datetime('publish_date')->nullable();
            $table->integer('status')->default(1);
            $table->string('author')->nullable();
            $table->integer('cate_id');
            $table->integer('tag_id');
            $table->timestamps();
            $table->string('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
