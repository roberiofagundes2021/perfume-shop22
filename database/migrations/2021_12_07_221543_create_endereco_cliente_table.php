<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecoClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco_cliente', function (Blueprint $table) {
            $table->id();
             $table->string('cidade',100);
             $table->string('estado',100);
             $table->string('bairro',100);
             $table->string('rua',100);
             $table->integer('numero');
             $table->integer('cep');
             $table->unsignedBigInteger('cliente_id');
             $table->foreign('cliente_id')->references('id')->on('clientes');
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
        Schema::dropIfExists('endereco_cliente');
    }
}
