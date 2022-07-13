<?php

namespace App\Http\Controllers;

class LatihanController extends Controller
{
    public function perkenalan($nama1, $alamat1, $umur1)
    {
        //PASSING CONTROLLER TO VIEW

        $nama = $nama1;
        $alamat = $alamat1;
        $umur = $umur1;

        return view('pages.perkenalan', compact('nama', 'alamat', 'umur'));
    }
    public function siswa()
    {
        $a = [
            array('id' => 1, 'name' => 'Dadang', 'age' => 15, 'hobby' => ['mancing', 'futsal', 'renang'],
                'mapel' => ['bahasa indonesia', 'mtk']),
            array('id' => 2, 'name' => 'Dudung', 'age' => 18, 'hobby' => ['baca', 'nyanyi'],
                'mapel' => [
                    'mapel1' => 'bahasa inggris', 'mapel2' => 'mtk',
                ]),
        ];
        // dd($a);
        return view('pages.siswa', ['siswa' => $a]);
    }public function mahasiswa()
    {
        $a = [
            ['id' => 1, 'namad' => 'Yusuf Bachtiar', 'matkul' => 'Pemprograman Web',
                'mahasiswa' => [
                    ['nama' => 'Muhamad salah', 'nilai' => 78],
                    ['nama' => 'Juju Junaedi', 'nilai' => 85],
                    ['nama' => 'Mamt alkatiri', 'nilai' => 90],
                ],
            ],
            ['id' => 2, 'namad' => 'Yaris Riyadi', 'matkul' => 'Pemprograman Mobile',
                'mahasiswa' => [
                    ['nama' => 'Angkara Messi', 'nilai' => 98],
                    ['nama' => 'Cristiano Ronaldo SUIIIIIII', 'nilai' => 100],
                ],
            ],
        ];
        return view('pages.mahasiswa', ['dosen' => $a]);

    }

}
