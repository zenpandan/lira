<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorklogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worklog', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hours');
            $table->integer('issue_id')->unsigned();
            $table->timestamps();

            $table->foreign('issue_id')
            ->references('id')->on('issues')
            ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('worklog');
    }
}
