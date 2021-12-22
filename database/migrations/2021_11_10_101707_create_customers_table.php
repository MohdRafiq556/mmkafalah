<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            //$table->integer('user_id');
            $table->string('nama_penuh');
            $table->string('nombor_ic');
            $table->timestamp('tarikhlahir');
            $table->string('tempat_lahir');
            $table->string('keturunan');
            $table->string('warganegara');
            $table->string('jantina');
            $table->string('agama');
            $table->string('nombor_telefon');
            $table->string('nombor_hp');
            $table->string('alamat_rumah');
            $table->string('poskod');
            $table->string('bandar');
            $table->string('negeri');
            $table->string('pekerjaan');
            $table->string('pendapatan');
            $table->string('nama_majikan');
            $table->string('sektor');
            $table->string('jumlah_tanggungan');
            $table->decimal('tinggi');
            $table->decimal('berat');
            $table->string('nombor_akaun');
            $table->string('bank');
            $table->string('pakej_pilihan');
            $table->string('jumlah_simpanan');
            $table->decimal('jum_simpanan');
            $table->string('email_pelanggan');
            $table->timestamp('tarikh');
            $table->string('pegawai_perunding');
            $table->integer('user_id');
            $table->string('gambar_ic');
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
        Schema::dropIfExists('customers');
    }
}
