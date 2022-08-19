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
        Schema::create('konsultasis', function (Blueprint $table) {
            $table->id();
            $table->string('id_pemesanan')->unique()->nullable();
            $table->integer('client_id');
            $table->integer('psikolog_id');
            $table->time('waktu');
            $table->date('tanggal');
            $table->string('calendar_id')->nullable();
            $table->string('link')->nullable();
            $table->string('status')->nullable();
            $table->string('bukti_pembayaran')->nullable();
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
        Schema::dropIfExists('konsultasis');
    }
};
