<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimplenewsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simplenews_categories', function (Blueprint $table) {
            $table->increments('cid')->unsigned();
            $table->tinyInteger('format')->default(0);
            $table->tinyInteger('priority')->default(0);
            $table->tinyInteger('receipt')->default(0);
            $table->string('fromName', 128)->nullable();
            $table->string('emailSubject', 255)->nullable();
            $table->string('fromAddress', 64)->nullable();
            $table->tinyInteger('hyperlinks')->default(1);
            $table->tinyInteger('newAccount')->default(1);
            $table->tinyInteger('optInOut')->default(0);
            $table->tinyInteger('hasBlock')->default(0);

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
