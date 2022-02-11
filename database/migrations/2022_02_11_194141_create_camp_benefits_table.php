<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();
            // cara pertama
            // $table->BigInteger('camp_id')->unsigned();
            // $table->unsignedBigInteger('camp_id');


            // cara kedua dengan foreignId dimana ada syaratnya yaitu nama tabel dengan Id harus sama
            $table->foreignId('camp_id')->constrained();
            $table->string('name');
            $table->timestamps();


            // cara pertama
            // $table->foreign('camp_id')->references('id')->on('Camps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camp_benefits');
    }
};
