<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigurationsTable extends Migration
{
    public function up()
    {
        Schema::create('configurations', function (Blueprint $table) {
            $table->id();
            $table->integer('id_related')->length(11);
            $table->enum('type_related',['SYSTEM','USER','CLIENT','OPERATOR'])->nullable();
            $table->char('name', 100);
            $table->string('value');
            $table->longText('description')->nullable();
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    public function down()
    {
        Schema::dropIfExists('configurations');
    }
}
