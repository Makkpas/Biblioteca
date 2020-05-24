<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGeneroLibro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genero_libro', function (Blueprint $table) {
          
            // $table->unsignedBigInteger('genero_id');
            // $table->unsignedBigInteger('libros_id');

            $table->primary(['genero_id','libros_id']);

            $table->foreignId('genero_id')
                ->refeces('id')
                ->on('generos')
                ->onDelete('cascade');

            $table->foreignId('libros_id')
                ->refeces('id')
                ->on('libros')
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
        Schema::dropIfExists('genero_libro');
    }
}
