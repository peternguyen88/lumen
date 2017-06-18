<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mt_user', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('user_id');
            $table->string('email');
            $table->string('name');
            $table->string('provider_id');
            $table->string('provider_uid');
            $table->string('password');
            $table->string('firebase_uid');
            $table->integer('login_count');
            $table->string('last_login_location');
            $table->timestamp("last_login");
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
        //
        Schema::drop('mt_user');
    }
}
