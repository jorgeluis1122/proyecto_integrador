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
        Schema::create('herramientas', function (Blueprint $table) {
            $table->id();
            $table->String('nombre',25);
            $table->String('marca',20);
            $table->String('modelo',30)->nullable();
            $table->String('descripcion')->nullable();
            $table->text('cantidad');
            // Clave forànea de Sucursal Carpinterìa
            $table->unsignedBigInteger('idSucursal');
            $table->foreign('idSucursal')->references('id')->on('campinterias');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('herramientas');
    }
};
