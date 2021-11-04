<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UsersM;
use CodeIgniter\HTTP\RequestTrait;

class Users extends ResourceController
{
    use RequestTrait;
    public function index()
    {
        $model = new UsersM();
        $data = $model->findAll();
        return $this->respond($data,200);
    }
    public function tambahdata()
    {

        $model = new UsersM();
        $data = $this->request->getJSON();

         $model->insert($data);

        return $this->respondCreated($data);
    }
}
