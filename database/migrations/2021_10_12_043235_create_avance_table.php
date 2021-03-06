<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avance', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->date('fecha');
            $table->string('hora');
            $table->text('comentarios')->nullable();
            $table->text('comentario_director')->nullable();
            $table->text('comentario_secretario')->nullable();
            $table->text('comentario_vocal')->nullable();
            $table->text('ruta_avance')->nullable();
            $table->json('preguntas')->nullable();
            $table->timestamps();
            
            $table->foreign('usuario_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avance');
    }
}
