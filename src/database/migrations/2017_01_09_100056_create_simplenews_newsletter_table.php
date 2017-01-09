<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimplenewsNewsletterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simplenews_newsletters', function (Blueprint $table) {
            $table->increments('nid')->unsigned();
            $table->integer('cid')->usigned();
            $table->tinyInteger('status')->default(0);
            $table->integer('sentCount')->unsigned()->defaut(0);

            $table->timestamps();

            $table->foreign('cid')->references('cid')->on('simplenews_categories')->onDelete('cascade');
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
