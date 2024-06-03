<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomunitasTable extends Migration
{
    public function up()
    {
        Schema::create('komunitas', function (Blueprint $table) {
            $table->id('id_komunitas');
            $table->string('nama_komunitas');
            $table->text('deskripsi');
            $table->unsignedBigInteger('id_pengguna'); // foreign key dari tabel pengguna
            // $table->unsignedBigInteger('id_permohonan'); // foreign key dari tabel permohonan_komunitas
            $table->timestamps();

            $table->foreign('id_pengguna')->references('id')->on('penggunas');
        });
    }

    public function down()
    {
        Schema::dropIfExists('komunitas');
    }
}
