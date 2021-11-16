<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Mahasiswa',
            'page' => 'Daftar Mahasiswwa'
        ];
        return view('pages/mahasiswa', $data);
    }
}