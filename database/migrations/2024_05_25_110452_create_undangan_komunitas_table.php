<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUndanganKomunitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('undangan_komunitas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('komunitas_id');
            $table->unsignedBigInteger('invited_by')->nullable();
            $table->enum('type', ['request', 'invite']);
            $table->enum('status', ['pending', 'accepted', 'rejected']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('penggunas')->onDelete('cascade');
            $table->foreign('komunitas_id')->references('id_komunitas')->on('komunitas')->onDelete('cascade');
            $table->foreign('invited_by')->references('id')->on('penggunas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('undangan_komunitas');
    }
}
