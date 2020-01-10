<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Grupos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("grupos", function (Blueprint $table) {
            $table->increments("id_grupos");

            $table->integer("id_grupos_diversity");

            $table->string("grupo", 250);
            $table->char("ativo")->default("n");
            $table->timestamp("lastupdate");
            
        });

        Schema::table("grupos", function (Blueprint $table) {
            
            $table->integer("id_grupos_diversity")->unsigned()->change();
            $table->index("id_grupos_diversity");

            $table->foreign("id_grupos_diversity")
                    ->references("id_diversity")
                    ->on("diversity")
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
        Schema::dropIfExists("grupos", function (Blueprint $table) {
            $table->dropForeign("grupos_id_grupos_diversity_foreign");
            
        });
        
    }
}
