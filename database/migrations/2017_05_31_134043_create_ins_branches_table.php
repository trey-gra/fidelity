<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ins_branches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ins_co_id')->unsigned();
            $table->string('name', 50);
            $table->string('address')->nullable();
            $table->timestamps();

            $table->foreign('ins_co_id')->references('id')->on('ins_comps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ins_branches');
    }
}
