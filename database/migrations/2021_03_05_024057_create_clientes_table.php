<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('cpf_cnpj');
            $table->string('sector')->nullable();
            $table->boolean('type');
            $table->string('tel');
            $table->string('cep');
            $table->string('street');
            $table->string('district');
            $table->string('city');
            $table->string('state');
            $table->integer('number');
            $table->integer('court');
            $table->integer('lot')->nullable();
            $table->date('date');
            $table->string('day');
            $table->date('newdate');
            $table->decimal('value', 6, 2);
            $table->string('seller');
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
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
        Schema::dropIfExists('clientes');
    }
}
