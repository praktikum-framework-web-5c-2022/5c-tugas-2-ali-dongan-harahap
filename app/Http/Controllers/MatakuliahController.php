<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatakuliahController extends Controller
{
    public function insert(){

        //RAW
        $sql = DB::insert("INSERT INTO matakuliahs (kode_mk,nama_mk,created_at,updated_at) VALUES ('MK001', 'Framework Pemrograman',now(),now())");
        dump($sql);

        //Query Builder
        $sql1 = DB::table('matakuliahs')->insert(
            [
                'kode_mk' => 'MK002',
                'nama_mk' => 'Pemrograman Berbasis Web',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($sql1);

        //ELOQUENT
        $sql2 = Matakuliah::create(
            [
                'kode_mk' => 'MK003',
                'nama_mk' => 'Jaringan Komputer',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dump($sql2);
        return "Data berhasil diproses";
    }

    public function select(){

        //RAW
        $sql = DB::select("SELECT * FROM matakuliahs");
        dd($sql);

        //Query Builder
        $sql1 = DB::table('matakuliahs')->get();
        dd($sql1);

        //ELOQUENT
        $sql2 = Matakuliah::all();
        dd($sql2);
    }

    public function update(){

        //RAW
        $sql = DB::update("UPDATE matakuliahs SET nama_mk='Data Mining',updated_at=now() WHERE id=?",[1]);
        dump($sql);

        //Query Builder
        $sql1 = DB::table('matakuliahs')
        ->where('id','2')
        ->update(
            [
                'nama_mk' => 'Pemrograman Berbasis Mobile',
                'updated_at' => now()
            ]
            );
        dump($sql1);

        #ELOQUENT
        $sql2 = Matakuliah::where('id','3')->first()->update([
            'nama_mk' => 'Cloud Computing',
            'updated_at' => now()
        ]);
        dump($sql2);

    }

    public function delete(){

        //RAW
        $sql = DB::delete("DELETE FROM matakuliahs WHERE kode_mk=?",['MK001']);
        dump($sql);

        //Query Builder
        $sql1 = DB::table('matakuliahs')
        ->where('kode_mk','MK002')
        ->delete();
        dump($sql1);

        //ELOQUENT
        $sql2 = Matakuliah::where('kode_mk','MK003')->delete();
        dump($sql2);
    }
}
