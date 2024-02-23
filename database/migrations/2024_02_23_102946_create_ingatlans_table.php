<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('ingatlans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategoria')->references('id')->on('kategorias');
            $table->string('leiras')->nullable()->default("Nincs leírás");
            // default dátum amikor rögzítésre kerül a rekord
            $table->date('hirdetesDatuma')->default(DB::raw('CURRENT_DATE'));
            // alapértelmezettként nem tehermentes, ugyanis azt külön kell jelölni az űrlapon
            $table->boolean('tehermentes')->default(0);
            $table->integer('ar');
            $table->string('kepUrl')->nullable()->default("https://static.vecteezy.com/system/resources/previews/000/425/085/non_2x/house-icon-vector-illustration.jpg");
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
        Schema::dropIfExists('ingatlans');
    }
};
