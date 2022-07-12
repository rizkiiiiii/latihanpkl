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

}
