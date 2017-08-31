<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname', 50);
            $table->string('mname', 50);
            $table->string('lname', 50);
            $table->date('DOB');
            $table->integer('trn');
            $table->integer('occ_id')->unsigned();
            $table->string('tel_d');
            $table->string('tel_l');
            $table->integer('role_id')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->integer('parish_id')->unsigned();
            $table->timestamps();

            $table->foreign('parish_id')->references('id')->on('parishes');
            $table->foreign('occ_id')->references('id')->on('occupations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
