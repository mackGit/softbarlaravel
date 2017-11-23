<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesaPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesa_pedido', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('pedido_id')->unsigned();
            $table->foreign('pedido_id')->references('id')->on('pedidos');

            $table->integer('mesa_id')->unsigned();
            $table->foreign('mesa_id')->references('id')->on('mesas');

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
        Schema::dropIfExists('mesa_pedido');
    }
}
