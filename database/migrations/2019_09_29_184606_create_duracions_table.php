<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDuracionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duracions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('fechaInicio')->nullable();
            $table->timestamp('fechaFin')->nullable();
            $table->string('HraInicio');
            $table->string('HraFin');
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
        Schema::dropIfExists('duracions');
    }
}
