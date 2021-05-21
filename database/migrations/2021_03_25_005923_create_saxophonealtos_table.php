<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaxophonealtosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saxophonealtos', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('brand',100);
            $table->string('mark', 40);
            $table->string('Register', 100);
            $table->string('color',100)-> nullable();
            $table->text ('description' ,100);
            $table->string('Pieces', 40);
            $table->string('charac',20);
            $table->text('comment',250)->nullable();
            $table->tinyInteger('available')->default(1);
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
        Schema::dropIfExists('saxophonealtos');
    }
}
