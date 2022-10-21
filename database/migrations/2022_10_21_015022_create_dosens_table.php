<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nidn',11)->unique();
            $table->string('nama',100);
            $table->enum('jenis_kelamin',['Laki-Laki','Perempuan']);
            $table->text('alamat');
            $table->string('tempat_lahir',100);
            $table->date('tanggal_lahir');
            $table->text('photo',75);
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
        Schema::dropIfExists('dosens');
    }
};
