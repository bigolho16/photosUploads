<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Precos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("precos", function (Blueprint $table) {
            $table->increments("id_precos");
            $table->integer("id_precos_produtos");
            $table->decimal("preco", 65, 0);
            $table->char("ativo")->default("n");
            $table->timestamp("lastupdate");
        });

        Schema::table("precos", function (Blueprint $table) {
            // $table->renameColumn("id", "id_precos");

            // $table->renameColumn("idproduto", "id_precos_produtos");
            $table->index("id_precos_produtos");

            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('precos');
        
    }
}
