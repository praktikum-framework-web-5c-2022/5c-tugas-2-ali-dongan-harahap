<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function insert(){
        
        //RAW
        $sql = DB::insert("INSERT INTO dosens (nidn,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at) VALUES ('20221170056', 'Achmad Suherman S2','Laki-Laki','Jl.Cibitung Raya','Bekasi','1987-11-27','achmad.png',now(),now())");
        dump($sql);

        //Query Builder
        $sql1 = DB::table('dosens')->insert(
            [
                'nidn' => '20221170057',
                'nama' => 'Safitri Putri S2',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl.Suka Raya',
                'tempat_lahir' => 'Bekasi',
                'tanggal_lahir' => '1989-01-22',
                'photo' => 'safitri.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($sql1);

        //ELOQUENT
        $sql2 = Dosen::create(
            [
                'nidn' => '20221170058',
                'nama' => 'Mentari Sinar',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl.Kupang Raya',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '1988-12-25',
                'photo' => 'mentari.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dump($sql2);
            return "Data berhasil diproses";
    }

    public function select(){

        //RAW
        $sql = DB::select("SELECT * FROM dosens");
        dd($sql);

        //Query Builder
        $sql2 = DB::table('dosens')->get();
        dd($sql2);

        //ELOQUENT
        $sql3 = Dosen::all();
        dd($sql3);
    }

    public function update(){

        // RAW
        $sql = DB::update("UPDATE dosens SET alamat='JL.Villa Jaya',updated_at=now() WHERE id=?",[2]);
        dump($sql);

        //Query Builder
        $sql1 = DB::table('dosens')
        ->where('id','1')
        ->update(
            [
                'alamat' => 'JL.Mawar Merpati',
                'updated_at' => now(),
            ]
            );
        dump($sql1);

        //ELOQUENT
        $sql2 = Dosen::where('id','3')->first()->update([
            'alamat' => 'JL.Mutiara Indah',
            'updated_at' => now(),
        ]);
        dump($sql2);


    }

    public function delete(){

        //RAW
        $sql = DB::delete("DELETE FROM dosens WHERE nidn=?",['20221170056']);
        dump($sql);

        //Query Builder
        $sql1 = DB::table('dosens')
        ->where('nidn','20221170057')
        ->delete();
        dump($sql1);

        //ELOQUENT
        $sql2 = Dosen::where('nidn','20221170058')->delete();
        dump($sql2);
    }
}
