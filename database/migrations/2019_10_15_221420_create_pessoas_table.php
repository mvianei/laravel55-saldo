<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',200);
            $table->bigInteger('cpfcnpj');
            $table->char('pessoa',1);
            $table->date('data_nasc',20)->nullable();
            $table->string('ie_estadual',50)->nullable();
            $table->string('ie_municipal',50)->nullable();
            $table->string('nome_fantasia',200)->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('pessoas');
    }
}
