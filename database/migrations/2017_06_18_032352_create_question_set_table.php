<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionSetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mt_question_set', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->string('set_no');
            $table->string('set_description');
            $table->integer('number_of_questions');
            $table->string('pack_no');
            $table->integer('order_in_pack')->default(0);
            $table->timestamps();

            $table->primary('set_no');
            $table->foreign('pack_no')->references('pack_no')->on('mt_question_pack')->onDelete('cascade');
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
        Schema::drop('mt_question_set');
    }
}
