<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersStoriesReactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_stories_reactions', function (Blueprint $table) {
            $table->id();

            //Foreign keys
            $table->unsignedBigInteger('user_react_story_id');
            $table->foreign('user_react_story_id')->references('id')->on('users_react_stories');

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
        Schema::dropIfExists('users_stories_reactions');
    }
}
