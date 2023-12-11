<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturBeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retur_beli', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pembelian_id');
            $table->bigInteger('barang_id');
            $table->bigInteger('user_id');
            $table->bigInteger('jumlah');
            $table->text('alasan');
            $table->date('tanggal');
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
        Schema::dropIfExists('retur_beli');
    }
}
