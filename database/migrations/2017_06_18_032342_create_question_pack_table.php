<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionPackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mt_question_pack', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->string('pack_no');
            $table->string('pack_description');
            $table->boolean('is_test_pack')->default(false);
            $table->boolean('is_practice_pack')->default(false);
            $table->timestamps();

            $table->primary('pack_no');
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
        Schema::drop('mt_question_pack');
    }
}
