<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CartTemporary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("cart_temporary", function (Blueprint $table) {
            $table->increments("id_cart_temporary");
            $table->integer("id_produto");
            $table->string("produto", 255);
            $table->integer("quantidade");
            $table->decimal("preco", 10, 2);
            $table->string("cliente", 255);
            $table->timestamp("lastupdate");
            
        });

        Schema::table('cart_temporary', function (Blueprint $table) {
            // $table->renameColumn("id", "id_cart_temporary");

            $table->integer("id_produto")->unsigned()->change();
            $table->index("id_produto");

            $table->foreign("id_produto")
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
        Schema::dropIfExists("cart_temporary", function (Blueprint $table) {
            $table->dropForeign("cart_temporary_id_produto_foreign");
            
        });
    }
}
