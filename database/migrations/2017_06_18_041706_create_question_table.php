<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mt_question', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('pack_no');
            $table->string('set_no');
            $table->string('question_no');

            $table->string('question_type');
            $table->longText('reading_passage')->nullable();
            $table->text('stimulus');
            $table->text('option_A');
            $table->text('option_B');
            $table->text('option_C');
            $table->text('option_D');
            $table->text('option_E');
            $table->string('correct_answer');

            $table->string('photo_url')->nullable();
            $table->timestamps();

            $table->foreign('pack_no')->references('pack_no')->on('mt_question_pack')->onDelete('cascade');
            $table->foreign('set_no')->references('set_no')->on('mt_question_set')->onDelete('cascade');
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
        Schema::drop('mt_question');
    }
}
