<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecriaTabelaVendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vendas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger ('cliente_id') -> unsigned();
            $table->bigInteger ('funcionario_id') -> unsigned();
            $table-> date ('data_venda');
            $table ->double('valor', 10,2);

            $table->foreign ('funcionario_id') ->references('id')->on ('funcionario')->onDelete('cascade');
            $table->foreign ('cliente_id') ->references('id')->on ('clientes')->onDelete('cascade');
            $table->charset = 'UTF8';
            $table->collation = 'utf8_unicode_ci';
        
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Vendas');
    }
}
