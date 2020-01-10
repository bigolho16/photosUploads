<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("fotos", function (Blueprint $table) {
            $table->increments("id_fotos");
			$table->string("nome", 250);
            $table->binary("img");

            $table->unsignedInteger("id_fotos_produtos");

            $table->char("ativo")->default("n");
            $table->timestamp("lastupdate");
            
        });

        Schema::table("fotos", function (Blueprint $table) {
            $table->index("id_fotos_produtos");
            $table->foreign("id_fotos_produtos")
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
        Schema::dropIfExists("fotos", function (Blueprint $table) {
            $table->dropForeign("fotos_id_fotos_produtos_foreign");

        });
    }
}
