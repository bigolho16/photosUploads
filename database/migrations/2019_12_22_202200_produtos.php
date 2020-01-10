<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produtos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("produtos", function (Blueprint $table) {
            $table->increments("id_produtos");
            $table->string("produto", 250);
            $table->char("unidade")->default("pc");

            $table->integer("id_produtos_grupos");
            $table->integer("id_produtos_marcas");

            $table->char("ativo")->default("n");
            $table->timestamp("lastupdate");

        });

        Schema::table("produtos", function (Blueprint $table) {
            $table->integer("id_produtos_grupos")->unsigned()->change();

            $table->index("id_produtos_grupos");
            $table->foreign("id_produtos_grupos")
                     ->references("id_grupos")
                     ->on("grupos")
                     ->onDelete('cascade');

            $table->integer("id_produtos_marcas")->unsigned()->change();
            $table->index("id_produtos_marcas");
            $table->foreign("id_produtos_marcas")
                     ->references("id_marcas")
                     ->on("marcas")
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
        Schema::dropIfExists("produtos", function (Blueprint $table) {
            $table->dropForeign("produtos_id_produtos_grupos_foreign");
            $table->dropForeign("produtos_id_produtos_marcas_foreign");

        });
    }
}
