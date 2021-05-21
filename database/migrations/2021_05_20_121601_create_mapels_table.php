<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapels', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('agamapengetahuan')->nullable();
            $table->string('agamaketerampilan')->nullable();
            $table->string('ppknpengetahuan')->nullable();
            $table->string('ppknketerampilan')->nullable();
            $table->string('bindopengetahuan')->nullable();
            $table->string('bindoketerampilan')->nullable();
            $table->string('mtkpengetahuan')->nullable();
            $table->string('mtkketerampilan')->nullable();
            $table->string('ipapengetahuan')->nullable();
            $table->string('ipaketerampilan')->nullable();
            $table->string('ipspengetahuan')->nullable();
            $table->string('ipsketerampilan')->nullable();
            $table->string('binggrispengetahuan')->nullable();
            $table->string('binggrisketerampilan')->nullable();
            $table->string('penjaspengetahuan')->nullable();
            $table->string('penjasketerampilan')->nullable();
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
        Schema::dropIfExists('mapels');
    }
}
