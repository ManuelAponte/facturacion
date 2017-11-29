<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ruc_cliente');
            $table->string('des_documento');
            $table->decimal('numero_serie',4,0);
            $table->decimal('numero_documento',8,0);
            $table->date('fec_emision');
            $table->string('des_moneda');
            $table->decimal('importe_valor_venta',12,2);
            $table->decimal('importe_igv',12,2);
            $table->decimal('importe_total_neto',12,2);
            $table->string('archivo_pdf');
            $table->string('archivo_xml');
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
        Schema::dropIfExists('documentos');
    }
}
