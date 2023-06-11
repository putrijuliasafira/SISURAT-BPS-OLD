<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keluars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_surat')->constrained('jenis_surat_keluars');
            $table->string('no_surat')->nullable();
            $table->string('perihal');
            $table->string('kepada');
            $table->date('tanggal_surat')->nullable();
            $table->text('isi_surat');
            $table->string('penanggung_jawab');
            $table->string('nip_penanggung_jawab');
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
        Schema::dropIfExists('surat_keluars');
    }
}
