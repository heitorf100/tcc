<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();

            $table->string('nome', 200);
            $table->char('cpf_cnpj', 30)->nullable();
            $table->boolean('cpf_validado')->default(false);

            $table->string('email', 200)->nullable();
            $table->boolean('email_validado')->default(false);

            $table->string('senha', 255);
            $table->string('telefone', 50)->nullable();
            $table->boolean('telefone_validado')->default(false);

            $table->enum('tipo_usuario', ['cliente','prestador','admin'])->default('cliente');

            $table->dateTime('data_cadastro')->nullable();

            // dados bancários
            $table->string('banco', 100)->nullable();
            $table->string('agencia', 50)->nullable();
            $table->string('conta', 100)->nullable();
            $table->string('tipo_conta', 50)->nullable();

            // endereço
            $table->string('logradouro', 255)->nullable();
            $table->integer('numero')->nullable();
            $table->string('bairro', 150)->nullable();
            $table->string('cidade', 150)->nullable();
            $table->string('estado', 100)->nullable();
            $table->string('cep', 20)->nullable();

            // índices
            $table->unique('cpf_cnpj');

            // se quiser created_at/updated_at padrão do Laravel, remova a linha abaixo
            // e deixe $timestamps em Models como true
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
