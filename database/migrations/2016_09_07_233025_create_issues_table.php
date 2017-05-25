<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('summary');
            $table->text('description')->nullable();
            $table->timestamp('closed')->nullable();
            $table->integer('reporter')->unsigned();
            $table->integer('assignee')->unsigned();
            $table->timestamps();

            $table->foreign('reporter')
            ->references('id')->on('users')
            ->onDelete('restrict');

            $table->foreign('assignee')
            ->references('id')->on('users')
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
        Schema::dropIfExists('issues');
    }
}
