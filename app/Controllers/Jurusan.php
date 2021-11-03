<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\JurusanM;
use CodeIgniter\HTTP\RequestTrait;

class Jurusan extends ResourceController
{
    use RequestTrait;
    public function index()
    {
        $model = new JurusanM();
        $data = $model->findAll();
        return $this->respond($data,200);
    }
    public function tambahdata()
    {

        $model = new JurusanM();
        $data = $this->request->getJSON();

         $model->insert($data);

        return $this->respondCreated($data);
    }
}
