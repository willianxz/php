<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //Criar tabela
    //Esse aquivo é gerado com o comando:
    //php artisan make:migration create_categories_table
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->string('description')->nullable(); //Esse campo pode aceitar ser Nullo.
            $table->timestamps();
        });
    }

    //OBS:Para criar essa tabela execute o comando no terminal:
    //php artisan migrate
    //caso queira desfazer, execute o comando de rollback
    //php artisan migrate:rollback --step=1

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //Deletar tabela
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
