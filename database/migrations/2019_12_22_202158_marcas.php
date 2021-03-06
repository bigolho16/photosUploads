<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Marcas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("marcas", function (Blueprint $table) {
            $table->increments("id_marcas");
            $table->string("marca", 250);
            $table->char("ativo")->default("n");
            $table->timestamp("lastupdate");

        });

        Schema::table("marcas", function (Blueprint $table) {
            //

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcas');
        
    }
}
