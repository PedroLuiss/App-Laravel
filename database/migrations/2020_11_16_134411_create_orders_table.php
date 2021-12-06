<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number_orden');
            $table->date('fecha');
            $table->decimal('monto',5,2);
            $table->enum('estado', ['Activo', 'Inactivo'])->nullable()->default('Activo');
            $table->integer('id_detalle')->unsigned();
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_detalle')
                  ->references('id')
                  ->on('orders_detail')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('productos');
    }
}
