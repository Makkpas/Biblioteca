<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAutorLibro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autor_libro', function (Blueprint $table) {
           
            // $table->bigInteger('libros_id')->unsigned();
            // $table->bigInteger('autor_id')->unsigned();
            
            $table->primary(['autor_id','libros_id']);

            $table->foreignId('autor_id')
                ->refeces('id')
                ->on('autors')
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
        Schema::dropIfExists('autor_libro');
    }
}
