<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\PeriodeM;
use CodeIgniter\HTTP\RequestTrait;

class Periode extends ResourceController
{
    use RequestTrait;
    public function index()
    {
        $model = new PeriodeM();
        $data = $model->findAll();
        return $this->respond($data,200);
    }
    public function tambahdata()
    {

        $model = new PeriodeM();
        $data = $this->request->getJSON();

         $model->insert($data);

        return $this->respondCreated($data);
    }
}
