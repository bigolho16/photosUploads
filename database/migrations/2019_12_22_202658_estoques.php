<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Estoques extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("estoques", function (Blueprint $table) {
            $table->increments("id_estoques");
            $table->char("tipoTransact", 1);
            $table->integer("estMin");
            $table->integer("estMax");
            $table->integer("qtdEstoque");
            $table->integer("qtdTransact");

            $table->integer("id_estoques_produtos");

            $table->timestamp("lastupdate");
        });

        Schema::table("estoques", function (Blueprint $table) {
            $table->integer("id_estoques_produtos")->unsigned()->change();
            $table->index("id_estoques_produtos");
            $table->foreign("id_estoques_produtos")
                     ->references("id_produtos")
                     ->on("produtos")
                     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("estoques", function (Blueprint $table) {
            $table->dropForeign("estoques_id_estoques_produtos_foreign");

        });
    }
}
