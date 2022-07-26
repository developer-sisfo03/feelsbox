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
        Schema::create('tes_mentals', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_soal');
            $table->string('soal');
            $table->string('opsi_1')->nullable();
            $table->string('opsi_2')->nullable();
            $table->string('opsi_3')->nullable();
            $table->string('opsi_4')->nullable();
            $table->integer('point_1')->nullable();
            $table->integer('point_2')->nullable();
            $table->integer('point_3')->nullable();
            $table->integer('point_4')->nullable();
            $table->string('indikator');
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
        Schema::dropIfExists('tes_mentals');
    }
};
