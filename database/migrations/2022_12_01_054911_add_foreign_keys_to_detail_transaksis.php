<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailTransaksis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_transaksis', function (Blueprint $table) {
            $table->foreign('billing_id','billing_id_fk1')->references('id')->on('billings')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('transaksi_id','transaksi_id_fk2')->references('id')->on('transaksis')->onUpdate('CASCADE')->onDelete('RESTRICT');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_transaksis', function (Blueprint $table) {
        $table->dropFroeign('billing_id_fk1');
        $table->dropFroeign('transaksi_id_fk2');
        });
    }
}
