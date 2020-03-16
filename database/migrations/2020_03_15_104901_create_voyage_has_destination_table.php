<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoyageHasDestinationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyage_has_destination', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('voyage_id')->unsigned();
            $table->integer('destination_id')->unsigned();
            
			$table->foreign('voyage_id', 'Fk1_vd')->references('id')->on('voyages')
						->onDelete('cascade');

			$table->foreign('destination_id', 'Fk2_vd')->references('id')->on('destinations')
						->onDelete('cascade');
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
        Schema::dropIfExists('voyage_has_destination');
    }
}
