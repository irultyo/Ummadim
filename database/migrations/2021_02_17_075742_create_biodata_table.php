<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->id();
            $table->integer('nim');
            $table->integer('pic');
            $table->string('email_umm')->nullable();
            $table->string('email_alt')->nullable();
            $table->string('nama');
            $table->string('fakultas');
            $table->string('prodi');
            $table->integer('angkatan');
            $table->integer('semester');
            $table->string('status');
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
        Schema::dropIfExists('biodata');
    }
}
