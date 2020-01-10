<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Diversity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("diversity", function (Blueprint $table) {
            $table->increments("id_diversity");
            $table->string("nome", 250);
            $table->char("ativo")->default("n");
            $table->timestamp("lastupdate");

        });

        Schema::table("diversity", function (Blueprint $table) {
            // $table->renameColumn("id_diversity", "id_diversity");

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("diversity");
    }
}
