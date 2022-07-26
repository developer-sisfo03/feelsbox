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
        Schema::create('traksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tes_mental_id');
            $table->foreignId('user_id');
            $table->foreignId('psikolog_id');
            $table->integer('total_jam_konseling');
            $table->integer('total_kuesioner');
            $table->integer('total_psikolog');
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
        Schema::dropIfExists('traksis');
    }
};
