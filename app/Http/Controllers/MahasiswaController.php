<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function insert(){

        //RAW
        $sql = DB::insert("INSERT INTO mahasiswas (npm,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at) VALUES ('20226370045', 'Ali Dongan Harahap','Laki-Laki','Jl.Bekasi Raya','Bekasi','2002-01-10','ali.png',now(),now())");
        dump($sql);

        //Query Builder
        $sql1 = DB::table('mahasiswas')->insert(
            [
                'npm' => '20226370046',
                'nama' => 'Altolyto Sitanggang',
                'jenis_kelamin' => 'Laki-Laki',
                'alamat' => 'Jl.Mustika Jaya',
                'tempat_lahir' => 'Medan',
                'tanggal_lahir' => '2002-06-12',
                'photo' => 'alto.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($sql1);

        //ELOQUENT
        $sql2 = Mahasiswa::create(
            [
                'npm' => '20226370047',
                'nama' => 'Annabella Dian',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl.Merpati',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '2002-11-16',
                'photo' => 'abel.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dump($sql2);
        return "Data berhasil diproses";
    }

    public function select(){

        //RAW
        $sql = DB::select("SELECT * FROM mahasiswas");
        dd($sql);

        //Query Builder
        $sql1 = DB::table('mahasiswas')->get();
        dd($sql1);

        //ELOQUENT
        $sql2 = Mahasiswa::all();
        dd($sql2);
    }

    public function update(){

        //RAW
        $sql = DB::update("UPDATE mahasiswas SET alamat='JL.Tambun Raya',updated_at=now() WHERE id=?",[1]);
        dump($sql);

        //Query Builder
        $sql1 = DB::table('mahasiswas')
        ->where('id','2')
        ->update(
            [
                'alamat' => 'JL.Mahkota Indah',
                'updated_at' => now()
            ]
            );
        dump($sql1);

        #ELOQUENT
        $sql2 = Mahasiswa::where('id','3')->first()->update([
            'alamat' => 'JL.Kali Deres',
            'updated_at' => now()
        ]);
        dump($sql2);

    }

    public function delete(){

        //RAW
        $sql = DB::delete("DELETE FROM mahasiswas WHERE npm=?",['20226370045']);
        dump($sql);

        //Query Builder
        $sql1 = DB::table('mahasiswas')
        ->where('npm','20226370046')
        ->delete();
        dump($sql1);

        //ELOQUENT
        $sql2 = Mahasiswa::where('npm','20226370047')->delete();
        dump($sql2);
    }
}
