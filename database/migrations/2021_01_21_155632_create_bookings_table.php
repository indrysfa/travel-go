<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('id_property');
            $table->string('nama');
            $table->string('email');
            $table->string('no_telp');
            $table->string('no_ktp');
            $table->date('checkin_date');
            $table->date('checkout_date');
            $table->string('properti');
            $table->char('promotion');
            $table->integer('tamu');
            $table->integer('harga');
            $table->integer('status');
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
        Schema::dropIfExists('bookings');
    }
}
