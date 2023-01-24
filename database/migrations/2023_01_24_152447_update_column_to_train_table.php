<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('train', function (Blueprint $table) {
            $table->id();
            $table->string("azienda");
            $table->string("stazione_partenza");
            $table->string("stazione_arrivo");
            $table->dateTime("orario_partenza");
            $table->dateTime("orario_arrivo");
            $table->string("codice_treno");
            $table->boolean("in_orario")->nullable();
            $table->boolean("cancellato")->nullable();
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
        Schema::table('train', function (Blueprint $table) {
            //
        });
    }
};



// Ogni treno dovrà avere:
// Azienda
// Stazione di partenza
// Stazione di arrivo
// Orario di partenza
// Orario di arrivo
// Codice Treno
// Numero Carrozze
// In orario
// Cancellato