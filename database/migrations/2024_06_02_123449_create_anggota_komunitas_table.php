<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaKomunitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_komunitas', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->unsignedBigInteger('id_pengguna');
            $table->unsignedBigInteger('komunitas_id');
            $table->timestamps();

            // Foreign keys
            $table->foreign('id_pengguna')->references('id')->on('penggunas')->onDelete('cascade');
            $table->foreign('komunitas_id')->references('id_komunitas')->on('komunitas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggota_komunitas');
    }
}
