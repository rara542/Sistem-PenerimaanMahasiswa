<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Mahasiswa',
            'page' => 'Daftar Mahasiswa'
        ];
        return view('pages/mahasiswa', $data);
    }
}