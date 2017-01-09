<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimplenewsSubscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simplenews_subscriptions', function (Blueprint $table) {
            $table->integer('snid')->unsgined();
            $table->integer('cid')->unsgined();
            $table->tinyInteger('status')->unsgined()->default(1);
            $table->integer('timestamp');
            $table->string('source', 24);
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
