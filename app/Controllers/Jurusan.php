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
        $curl = curl_init();

        $curl = curl_init();

        curl_setopt_array($curl, [
          CURLOPT_URL => "http://10.10.20.204/api/v1/programstudi",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_POSTFIELDS => "",
          CURLOPT_COOKIE => "ci_session=p770ct6mnou29tftm0k4vn4o98ocimq2",
        ]);
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          $data = json_decode($response);
          $model->insertBatch($data->data);
        }


        return $this->respondCreated($data);
    }
    public function ubahdata($id = null)
    {
        $model = new JurusanM();
        $id = $this->request->getVar('id');
        $data = $this->request->getJSON();
        $model->update($id, $data);

        return $this->respondUpdated($data);
    }

    public function hapusdata($id = null)
    {

        $model = new JurusanM();
        $data = $model->delete($id);

        return $this->respondDeleted($data);
    }
}
