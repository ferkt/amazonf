<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedor', function (Blueprint $table) {
            $table->id()->autoIncrement()->unique();
            $table->string('nome');
            $table->string('endereco');
            $table->integer('num');
            $table->string('bairro')->nullable();
            $table->string('cep', 9);
            $table->string('contato');
            $table->string('cnpj', 18)->unique();
            $table->string('insc');
            $table->string('tel',14);
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
        Schema::dropIfExists('fornecedor');
    }
}
