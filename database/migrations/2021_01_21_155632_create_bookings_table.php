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
            $table->bigInteger('id_property')->unsigned();
            $table->string('nama');
            $table->string('email');
            $table->string('no_telp');
            $table->string('no_ktp');
            $table->date('checkin_date');
            $table->date('checkout_date');
            $table->char('promotion');
            $table->integer('tamu');
            $table->integer('harga');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('id_property')->references('id')->on('properties')->onUpdate('cascade')->onDelete('cascade');
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
