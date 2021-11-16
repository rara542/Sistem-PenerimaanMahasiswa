<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'page' => 'Dashboard'
        ];
        return view('template/index', $data);
    }
}
