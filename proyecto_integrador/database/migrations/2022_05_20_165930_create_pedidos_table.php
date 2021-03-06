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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            // Clave forànea de sucursal
            $table->unsignedBigInteger('idSucursal');
            $table->foreign('idSucursal')->references('id')->on('sucursals');
            // Clave forànea de Sucursal Carpinterìa
            $table->unsignedBigInteger('idCustomer');
            $table->foreign('idCustomer')->references('id')->on('customers');
            //
            $table->date('Fecha');
            $table->time('Hora');
            $table->timestamps();
        });
    }

    /**kjhkjh
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
};
