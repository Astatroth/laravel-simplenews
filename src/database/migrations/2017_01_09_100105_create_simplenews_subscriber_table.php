<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimplenewsSubscriberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simplenews_subscribers', function (Blueprint $table) {
            $table->increments('snid')->unsgined();
            $table->tinyInteger('activated')->unsigned()->default(0);
            $table->string('mail', 100);
            $table->integer('user_id')->unsgined();
            $table->string('language', 12);
            $table->integer('timestamp');
            $table->text('changes');

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
    }
}
