<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            
            //Columns that reflect the table's name
            $table->string('name');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->Integer('user_address_cep')->nullable();
            $table->longText('user_address_street')->nullable();
            $table->longText('user_address_neighbourhood')->nullable();
            $table->Integer('user_address_number')->nullable();
            $table->longText('user_address_complement')->nullable();
            $table->bigInteger('user_phone')->nullable();
            $table->longText('user_profile_image_url')->nullable();
            $table->Integer('user_access_level')->default('1');
            $table->Integer('user_status')->nullable();
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('user_remember_token_expires_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
