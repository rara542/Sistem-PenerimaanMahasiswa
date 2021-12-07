<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\PeriodeM;

class Periode extends ResourceController
{
    public function __construct()
    {
        $this->periode = new PeriodeM();
    }
    public function index()
    {
        $data['title'] = "Periode";
        $data['page'] = "Daftar Mahasiswa";

        return view('pages/periode', $data);
    }
    public function read()
    {
        return $this->respond($this->periode->WHERE('deleted_at', null)->findAll());
    }
    public function post()
    {
        $model = new PeriodeM();
        $data = $this->request->getJSON();

        $model->insert($data);

        return $this->respondCreated($data);
    }

    public function put($id = null)
    {
        $model = new PeriodeM();
        $id = $this->request->getVar('id');
        $data = $this->request->getJSON();
        $model->update($id, $data);

        return $this->respondUpdated($data);
    }

    public function delete($id = null)
    {

        $model = new PeriodeM();
        $data = $model->delete($id);

        return $this->respondDeleted($data);
    }
}
