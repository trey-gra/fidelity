<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clent_id')->unsigned();
            $table->enum('claim_type',['Personal Injury', 'Vehicular Accident', 'Other']);
            
            //Client insurance Details (If applicable);
            $table->integer('cInsCoId')->unsigned();
            
            //Negligent Party Details
            $table->integer('negPtyId')->unsigned();
            $table->integer('nInsCoId')->unsigned();
            $table->integer('vehicle_Id');
            
            //Accident Details
            $table->datetime('acc_date');
            $table->string('acc_area');
            $table->integer('parish_id');
            $table->string('acc_detail');
            $table->integer('station_id');
            $table->string('inv_officer');
            $table->string('files');
            $table->timestamps();

            //Foreign keys constraint
            $table->foreign('c_id')->references('id')->on('clients');
            $table->foreign('parish_id')->references('id')->on('parishes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('claims');
    }
}
