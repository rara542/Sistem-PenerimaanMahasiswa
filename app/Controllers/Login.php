<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
// use App\Models\JurusanM;
use CodeIgniter\HTTP\RequestTrait;

class Login extends ResourceController
{
    // use RequestTrait;
    public function index()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('pages/login', $data);
    }
    public function regis()
    {
        $data = [
            'title' => 'Registrasi'
        ];
        return view('pages/register', $data);
    }
}
