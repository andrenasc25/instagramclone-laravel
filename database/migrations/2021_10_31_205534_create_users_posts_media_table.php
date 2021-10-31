<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersPostsMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_posts_media', function (Blueprint $table) {
            $table->id();

            //Foreign keys
            $table->unsignedBigInteger('user_post_id');
            $table->foreign('user_post_id')->references('id')->on('users_posts');

            //Normal columns
            $table->longText('url');
            $table->Integer('media_type');

            $table->timestamp('created_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_posts_media');
    }
}
