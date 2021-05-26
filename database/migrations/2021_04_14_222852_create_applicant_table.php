<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::drop('applicants');
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable()->default(NULL);
            $table->double('idade')->nullable()->default(NULL);
            $table->string('email')->nullable()->default(NULL);
            $table->string('telefone')->nullable()->default(NULL);
            $table->string('pais')->nullable()->default(NULL);
            $table->string('estado')->nullable()->default(NULL);
            $table->string('cidade')->nullable()->default(NULL);
            $table->longText('carreira')->nullable(true);
            $table->longText('estudos')->nullable(true);
            $table->enum('linguas_portugues',['não conheço','basico','intermediario','avançado','fluente']);
            $table->enum('linguas_ingles',['não conheço','basico','intermediario','avançado','fluente']);
            $table->enum('linguas_espanhol',['não conheço','basico','intermediario','avançado','fluente']);
            $table->enum('linguas_chines',['não conheço','basico','intermediario','avançado','fluente']);
            $table->enum('linguas_frances',['não conheço','basico','intermediario','avançado','fluente']);
            $table->enum('linguas_alemao',['não conheço','basico','intermediario','avançado','fluente']);
            $table->enum('linguas_japones',['não conheço','basico','intermediario','avançado','fluente']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
}
