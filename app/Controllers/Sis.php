<?php

namespace App\Controllers;

class Sis extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pendaftaran'
            // 'page' => 'Daftar Mahasiswa'
        ];
        return view('siswa/pendaftaran', $data);
    }
}
