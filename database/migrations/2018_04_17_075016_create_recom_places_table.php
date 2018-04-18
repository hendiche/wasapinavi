<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecomPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recom_places', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recomm_id')->unsigned();
            $table->integer('place_id')->unsigned();
            $table->timestamps();

            $table->foreign('recomm_id')->references('id')->on('recommandations');
            $table->foreign('place_id')->references('id')->on('places');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recom_places');
    }
}
