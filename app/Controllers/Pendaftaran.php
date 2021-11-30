<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\PendaftaranM;
use CodeIgniter\HTTP\RequestTrait;

class Pendaftaran extends ResourceController
{
    use RequestTrait;
    public function index()
    {
        $data = [
            'title' => 'Pendaftaran'
            // 'page' => 'Pendaftaran Mahasiswa Baru'
        ];
        return view('siswa/pendaftaran', $data);
    }

    public function get()
    {
        $model = new PendaftaranM();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }

    public function tambahdata()
    {

        $model = new PendaftaranM();
        $data = $this->request->getJSON();

        $model->insert($data);

        return $this->respondCreated($data);
    }
}
